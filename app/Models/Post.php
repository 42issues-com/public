<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory, HasSlug;

    /**
     * The attributes that should be appended to the model's array form.
     *
     * @var array
     */
    protected $appends = ['excerpt', 'formatted_created_at'];

    protected $with = ['user'];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
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

    // Add an accessor for the formatted date
    public function getFormattedCreatedAtAttribute(): ?string
    {
        return $this->created_at?->format('M d, Y');
    }

    // Get the author
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
