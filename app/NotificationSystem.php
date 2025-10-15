<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationSystem extends Model
{
    protected $table = 'notification_system';
    protected $fillable = [
        'notification_system_title',
        'notification_system_text',
        'notification_date' ,
        'notification_time' ,
        ];   

}
