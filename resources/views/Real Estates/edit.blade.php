@extends('base')
@section('content')
<div class="container">
    <div class="card" style="width:635px;padding:3rem;background-color:#DCDCDC">

        <div class="card-header" style="text-align:left;height:75px">
        </div>

        <div class="card-body">
            <form method="post" action="/edit_real_estate" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$re->id}}">


                <div class="fom-group" style="text-align:left;margin-left:12px">
                    <label  style="color:blue;font-size:2.3rem">Do you want to change this real estate from not active state to active state </label>
                      <label for="html">Active</label>
  
                    <input type="radio" name="active" value="1">
                    <br>
                    <label for="html">  no </label>

                    <input type="radio" name="active" value="0">

                  
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


