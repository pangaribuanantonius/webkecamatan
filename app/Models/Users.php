<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'user';
    protected $guarded = [];
    public $incrementing = false;
    public function getRouteKeyName(){
        return 'username';
    }
}
