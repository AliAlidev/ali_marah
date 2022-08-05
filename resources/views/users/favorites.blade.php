@extends('base')
@section('content')
<div class="col-xs-12">
    <div class="box-content">
        <h4 class="box-title">Favorites</h4>

        <!-- /.dropdown js__dropdown -->
        <table id="example-row-grouping" class="table table-striped table-bordered display" style="width:100%">
            <thead>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <p style="text-align:right"> {{session()->get('message')}}</p>
                </div>
                @endif
                <tr>
                    <th style="text-align:center">User ID</th>
                    <th style="text-align:center">User Name</th>
                    <th></th>
                    <th style="text-align:center">Real Estate ID</th>

                </tr>
            </thead>
            <tbody>
                @foreach($favorites as $favorite)
                <tr>
                    <td style="text-align:center">{{$favorite->user_id}}</td>
                    @foreach($users as $user)
                    @if($user->id == $favorite->user_id)
                    <td style="text-align:center">{{$user->name}}</td>
                    @endif
                    @endforeach
                    <td></td>
                    <td style="text-align:center">{{$favorite->re_id}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.box-content -->
</div>


<script src="assets/scripts/jquery.min.js"></script>


<!-- Data Tables -->
<script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
<script src="assets/scripts/datatables.demo.min.js"></script>




@endsection