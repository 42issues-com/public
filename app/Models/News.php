<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class News extends Model
{
    /** @use HasFactory<\Database\Factories\NewsFactory> */
    use HasFactory, HasSlug;

    /**
     * The attributes that should be appended to the model's array form.
     *
     * @var array
     */
    protected $appends = ['excerpt'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get a shortened version of the body field as an excerpt.
     *
     * This accessor removes HTML tags from the body content and limits it
     * to 100 characters, providing a concise summary of the article's body.
     *
     * @return string The truncated plain-text version of the body.
     */
    public function getExcerptAttribute(): string
    {
        $plainText = strip_tags($this->body);

        return \Illuminate\Support\Str::limit($plainText, 240);
    }
}
