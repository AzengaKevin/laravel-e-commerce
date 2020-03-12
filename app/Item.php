<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Item extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function video()
    {
        return $this->morphOne(Video::class, 'videoable');
    }

    public function subDepartment()
    {
        return $this->belongsTo(SubDepartment::class);
    }

    /**
     * @return Image | null depending on whether the user has set it or some defaults
     */
    public function displayImage()
    {
        if ($this->images->count()) {
            return $this->images->first();
        }

        return null;
    }

    /**
     * @return string of the url to access the item publicly
     */
    public function url()
    {
        return "/products/{$this->id}-" . Str::slug($this->name);
    }
}
