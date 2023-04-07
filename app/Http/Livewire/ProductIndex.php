<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class ProductIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showProductModal = false;
    public $showProductDetailModal = false;

    public $code;
    public $sku;
    public $type;
    public $name;
    public $details;
    public $productId;
    public $file;
    public $publishStatus = 0;
    public $status = [
        0 => 'unpublish',
        1 => 'publish',
    ]; 
    public $stock;
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
        'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
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
  
        $new = Str::slug($this->name) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Product::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Product::UPLOAD_DIR);
  

        Product::create([
            'user_id' => Auth::user()->id,
            'rand_id' => Str::random(18),
            'parent_id' => $this->groupId,
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'sku' => $this->sku,
            'details' => $this->details,
            'meta_title' => $this->metaTitle,
            'meta_description' => $this->metaDesc,
            'price' => $this->price,
            'discount' => $this->discount,
            'discount_type' => $this->discountType,
            'current_stock' => $this->stock,
            'published' => $this->publishStatus,
            'weight' => $this->weight,
            'height' => $this->height,
            'length' => $this->length,
            'width' => $this->width,
            'images' => $filePath,
            'thumbnail' => $resizedImage['small'],
            'status' => $this->productStatus,
        ]);

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
        $this->details = $product->details;
        $this->publishStatus = $product->published;
        $this->discountType = $product->discount_type;
        $this->stock = $product->current_stock;
        $this->metaTitle = $product->meta_title;
        $this->metaDesc = $product->meta_description;
        $this->metaImg = $product->meta_image;
        $this->price = $product->price;
        $this->discount = $product->discount;
        $this->weight = $product->weight;
        $this->width = $product->width;
        $this->height = $product->height;
        $this->length = $product->length;
      
        $this->oldImage = $product->thumbnail;
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
        // $this->details = $product->details;
        // $this->discount = $product->discount;
        // $this->discountType = $product->discount_type;
        // $this->weight = $product->weight;
        // $this->height = $product->height;
        // $this->width = $product->width;
        // $this->length = $product->length;
        // $this->metaTitle = $product->meta_title;
        // $this->metaDesc = $product->meta_description;
        // $this->oldImage = $product->thumbnail;
        // $this->publishStatus = $product->published;
        // $this->productStatus = $product->status;

        $this->showProductDetailModal = true;
    }
    
    public function updateProduct()
    {
        $product = Product::findOrFail($this->productId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->productId) {
            if ($product) {
               // delete image
			    $this->deleteImage($this->productId);
                // IMAGE
                $filePath = $this->file->storeAs(Product::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Product::UPLOAD_DIR);

                $product->update([
                    'user_id' => Auth::user()->id,
                    'rand_id' => Str::random(18),
                    'parent_id' => $this->groupId,
                    'name' => $this->name,
                    'slug' => Str::slug($this->name),
                    'sku' => $this->sku,
                    'details' => $this->details,
                    'meta_title' => $this->metaTitle,
                    'meta_description' => $this->metaDesc,
                    'price' => $this->price,
                    'discount' => $this->discount,
                    'discount_type' => $this->discountType,
                    'current_stock' => $this->stock,
                    'published' => $this->publishStatus,
                    'weight' => $this->weight,
                    'length' => $this->length,
                    'width' => $this->width,
                    'images' => $filePath,
                    'thumbnail' => $resizedImage['small'],
                    'status' => $this->productStatus,
                ]);
                
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

    public function download($id)
    {
        $productPath = Product::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$productPath->audio)) {
            return response()->download($path.$productPath->audio);
		}
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
		$size = explode('x', Product::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Product::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Product::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

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
        $productImage = Product::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$productImage->images)) {
            Storage::delete($path.$productImage->images);
		}
		
        if (Storage::exists($path.$productImage->thumbnail)) {
            Storage::delete($path.$productImage->thumbnail);
        }   

		// if (Storage::exists($path.$productImage->medium)) {
        //     Storage::delete($path.$productImage->medium);
        // }
             
        return true;
    }

    
}
