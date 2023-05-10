<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    use HasFactory;
    protected $fillable=['model','uuid','collection_name','name','file_name','mime_type','disk','conversions_disk','size','manipulations',
                         'custom_properties' ,'generated_conversions','responsive_images','order_column'     ];
}
