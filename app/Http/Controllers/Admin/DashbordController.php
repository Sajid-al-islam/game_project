<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashbordController extends Controller
{
    public function index()
    {
       $coin_generate= PortalRecharge::sum('amount');
	$data['users_balance']=User::sum('balance');

    	return view('backend.home')->with($data);
    }
 
}
