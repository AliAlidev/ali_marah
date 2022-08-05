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
                    <th  style="text-align:center">RE_ID</th>
                    <th  style="text-align:center">user name</th>
                    <th  style="text-align:center"></th>
                    <th  style="text-align:center">is_active</th>
                    <th  style="text-align:center">edit</th>

                </tr>
            </thead>
            <tfoot>
                <th  style="text-align:center">RE_ID</th>
                <th  style="text-align:center">user name</th>
                <th  style="text-align:center"></th>
                <th  style="text-align:center">is_active</th>
                <th  style="text-align:center">edit</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($real_estates_one as $re)

                <tr>
                    <td style="text-align:center">{{$re->id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $re->user_id)
                    <td style="text-align:center">{{$user->name}}</td>
                    @endif
                    @endforeach
                   <td style="text-align:center"></td>
                    @if($re->active == 0)
                    <td style="text-align:center">no</td>
                    @endif
                    @if($re->active == 1)
                    <td style="text-align:center">yes</td>
                    @endif
                    <td>
                    <button type="button"  style="color:black;background-color:azure;border-radius: 10px;display:flex;justify-content:center;margin:auto;padding:1rem;
                             border: 2px solid #cccccc;">
							 <a href="edit_real_estate/{{$re->id}}">
							 <i class="glyphicon glyphicon-edit"></i></a>
							</button>
                    </td>

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
                    <th style="text-align:center">RE_ID</th>
                    <th style="text-align:center">user name</th>
                    <th  style="text-align:center">is_active</th>
                    <th style="text-align:center">edit</th>

                </tr>
            </thead>
            <tfoot>
                <th style="text-align:center">RE_ID</th>
                <th style="text-align:center">user name</th>
                <th style="text-align:center">is_active</th>
                <th style="text-align:center">edit</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($real_estates_two as $re)

                <tr>
                    <td style="text-align:center">{{$re->id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $re->user_id)
                    <td style="text-align:center">{{$user->name}}</td>
                    @endif
                    @endforeach
                  
                    @if($re->active == 0)
                    <td style="text-align:center">no</td>
                    @endif
                    @if($re->active == 1)
                    <td  style="text-align:center">yes</td>
                    @endif
                    <td style="text-align:center">
                    <button type="button"  style="color:black;background-color:azure;border-radius: 10px;display:flex;justify-content:center;margin:auto;padding:1rem;
                             border: 2px solid #cccccc;">
							 <a href="edit_real_estate/{{$re->id}}">
							 <i class="glyphicon glyphicon-edit"></i></a>
							</button>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>
       
       

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