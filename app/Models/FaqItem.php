<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqItem extends Model
{
    use HasFactory;

    protected $table = 'faq_items';

    protected $fillable = [
        'faq_category_id',
        'question',
        'answer',
        'sort_order',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'faq_category_id');
    }
}
