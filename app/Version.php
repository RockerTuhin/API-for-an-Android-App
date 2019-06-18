<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $table = 'versions';
    protected $fillable = ['data_version','data_url','popup_notification_title','popup_notification_message','popup_notification_positive_btn','popup_notification_positive_url_link','popup_notification_negative_btn'];
}
