<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderDetails extends Model
{
    public function Product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
