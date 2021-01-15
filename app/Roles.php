<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primarykey = 'id';
    public $timestamps = false;    // defaultnya true
    protected $fillable = ['name'];    // data yang boleh diisi
}
