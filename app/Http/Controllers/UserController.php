<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;


class UserController extends Controller
{
    public function getNormals(){
        $normal_users=User::where('role','normal')->get();
        $userAuth = Auth::user();

        return view('users.normalUser',compact('normal_users','userAuth'));

    }
    public function getOwners(){
        $owner_users=User::where('role','owner')->get();
        $userAuth = Auth::user();

        return view('users.ownerUser',compact('owner_users','userAuth'));

    }

    public function delete($id,Request $request){
        $user=User::find($id);
        $user->delete();
        $request->session()->flash('message', 'you delete the user successfuly');
        return redirect()->back();
    }
    public function favorite(){
      $favorites=Favorite::get();
      $users=User::get();
      $userAuth=Auth::user();
      return view('users.favorites',compact('favorites','userAuth','users'));
    }
}
