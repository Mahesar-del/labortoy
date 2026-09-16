<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'image_path',
        'excerpt',
        'content',
        'author',
        'publish_date',
        'category',
        'tags',
        'key_takeaways',
        'image_alt_text',
        'meta_title',
        'meta_robots',
        'meta_description',
        'meta_keywords',
        'schema_json',
        'show_on_home',
        'feature_on_home'
    ];

    protected $casts = [
        'publish_date' => 'datetime',
        'allow_indexing' => 'boolean',
        'visibility_public' => 'boolean'
    ];

    public function getImageUrlAttribute()
    {
        $path = trim((string) $this->image_path);
        if ($path === '') {
            return null;
        }

        $path = ltrim($path, '/');
        if (strpos($path, 'images/') === 0) {
            return asset($path);
        }

        $path = preg_replace('#^(storage/)+#', '', $path);
        return asset('storage/' . $path);
    }

    public function authorDetails()
    {
        return $this->belongsTo(Author::class, 'author', 'name');
    }
}
