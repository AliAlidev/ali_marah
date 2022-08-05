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
                    <th style="text-align:center">RE_ID</th>
                    <th style="text-align:center">user name</th>
                    <th style="text-align:center"></th>
                    <th style="text-align:center">category</th>
                  


                </tr>
            </thead>
            <tfoot>
                <th style="text-align:center">RE_ID</th>
                <th style="text-align:center">user name</th>
                <th style="text-align:center"></th>
                <th style="text-align:center">category</th>
               


                </tr>
            </tfoot>
            <tbody>
                @foreach($real_estates as $re)

                <tr>
                    <td style="text-align:center">{{$re->id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $re->user_id)
                    <td style="text-align:center">{{$user->name}}</td>
                    @endif
                    @endforeach
                    <td style="text-align:center"></td>
                    @if($re->category_id == 1)
                    <td style="text-align:center">بيع</td>
                    @endif
                    @if($re->category_id == 2)
                    <td style="text-align:center">إيجار</td>
                    @endif
                    @if($re->category_id == 3)
                    <td style="text-align:center">استثمار</td>
                    @endif
                    @if($re->category_id == 4)
                    <td style="text-align:center">اعمال المقاولات</td>
                    @endif
                  
                </tr>

                @endforeach
            </tbody>
        </table>
        <br><br>
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
                    <th style="text-align:center">category</th>

                </tr>
            </thead>
            <tfoot>
                <th style="text-align:center">RE_ID</th>
                <th style="text-align:center">user name</th>
                <th style="text-align:center">category</th>

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
                    <td style="text-align:center">بيع</td>

                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="pagination1">
            {{ $real_estates_one->links() }}
        </div>
        <br>
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
                    <th style="text-align:center">category</th>
                    <th style="text-align:center">period</th>

                </tr>
            </thead>
            <tfoot>
                <th style="text-align:center">RE_ID</th>
                <th style="text-align:center">user name</th>
                <th style="text-align:center">category</th>
                <th style="text-align:center">period</th>

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
                    <td style="text-align:center">إيجار</td>
                    @if($re->period_id == 1)
                    <td style="text-align:center">يومي</td>
                    @endif
                    @if($re->period_id == 2)
                    <td style="text-align:center">شهريا</td>
                    @endif

                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="pagination1">
            {{ $real_estates_two->links() }}
        </div>
        <br>
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
                    <th style="text-align:center">category</th>

                </tr>
            </thead>
            <tfoot>
                <th style="text-align:center">RE_ID</th>
                <th style="text-align:center">user name</th>
                <th style="text-align:center">category</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($real_estates_three as $re)

                <tr>
                    <td style="text-align:center">{{$re->id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $re->user_id)
                    <td style="text-align:center">{{$user->name}}</td>
                    @endif
                    @endforeach
                    <td style="text-align:center">استثمار</td>

                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="pagination1">
            {{ $real_estates_three->links() }}
        </div>
        <br>
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
                    <th style="text-align:center">category</th>

                </tr>
            </thead>
            <tfoot>
                <th style="text-align:center">RE_ID</th>
                <th style="text-align:center">user name</th>
                <th style="text-align:center">category</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($real_estates_four as $re)

                <tr>
                    <td style="text-align:center">{{$re->id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $re->user_id)
                    <td style="text-align:center">{{$user->name}}</td>
                    @endif
                    @endforeach
                    <td style="text-align:center">اعمال المقاولات</td>

                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="pagination1">
            {{ $real_estates_four->links() }}
        </div>
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