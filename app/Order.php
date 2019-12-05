<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    public function OrderDetails(): HasMany
    {
        return $this->hasMany(OrderDetails::class);
    }
}
