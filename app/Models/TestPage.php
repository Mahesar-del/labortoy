<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'slug',
        'description',
        'bg_image',
        'quick_info_type',
        'quick_info_specimen',
        'quick_info_prep',
        'about_heading',
        'about_text',
        'about_image',
        'specimen_title',
        'specimen_description',
        'specimen_items',
        'preparation_title',
        'preparation_description',
        'preparation_items',
        'components_heading',
        'components_text',
        'results_heading',
        'results_text',
        'status',
    ];

    public function components()
    {
        return $this->hasMany(TestPageComponent::class);
    }

    public function results()
    {
        return $this->hasMany(TestPageResult::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
