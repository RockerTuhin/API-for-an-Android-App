<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $fillable = ['item_name','item_updated_date','order_id'];
    // protected $attributes = [
    //     'order_id' => 0,
    // ];
}
