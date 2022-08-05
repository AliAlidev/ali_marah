<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\RealState;
use App\Models\State;
use App\Models\Property;
use App\Models\Category;
use App\Models\Period;



class ReController extends Controller
{
    public function equip()
    {
        $userAuth = Auth::user();
        $users = User::get();
        $states = State::get();
        $real_estates_one = RealState::where('state_id', 1)->get();
        $real_estates_two = RealState::where('state_id', 2)->get();

        $real_estates_three = RealState::where('state_id', 3)->get();

        return view('Real Estates.equip', compact('userAuth', 'users', 'real_estates_one', 'real_estates_two', 'real_estates_three', 'states'));
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function property()
    {
        $userAuth = Auth::user();
        $users = User::get();
        $properties = Property::get();
        $real_estates_tabo = RealState::where('property_id', 1)->get();
        $real_estates_asham = RealState::where('property_id', 2)->get();
        $real_estates = RealState::get();
        return view('Real Estates.property', compact('userAuth', 'users', 'properties', 'real_estates_tabo', 'real_estates', 'real_estates_asham'));
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function active()
    {
        $userAuth = Auth::user();
        $users = User::get();
        $properties = Property::get();
        $real_estates_one = RealState::where('active', 1)->get();
        $real_estates_two = RealState::where('active', 0)->get();
        $real_estates = RealState::get();
        return view('Real Estates.active', compact('userAuth', 'users', 'real_estates_one', 'real_estates_two', 'real_estates'));
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editShow($id)
    {
        $re = RealState::find($id);
        $userAuth = Auth::user();
        return view('Real Estates.edit', compact('userAuth', 're'));
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edit(Request $request)
    {
        if ($request->active != null) {
            $re = RealState::where('id', $request->id)->first();

            $re->active = $request->active;
            $re->save();
        }
        $request->session()->flash('message', 'you edit it successfully');
        return redirect('active_real_estates');
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function categories()
    {
        $categories = Category::all();
        $userAuth = Auth::user();
        $users =  User::all();
        $real_estates = RealState::all();
        $real_estates_one = RealState::where('category_id', 1)->paginate(2);
        $period = Period::all();
        $real_estates_two = RealState::where('category_id', 2)->paginate(2);
        $real_estates_three = RealState::where('category_id', 3)->paginate(2);
        $real_estates_four = RealState::where('category_id', 4)->paginate(2);
        return view('Real Estates.categories', compact('categories', 'period', 'real_estates', 'userAuth', 'users', 'real_estates_one', 'real_estates_two', 'real_estates_three', 'real_estates_four'));
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function create_real_estate()
    {
        $userAuth = Auth::user();
        $categories = Category::get();
        $states = State::get();
        $periods = Period::get();
        $properties = Property::get();
        $users = User::get();
        return view('Real Estates.create',['users'=>$users, 'userAuth'=>$userAuth, 'categories'=>$categories,'states'=>$states,'periods' => $periods,'properties' => $properties]);
    }

    public function store_real_estate(Request $request)
    {
        dd($request->data);
    }
}
