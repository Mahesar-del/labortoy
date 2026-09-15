<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPageComponent extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_page_id',
        'title',
        'description',
        'icon',
    ];

    public function testPage()
    {
        return $this->belongsTo(TestPage::class);
    }
}
