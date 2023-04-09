<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductInventory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class ProductIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showProductModal = false;
    public $showProductDetailModal = false;

    public $sku;
    public $type;
    public $name;
    public $description;
    public $productId;
    public $file;
    public $files = [];
    public $publishStatus = 0;
    public $status = [
        0 => 'unpublish',
        1 => 'publish',
    ]; 
    public $stock;
    public $qty;
    public $metaTitle;
    public $metaDesc;
    public $metaImg;
    public $price;
    public $discount;
    public $discountType;
    public $weight;
    public $height;
    public $length;
    public $width;
    public $oldImage;
    public $productImages;
    public $productStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'name' => 'required',
        'files' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
       
    }

    public function showCreateModal()
    {
        $this->showProductModal = true;
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function deleteId($id)
    {
        $this->showConfirmModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        Product::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Product deleted successfully']);
    }

    public function createProduct()
    {
        $this->validate();

        $randId = Str::random(18);

        $product = new Product();
        $product->user_id = Auth::user()->id;
        $product->rand_id = $randId;
        $product->name = $this->name;
        $product->slug = Str::slug($this->name) . '_' . $randId;
        $product->sku = $this->sku;
        $product->description = $this->description;
        $product->meta_title = $this->metaTitle;
        $product->meta_description = $this->metaDesc;
        $product->price = $this->price;
        $product->discount = $this->discount;
        $product->discount_type = $this->discountType;
        $product->published = $this->publishStatus;
        $product->weight = $this->weight;
        $product->height = $this->height;
        $product->length = $this->length;
        $product->width = $this->width;
        $product->status = $this->productStatus;
        $product->save();

        $inventory = new ProductInventory();
        $inventory->product_id = $product->id; 
        $inventory->qty = $this->stock; 
        $inventory->save();

        if(!empty($this->files)) {
            foreach ($this->files as $key => $image) {
                $pimage = new ProductImage();
                $pimage->product_id = $product->id;
                $new = Str::slug($this->name) . '_' . Carbon::now()->timestamp . $key;
                $filename = $new . '.' . $this->files[$key]->getClientOriginalExtension();
                $filePath = $this->files[$key]->storeAs(ProductImage::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->files[$key], $filename, ProductImage::UPLOAD_DIR); 

                $pimage->original = $filePath;
                $pimage->large = $resizedImage['large'];
                $pimage->medium = $resizedImage['medium'];
                $pimage->small = $resizedImage['small'];
                $pimage->status = 'active';

                $pimage->save();
            }
        }

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Product created successfully']);
    }

    public function showEditModal($productId)
    {
        $this->reset(['name']);
        $this->productId = $productId;
        $product = Product::find($productId);
        $this->sku = $product->sku;
        $this->type = $product->type;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->publishStatus = $product->published;
        $this->discountType = $product->discount_type;
        $this->stock = $product->current_stock;
        $this->metaTitle = $product->meta_title;
        $this->metaDesc = $product->meta_description;
        // $this->metaImg = $product->meta_image;
        $this->price = $product->price;
        $this->discount = $product->discount;
        $this->weight = $product->weight;
        $this->width = $product->width;
        $this->height = $product->height;
        $this->length = $product->length;
        $this->oldImage = $product->productImages->first()->small;
        $this->productImages = $product->productImages;
        $this->productStatus = $product->status;
        $this->showProductModal = true;
    }

    public function showDetailModal()
    {
        // $this->reset(['name']);
        // $this->productId = $productId;
        // $product = Product::find($productId);
        // $this->name = $product->name;
        // $this->sku = $product->sku;
        // $this->description = $product->description;
        // $this->discount = $product->discount;
        // $this->discountType = $product->discount_type;
        // $this->weight = $product->weight;
        // $this->height = $product->height;
        // $this->width = $product->width;
        // $this->length = $product->length;
        // $this->metaTitle = $product->meta_title;
        // $this->metaDesc = $product->meta_description;
        // $this->oldImage = $product->productImages->first()->small;
        // $this->publishStatus = $product->published;
        // $this->productStatus = $product->status;

        $this->showProductDetailModal = true;
    }
    
    public function updateProduct()
    {
        $product = Product::findOrFail($this->productId);
        $this->validate();
        
        if ($this->productId) {
            if ($product) {
                $randId = Str::random(18);

                $product = Product::where('id', $this->productId)->first();;
                $product->user_id = Auth::user()->id;
                $product->rand_id = $randId;
                $product->name = $this->name;
                $product->slug = Str::slug($this->name) . '_' . $randId;
                $product->sku = $this->sku;
                $product->description = $this->description;
                $product->meta_title = $this->metaTitle;
                $product->meta_description = $this->metaDesc;
                $product->price = $this->price;
                $product->discount = $this->discount;
                $product->discount_type = $this->discountType;
                $product->published = $this->publishStatus;
                $product->weight = $this->weight;
                $product->height = $this->height;
                $product->length = $this->length;
                $product->width = $this->width;
                $product->status = $this->productStatus;
                $product->save();

                ProductInventory::updateOrCreate(['product_id' => $product->id], ['qty' => $this->stock]);
        
                if(!empty($this->files)) {
                    foreach ($this->files as $key => $image) {
                        $pimage = new ProductImage();
                        $pimage->product_id = $product->id;

                        $new = Str::slug($this->name) . '_' . Carbon::now()->timestamp . $key;
                        $filename = $new . '.' . $this->files[$key]->getClientOriginalExtension();
                        $filePath = $this->files[$key]->storeAs(ProductImage::UPLOAD_DIR, $filename, 'public');
                        $resizedImage = $this->_resizeImage($this->files[$key], $filename, ProductImage::UPLOAD_DIR); 
        
                        $pimage->original = $filePath;
                        $pimage->large = $resizedImage['large'];
                        $pimage->medium = $resizedImage['medium'];
                        $pimage->small = $resizedImage['small'];
                        $pimage->status = 'active';
        
                        $pimage->save();
                    }
                }
                
            }
        }

        $this->reset();
        $this->showProductModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Product updated successfully']);
    }

    public function deleteProduct($productId)
    {
        $product = Product::findOrFail($productId);
        $product->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Product deleted successfully']);
    }

    public function closeProductModal()
    {
        $this->showProductModal = false;
    }

    public function closeDetailModal()
    {
        $this->showProductDetailModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.product-index', [
            'products' => Product::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', ProductImage::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', ProductImage::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		$largeImageFilePath = $folder . '/large/' . $fileName;
		$size = explode('x', ProductImage::LARGE);
		list($width, $height) = $size;

		$largeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
			$resizedImage['large'] = $largeImageFilePath;
		}

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Product::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $productImage = ProductImage::where(['product_id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$productImage->original)) {
            Storage::delete($path.$productImage->original);
		}
		
        if (Storage::exists($path.$productImage->small)) {
            Storage::delete($path.$productImage->small);
        }   

		if (Storage::exists($path.$productImage->medium)) {
            Storage::delete($path.$productImage->medium);
        }

        if (Storage::exists($path.$productImage->large)) {
            Storage::delete($path.$productImage->large);
        }
             
        return true;
    }

    
}
