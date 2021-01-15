<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Roles;

class RolesController extends Controller
{
    public function index()
    {
        $roles = DB::table('roles')->get();
        return view('roles/index', ['roles' => $roles]);
    }
}
