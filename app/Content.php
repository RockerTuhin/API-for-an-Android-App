<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $fillable = ['item_id','subItem_id','subSubItem_id','title','hints','name','designation','mobile_one','mobile_two','phone_one','phone_two','email_one','email_two','website','details','order_id'];
    // protected $attributes = [
    //     'order_id' => 0,
    // ];
}
