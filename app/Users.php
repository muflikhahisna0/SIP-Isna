<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primarykey = 'id';
    public $timestamps = false;    // defaultnya true
    protected $fillable = ['role_id', 'name', 'username', 'email', 'password'];    // data yang boleh diisi
}
