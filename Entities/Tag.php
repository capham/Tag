<?php

namespace Modules\Tag\Entities;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Translatable;

class Tag extends Model
{
    use Translatable;

    protected $table = 'tag__tags';
    public $translatedAttributes = ['slug', 'name'];
    protected $fillable = ['namespace', 'slug', 'name'];
}
