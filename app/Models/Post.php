<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'posts';

    public $translatable = ['title', 'slug', 'description'];

    protected $fillable = ['title', 'slug', 'description'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
