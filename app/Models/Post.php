<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'posts';

    public $translatable = ['title', 'slug', 'description'];

    protected $fillable = ['title', 'slug', 'description'];

    /* public function getRouteKeyName()
    {
        return 'slug';
    } */
}
