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
use App\Models\RealEstateImage;
use App\Models\Room;

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
        // $properties = Property::get();
        $users = User::get();
        return view('Real Estates.create', ['users' => $users, 'userAuth' => $userAuth, 'categories' => $categories, 'states' => $states, 'periods' => $periods]);
    }

    public function store_real_estate(Request $request)
    {
        // dd($request->all());
        $chimney = 0;
        $swimming_pool = 0;
        $elevator = 0;
        $with_rocks = 0;
        $staircase = 0;
        $alternative_energy = 0;
        $Water_well = 0;
        $hangar = 0;
        $lanes = 0;
        $workshop = 0;
        if (isset($request->chimney)) {
            $chimney = $request->chimney;
        }
        if (isset($request->swimming_pool)) {
            $swimming_pool = $request->swimming_pool;
        }
        if (isset($request->elevator)) {
            $elevator = $request->elevator;
        }
        if (isset($request->with_rocks)) {
            $with_rocks = $request->with_rocks;
        }
        if (isset($request->staircase)) {
            $staircase = $request->staircase;
        }
        if (isset($request->alternative_energy)) {
            $alternative_energy = $request->alternative_energy;
        }
        if (isset($request->Water_well)) {
            $Water_well = $request->Water_well;
        }
        if (isset($request->hangar)) {
            $hangar = $request->hangar;
        }
        if (isset($request->lanes)) {
            $lanes = $request->lanes;
        }
        if (isset($request->workshop)) {
            $workshop = $request->workshop;
        }

        $options = [
            "chimney" => $chimney,
            "swimming_pool" => $swimming_pool,
            "elevator" => $elevator,
            "with_rocks" => $with_rocks,
            "staircase" => $staircase,
            "alternative_energy" => $alternative_energy,
            "Water_well" => $Water_well,
            "hangar" => $hangar,
            "lanes" => $lanes,
            "workshop" => $workshop
        ];

        $real_estate = RealState::create(
            [
                "lat" => $request->address_latitude != null ? $request->address_latitude : 0,
                "long" => $request->address_longitude != null ? $request->address_longitude : 0,
                "user_id" => $request->user_id != null ? $request->user_id : 0,
                "state_id" => $request->state_id != null ? $request->state_id : 0,
                "category_id" => $request->category_id != null ? $request->category_id : 0,
                "period_id" => $request->period != null ? $request->period : 0,
                "real_estate_type" => $request->real_estate_type != null ? $request->real_estate_type : 0,
                "rent_amount" => $request->rent_amount != null ? $request->rent_amount : 0,
                "amount" => $request->amount != null ? $request->amount : 0,
                "area" => $request->area != null ? $request->area : 0,
                "total_area" => $request->total_area != null ? $request->total_area : 0,
                "sleep_room_count" => $request->sleep_room_count != null ? $request->sleep_room_count : 0,
                "bath_room_count" => $request->bath_room_count != null ? $request->bath_room_count : 0,
                "floor_height" => $request->floor_height != null ? $request->floor_height : 0,
                "direction" => $request->direction != null ? implode(',', $request->direction) : null,
                "moqaula_perc" => $request->moqaula_perc != null ? $request->moqaula_perc : 0,
                "chalet_layout_number" => $request->chalet_layout_number != null ? $request->chalet_layout_number : 0,
                "description" => $request->description != null ? $request->description : null,
                "vedio_links" => $request->vedio_links != null ? $request->vedio_links : null,
                "options" => json_encode($options),
                "address_title" => $request->address_address
            ]
        );

        ///// room rows
        if($request->has('type')){
            $rooms = [];
            for ($i=0; $i < count($request->type); $i++) { 
                $rooms[] = new Room(['type'=>$request->type[$i],'length'=>$request->length[$i],'width'=>$request->width[$i]]);
            }
            $real_estate->rooms()->saveMany($rooms);
        }

        $paths = [];
        if ($request->hasAny('real_estate_images')) {
            foreach ($request->real_estate_images as $key => $image) {
                $temp = $image->store('public/real_estates/images');
                $temp = str_replace('public', 'storage',$temp);
                $paths[] = new RealEstateImage(['image' => $temp]);
            }
            $real_estate->images()->saveMany($paths);
        }

        return back()->with('success','تم إضافة العقار بنجاح');
    }
}
