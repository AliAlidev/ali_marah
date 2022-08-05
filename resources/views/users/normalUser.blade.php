@extends('base')
@section('content')
<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Row grouping</h4>
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
								<th>Name</th>
								<th>Image</th>
								<th>Phone</th>
								<th>City</th>
								<th>Region</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
							<th>Name</th>
								<th>Image</th>
								<th>Phone</th>
								<th>City</th>
								<th>Region</th>
								<th>Actions</th>
							</tr>
						</tfoot>
						<tbody>
                            @foreach($normal_users as $normal_user)
                            
							<tr>
								<td>{{$normal_user->name}}</td>
								<td>
									<img id="demo" style="width:100px" src="/storage/users/{{$normal_user->image}}" ondbclick="myFunction()">
</td>
								<td>{{$normal_user->phone}}</td>
								<td>{{$normal_user->city}}</td>
								<td>{{$normal_user->region}}</td>
								<td>
							
                            
								<form action="/deleteuser/{{$normal_user->id}}"  method="post">
								@csrf
                           {{ method_field('DELETE')}}
                           <button type="button"  style="color:red;background-color:#DEB887;border-radius: 10px;display:flex;margin:auto;padding:.7rem;
                             border: 4px double #cccccc;" onclick="confirm('{{ __("Do you want to delete this user ?  ") }}') ? this.parentElement.submit() : '' ">
							 <i class="glyphicon glyphicon-trash"></i>
							</button>
                         
						   </form>
						   </td>							</tr>
							
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
		