<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\RealState;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $userAuth = Auth::user();
        $users=User::count();
        $normalUsers=User::where('role','normal')->count();
        $ownerUsers=User::where('role','owner')->count();
        $normalUsersPr=number_format($normalUsers*100/$users);
        $ownerUsersPr=number_format($ownerUsers*100/$users);


        









        return view('users.dashboard',compact('userAuth','normalUsers','ownerUsers','ownerUsersPr','normalUsersPr'));
    }  
}
