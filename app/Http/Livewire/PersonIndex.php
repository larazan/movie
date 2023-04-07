<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Person;
use App\Models\PersonImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class PersonIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showPersonModal = false;
    public $name;
    public $bio;
    public $message;
    public $content;
    public $birthDate;
    public $birthLocation;
    public $nationality;
    public $facebook;
    public $instagram;
    public $twitter;
    public $personId;
    public $file;
    public $files = [];
    public $oldImage;
    public $genderStatus = 0;
    public $genderStatuses = [
        0 => 'Male',
        1 => 'Female'
    ];

    public $countries = [
        'Afghanistan',
        'Albania',
        'Algeria',
        'Andorra',
        'Angola',
        'Antigua & Deps',
        'Argentina',
        'Armenia',
        'Australia',
        'Austria',
        'Azerbaijan',
        'Bahamas',
        'Bahrain',
        'Bangladesh',
        'Barbados',
        'Belarus',
        'Belgium',
        'Belize',
        'Benin',
        'Bermuda',
        'Bhutan',
        'Bolivia',
        'Bosnia Herzegovina',
        'Botswana',
        'Brazil',
        'Brunei',
        'Bulgaria',
        'Burkina',
        'Burundi',
        'Cambodia',
        'Cameroon',
        'Canada',
        'Cape Verde',
        'Central African Rep',
        'Chad',
        'Chile',
        'China',
        'Colombia',
        'Comoros',
        'Congo',
        'Congo (Democratic Rep)',
        'Costa Rica',
        'Croatia',
        'Cuba',
        'Cyprus',
        'Czech Republic',
        'Denmark',
        'Djibouti',
        'Dominica',
        'Dominican Republic',
        'East Timor',
        'Ecuador',
        'Egypt',
        'El Salvador',
        'Equatorial Guinea',
        'Eritrea',
        'Estonia',
        'Eswatini',
        'Ethiopia',
        'Fiji',
        'Finland',
        'France',
        'Gabon',
        'Gambia',
        'Georgia',
        'Germany',
        'Ghana',
        'Greece',
        'Grenada',
        'Guatemala',
        'Guinea',
        'Guinea-Bissau',
        'Guyana',
        'Haiti',
        'Honduras',
        'Hungary',
        'Iceland',
        'India',
        'Indonesia',
        'Iran',
        'Iraq',
        'Ireland (Republic)',
        'Israel',
        'Italy',
        'Ivory Coast',
        'Jamaica',
        'Japan',
        'Jordan',
        'Kazakhstan',
        'Kenya',
        'Kiribati',
        'Korea North',
        'Korea South',
        'Kosovo',
        'Kuwait',
        'Kyrgyzstan',
        'Laos',
        'Latvia',
        'Lebanon',
        'Lesotho',
        'Liberia',
        'Libya',
        'Liechtenstein',
        'Lithuania',
        'Luxembourg',
        'Macedonia',
        'Madagascar',
        'Malawi',
        'Malaysia',
        'Maldives',
        'Mali',
        'Malta',
        'Marshall Islands',
        'Mauritania',
        'Mauritius',
        'Mexico',
        'Micronesia',
        'Moldova',
        'Monaco',
        'Mongolia',
        'Montenegro',
        'Morocco',
        'Mozambique',
        'Myanmar',
        'Namibia',
        'Nauru',
        'Nepal',
        'Netherlands',
        'New Zealand',
        'Nicaragua',
        'Niger',
        'Nigeria',
        'Norway',
        'Oman',
        'Pakistan',
        'Palau',
        'Palestine',
        'Panama',
        'Papua New Guinea',
        'Paraguay',
        'Peru',
        'Philippines',
        'Poland',
        'Portugal',
        'Qatar',
        'Romania',
        'Russian Federation',
        'Rwanda',
        'St Kitts & Nevis',
        'St Lucia',
        'Saint Vincent & the Grenadines',
        'Samoa',
        'San Marino',
        'Sao Tome & Principe',
        'Saudi Arabia',
        'Senegal',
        'Serbia',
        'Seychelles',
        'Sierra Leone',
        'Singapore',
        'Slovakia',
        'Slovenia',
        'Solomon Islands',
        'Somalia',
        'South Africa',
        'South Sudan',
        'Spain',
        'Sri Lanka',
        'Sudan',
        'Suriname',
        'Sweden',
        'Switzerland',
        'Syria',
        'Taiwan',
        'Tajikistan',
        'Tanzania',
        'Thailand',
        'Togo',
        'Tonga',
        'Trinidad & Tobago',
        'Tunisia',
        'Turkey',
        'Turkmenistan',
        'Tuvalu',
        'Uganda',
        'Ukraine',
        'United Arab Emirates',
        'United Kingdom',
        'United States',
        'Uruguay',
        'Uzbekistan',
        'Vanuatu',
        'Vatican City',
        'Venezuela',
        'Vietnam',
        'Yemen',
        'Zambia',
        'Zimbabwe',
    ];

    public $personStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'name' => 'required',
        'genderStatus' => 'required',
        'bio' => 'required',
        'birthDate' => 'required',
        'birthLocation' => 'required',
        'nationality' => 'required',
        'facebook' => 'required',
        'instagram' => 'required',
        'twitter' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $this->birthDate = today()->format('Y-m-d');
    }

    public function showCreateModal()
    {
        $this->showPersonModal = true;
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
        Person::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Person deleted successfully']);
    }

    public function createPerson()
    {
        dd($this->bio);
        $this->validate();

        $randId = Str::random(10);
        
        $person = Person::create([
            'name' => $this->name,
            'rand_id' => $randId,
            'slug' => Str::slug($this->name) . '_' . $randId,
            'gender_id' => $this->genderStatus,
            'bio' => $this->bio,
            'birth_date' => $this->birthDate,
            'birth_location' => $this->birthLocation,
            'nationality' => $this->nationality,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'twitter' => $this->twitter,
            // 'origin' => $filePath,
            // 'large' => $resizedImage['large'],
            // 'medium' => $resizedImage['medium'],
            // 'small' => $resizedImage['small'],
            'status' => $this->personStatus,
        ]);

        if ($this->files) {
            // $this->files = json_encode($this->files);
            $i = 1;
            foreach ($this->files as $image) {
                $new = Str::slug($this->name) . '_' . time().$i++;
                $filename = $new . '.' . $image->getClientOriginalName();
                $filePath = $image->storeAs(PersonImage::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($image, $filename, PersonImage::UPLOAD_DIR); 

                $person->personImages()->create([
                    'person_id' => $person->id,
                    'origin' => $filePath,
                    'large' => $resizedImage['large'],
                    'medium' => $resizedImage['medium'],
                    'small' => $resizedImage['small'],
                    'status' => $this->personStatus,
                ]);
            }
        }

        
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Person created successfully']);
    }

    public function showEditModal($personId)
    {
        $this->reset(['name']);
        $this->personId = $personId;
        $person = Person::find($personId);
        $this->name = $person->name;
        $this->bio = $person->bio;
        $this->birthDate = $person->birth_date;
        $this->birthLocation = $person->birth_location;
        $this->nationality = $person->nationality;
        $this->facebook = $person->facebook;
        $this->instagram = $person->instagram;
        $this->twitter = $person->twitter;
        $this->oldImage = $person->small;
        $this->personStatus = $person->status;
        
        $this->showPersonModal = true;
    }
    
    public function updatePerson()
    {
        $person = Person::findOrFail($this->personId);

        $this->validate();
        
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();

        if ($this->personId) {
            if ($person) {
                $randId = Str::random(10);
               // delete image
			    $this->deleteImage($this->personId);
                $filePath = $this->file->storeAs(Person::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Person::UPLOAD_DIR);

                Person::create([
                    'name' => $this->name,
                    'rand_id' => $randId,
                    'slug' => Str::slug($this->name) . '_' . $randId,
                    'gender_id' => $this->genderStatus,
                    'bio' => $this->bio,
                    'birth_date' => $this->birthDate,
                    'birth_location' => $this->birthLocation,
                    'nationality' => $this->nationality,
                    'facebook' => $this->facebook,
                    'instagram' => $this->instagram,
                    'twitter' => $this->twitter,
                    'origin' => $filePath,
                    'large' => $resizedImage['large'],
                    'medium' => $resizedImage['medium'],
                    'small' => $resizedImage['small'],
                    'status' => $this->personStatus,
                ]);
            }
        }

        $this->reset();
        $this->showPersonModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Person updated successfully']);
    }

    public function deletePerson($personId)
    {
        $person = Person::findOrFail($personId);
        $person->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Person deleted successfully']);
    }

    public function closePersonModal()
    {
        $this->showPersonModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.person-index', [
            'persons' => Person::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Person::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Person::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		$largeImageFilePath = $folder . '/large/' . $fileName;
		$size = explode('x', Person::LARGE);
		list($width, $height) = $size;

		$largeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
			$resizedImage['large'] = $largeImageFilePath;
		}

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Movie::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $personImage = Person::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$personImage->original)) {
            Storage::delete($path.$personImage->original);
		}
		
        if (Storage::exists($path.$personImage->small)) {
            Storage::delete($path.$personImage->small);
        }   

		if (Storage::exists($path.$personImage->medium)) {
            Storage::delete($path.$personImage->medium);
        }

        if (Storage::exists($path.$personImage->large)) {
            Storage::delete($path.$personImage->large);
        }

        return true;
    }
}
