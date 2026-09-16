<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestPageResult extends Model
{
    protected $fillable = ['test_page_id', 'title', 'description'];

    public function testPage()
    {
        return $this->belongsTo(TestPage::class);
    }
}
