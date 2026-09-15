<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarplateNumber extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'carplate_numbers';

    protected $fillable = [
        'plate',
        'category_id',
        'amount',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'carplate_tag',
            'carplate_number_id',
            'tag_id'
        );
    }
}