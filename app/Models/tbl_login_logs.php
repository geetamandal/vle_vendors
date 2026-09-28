<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class tbl_login_logs extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'fk_user_id',
        'role_id',
        'login_date_time',
        'logout_date_time',
        'login_message',
        'logout_message',
        'login_ip_address',
        'logout_ip_address',
        'create_ip',
        'create_by',
        'create_date',
        'updated_ip',
        'updated_date',
        'updated_by'
       
    ];
}
