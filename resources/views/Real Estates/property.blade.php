@extends('base')
@section('content')
<div class="col-xs-12">
    <div class="box-content">
        <h4 class="box-title" style="color:black;font-size:2rem;">العقارات</h4>

        <!-- /.box-title -->
        <div class="dropdown js__drop_down">
            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            <ul class="sub-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else there</a></li>
                <li class="split"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
            <!-- /.sub-menu -->
        </div>
        <!-- /.dropdown js__dropdown -->
        <table id="example-row-grouping" class="table table-striped table-bordered display" style="width:100%">
            <thead>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <p style="text-align:right"> {{session()->get('message')}}</p>
                </div>
                @endif
                <tr>
                    <th>RE_ID</th>
                    <th>user name</th>
                    <th></th>
                    <th>property</th>
                    <th>is_active</th>

                </tr>
            </thead>
            <tfoot>
                <th>RE_ID</th>
                <th>user name</th>
                <th></th>
                <th>property</th>
                <th>is_active</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($real_estates as $re)

                <tr>
                    <td>{{$re->id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $re->user_id)
                    <td>{{$user->name}}</td>
                    @endif
                    @endforeach
                    <td></td>
                    @foreach($properties as $property)
                    @if($property->id == $re->property_id)
                    <td>{{$property->property}}</td>
                    @endif
                    @endforeach
                    @if($re->active == 0)
                    <td>no</td>
                    @endif
                    @if($re->active == 1)
                    <td>yes</td>
                    @endif

                </tr>

                @endforeach
            </tbody>
        </table>
        <br>
        <table id="example-row-grouping" class="table table-striped table-bordered display" style="width:100%">
            <thead>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <p style="text-align:right"> {{session()->get('message')}}</p>
                </div>
                @endif
                <tr>
                    <th>RE_ID</th>
                    <th>user name</th>
                    <th></th>
                    <th>property</th>
                    <th>is_active</th>

                </tr>
            </thead>
            <tfoot>
                <th>RE_ID</th>
                <th>user name</th>
                <th></th>
                <th>property</th>
                <th>is_active</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($real_estates_tabo as $re)

                <tr>
                    <td>{{$re->id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $re->user_id)
                    <td>{{$user->name}}</td>
                    @endif
                    @endforeach
                    <td></td>
                    @foreach($properties as $property)
                    @if($property->id == $re->property_id)
                    <td>{{$property->property}}</td>
                    @endif
                    @endforeach
                    @if($re->active == 0)
                    <td>no</td>
                    @endif
                    @if($re->active == 1)
                    <td>yes</td>
                    @endif

                </tr>

                @endforeach
            </tbody>
        </table>
        <br>
        <table id="example-row-grouping" class="table table-striped table-bordered display" style="width:100%">
            <thead>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <p style="text-align:right"> {{session()->get('message')}}</p>
                </div>
                @endif
                <tr>
                    <th>RE_ID</th>
                    <th>user name</th>
                    <th></th>
                    <th>property</th>
                    <th>is_active</th>

                </tr>
            </thead>
            <tfoot>
                <th>RE_ID</th>
                <th>user name</th>
                <th></th>
                <th>property</th>
                <th>is_active</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($real_estates_asham as $re)

                <tr>
                    <td>{{$re->id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $re->user_id)
                    <td>{{$user->name}}</td>
                    @endif
                    @endforeach
                    <td></td>
                    @foreach($properties as $property)
                    @if($property->id == $re->property_id)
                    <td>{{$property->property}}</td>
                    @endif
                    @endforeach
                    @if($re->active == 0)
                    <td>no</td>
                    @endif
                    @if($re->active == 1)
                    <td>yes</td>
                    @endif

                </tr>

                @endforeach
            </tbody>
        </table>
        <br>
       


    </div>
    <!-- /.box-content -->
</div>


<script src="{{asset('../assets/scripts/jquery.min.js')}}"></script>



<!-- Data Tables -->
<script src="{{asset('../assets/plugin/datatables/media/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('../assets/plugin/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{asset('../assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>

<script src="{{asset('../assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js')}}"></script>

<script src="{{asset('../assets/scripts/datatables.demo.min.js')}}"></script>





@endsection