@extends('base')
@section('content')
<div class="container">
    <div class="card" style="width:635px;padding:3rem;background-color:#DCDCDC">

        <div class="card-header" style="text-align:left;height:75px">
            <h1 style="font-size:30px;color:blue"> Edit service  </h1>
        </div>

        <div class="card-body">
            <form method="post" action="/editService" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$service->id}}">


                <div class="fom-group" style="text-align:left;margin-left:12px">
                    <label>: Name </label>
                    <input type="text" name="name" class="form-control"  value="{{$service->name}}" required style="text-align:left">
                    @error('name')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
<br>
                <div class="fom-group" style="text-align:left;margin-left:12px">
                    <label>: Phone </label>
                    <input type="text" name="phone" class="form-control" value="{{$service->phone}}" required style="text-align:left">
                    @error('phone')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
                <br>
                <div class="fom-group" style="text-align:left;margin-left:12px">
                    <label>: City </label>
                    <input type="text" name="city" value="{{$service->city}}" class="form-control" required style="text-align:left">
                    @error('city')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
                <br>
                <div class="fom-group" style="text-align:left;margin-left:12px">
                    <label>: Region </label>
                    <input type="text" name="region" value="{{$service->region}}" class="form-control" required style="text-align:left">
                    @error('region')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
                <br>
                <div class="fom-group" style="text-align:left;margin-left:12px">
                    <label>: Role </label>
                    <input type="text" name="role" value="{{$service->role}}" class="form-control" required    style="text-align:left">
                    @error('role')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
               
        
                    <br><br><br>
                    <div style="text-align:left;margin-left:12px">
                        <button type="submit" class="btn btn-success" style="background-color:RebeccaPurple">send</button>
                    </div>

            </form>


        </div>
    </div>

</div>

</div>
@endsection


