<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSlide extends Model
{
    use HasFactory;

	protected $table = 'product_slides';

    protected $guarded = [
		'id',
		'created_at',
		'updated_at',
	];

	public const UPLOAD_DIR = 'uploads/product-slides';

	public const ACTIVE = 'active';
	public const INACTIVE = 'inactive';

	public const STATUSES = [
		self::ACTIVE => 'Active',
		self::INACTIVE => 'Inactive',
	];

	public const EXTRA_LARGE = '1920x643';
	public const SMALL = '135x75';
}
