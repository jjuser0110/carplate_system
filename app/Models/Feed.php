<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feed extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'url',
        'title',
        'description',
        'arrangement',
        'is_active',
    ];

    public function coverPhoto()
    {
        return $this->morphOne('App\Models\FileAttachment', 'content')->where('type', 'cover_photo');
    }
}
