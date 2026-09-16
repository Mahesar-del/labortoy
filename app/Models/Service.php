<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function testPages()
    {
        return $this->hasMany(TestPage::class);
    }

    public function faqs()
    {
        return $this->hasMany(ServiceFaq::class);
    }
}
