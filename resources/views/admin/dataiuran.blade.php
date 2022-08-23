<!DOCTYPE html>
<html lang="en">
	<head>
{{-- @include('admin.admincss') --}}
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin</title>
<!-- plugins:css -->
<link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
<link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->



<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="admin/assets/css/style.css">
<!-- End layout styles -->
<link rel="shortcut icon" href="admin/assets/images/favicon.png" />

@livewireStyles

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script> --}}


{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
 



{{-- @include('admin.admincss') --}}





	</head>

<body>
    

    @include('admin.navbar')
{{-- 
    @include('admin.adminnavtop') --}}
    {{-- @include('admin.adminnavtop') --}}
        <div class="main-panel">
            <div class="content-wrapper">
                
        <div class="row ">
            <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Data Iuran</h4>
                <div class="table-responsive">
                  <center><a href="{{url('/dataiuran')}}"><button class="btn btn-success btn-lg">Data Iuran</a></button></center>
                    <table id="myTable" class="table table-striped table-bordered " style="width:100%">
                      <thead>
                          <tr>
                              <th>Name Atlit</th>
                              <th>Tanggal</th>
                              <th>Keterangan</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr>
                              
              <td>{{$data->nama}}</td>
              <td>{{$data->tanggal}}</td>
              <td>{{$data->keterangan}}</td>
                        </tr>
                        @endforeach 
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Name Latihan</th>
                        <th>Tanggal </th>
                        <th>Keteranga</th>
                    </tr>
                </tfoot>

        </table>
  <!-- Modal -->
      
	</div> 
			  </div>
			</div>
		  </div>
		</div>
   </div>


  @include('admin.adminscript')
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
 {{-- @include('admin.adminscript') --}}
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
 <script >
   $(document).ready(function() {
     $('#myTable').DataTable();
 } );

</script>



</body>
</html>
