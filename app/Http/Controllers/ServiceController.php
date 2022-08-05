<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
{
    public function services(){
        $userAuth=Auth::user();
        $services=Service::get();
        return view('services.services',compact('services','userAuth'));
    }
    public function addShow(){
        $userAuth=Auth::user();
        return view('services.add',compact('userAuth'));
    }
    public function add(Request $request){
        $validateData = $request->validate([
            'name'=>'required',
            'phone'=>'required|digits:10|unique:services',
            'city'=>'required',
            'region'=>'required',
            'role'=>'required'
        ]);
        $input= $request->all();
        $service=Service::create($input);
        $request->session()->flash('message','قمت بإضافة الخدمة بنجاح');
         return redirect('services');
    }

    public  function editShow($id){
        $service=Service::find($id);
        $userAuth = Auth::user();
        return view('services.edit',compact('userAuth','service'));

    }


    public function edit(Request $request){
        $validateData = $request->validate([
            'name'=>'required',
            'phone'=>'required|digits:10',
            'city'=>'required',
            'region'=>'required',
            'role'=>'required'
        ]);
        $service=Service::where('id',$request->id)->first();
        $service->name=$request->name;
        $service->phone=$request->phone;
        $service->city=$request->city;
        $service->region=$request->region;
        $service->role=$request->role;
        $service->save();
        $request->session()->flash('message','you edit this service successfuly');
        return redirect('services');

    }


    public function delete($id,Request $request){
        $service=Service::find($id);
        $service->delete();
        $request->session()->flash('message','you delete this service successfuly');
        return redirect('services');
    }
}
