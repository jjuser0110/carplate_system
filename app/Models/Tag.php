<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'tag_name',
        'color',
        'arrangement',
        'is_active',
    ];

    public function carplateNumbers()
    {
        return $this->belongsToMany(
            CarplateNumber::class,
            'carplate_tag',
            'tag_id',
            'carplate_number_id'
        );
    }
}