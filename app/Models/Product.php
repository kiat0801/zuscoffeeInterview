<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'status'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status'    =>  'boolean',
    ];

    /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }

    public static function saveImageUrl($url)
    {
        $imagePath = $url->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 500);
        $image->save();

        return $imagePath;
    }

}
