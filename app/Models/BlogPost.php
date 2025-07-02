<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'category',
        'author',
        'reading_time',
        'featured_image',
        'is_featured',
        'is_published',
        'views_count',
        'comments_count',
        'published_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    // Accessors
    public function getFeaturedImageUrlAttribute()
    {
        if ($this->featured_image) {
            return Storage::url($this->featured_image);
        }
        
        return '/placeholder.svg?height=400&width=600';
    }

    public function getFormattedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('M j, Y') : $this->created_at->format('M j, Y');
    }

    public function getCategoryColorAttribute()
    {
        $colors = [
            'Technology' => 'bg-blue-600',
            'Hardware' => 'bg-indigo-600',
            'Tips' => 'bg-teal-600',
            'Security' => 'bg-green-600',
            'AI' => 'bg-red-600',
            'Software' => 'bg-purple-600',
        ];

        return $colors[$this->category] ?? 'bg-gray-600';
    }

    public function getExcerptLimitedAttribute()
    {
        return \Str::limit($this->excerpt, 150);
    }

    // Route model binding
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Generate unique slug from title
     */
    public static function generateUniqueSlug($title, $id = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (static::where('slug', $slug)->when($id, function($query, $id) {
            return $query->where('id', '!=', $id);
        })->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = static::generateUniqueSlug($post->title);
            }
            if (empty($post->published_at) && $post->is_published) {
                $post->published_at = now();
            }
        });

        static::updating(function ($post) {
            if ($post->isDirty('title') && (empty($post->getOriginal('slug')) || $post->slug === Str::slug($post->getOriginal('title')))) {
                $post->slug = static::generateUniqueSlug($post->title, $post->id);
            }
        });
    }
}
