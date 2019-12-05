<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    //
    public function Category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
