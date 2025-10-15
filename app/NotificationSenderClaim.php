<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationSenderClaim extends Model
{
    protected $fillable = [
        'user_id', 
        'notification_title',
        'ar_notification_title' , 
        'notification_text',
        'ar_notification_text' ,
        'notification_date' ,
        'notification_time' ,
        'request_id' ,
        'request_type' ,
    ];   

}
