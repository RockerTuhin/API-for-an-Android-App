<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubItem extends Model
{
    protected $table = 'subItems';
    protected $fillable = ['item_id','subitem_name','order_id'];
    // protected $attributes = [
    //     'order_id' => 0,
    // ];
}
