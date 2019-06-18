<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubItem extends Model
{
    protected $table = 'subSubItems';
    protected $fillable = ['item_id','subItem_id','sub_subitem_name','order_id'];
    // protected $attributes = [
    //     'order_id' => 0,
    // ];
}
