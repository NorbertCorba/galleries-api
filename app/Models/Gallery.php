<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\User;


class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function images() {

        return $this->hasMany(Image::class);
    }

    public function user() {

        return $this->belongsTo(User::class);
    }
}
