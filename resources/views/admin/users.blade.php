<!DOCTYPE html>
<html lang="en">
	<head>
@include('admin.admincss')
	</head>

<body>
	@include('admin.navbar')
	@include('admin.adminnavtop')
	<div class="row ">
		<div class="col-4 grid-margin">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Status Akun</h4>
			  <div class="table-responsive">
				<table class="table">
				  <thead>
					<tr>
					  <th> Nama </th>
					  <th> Email </th>
					  <th> Action </th>
					</tr>
				  </thead>
				  <tbody>
					@foreach($data as $data)
					<tr>
					  <td> {{$data->name}} </td>
					  <td> {{$data->email}} </td>

					  @if($data->usertype=="0")
						<td>
							<div class="badge badge-outline-success"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></div>
						</td>
						@else
						<td>
							<div class="badge badge-outline-danger">Admin</div>
						</td>
						@endif
					</tr>
					@endforeach
				  </tbody>
				</table>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	@include('admin.adminscript')
</body>
</html>