<!DOCTYPE html>
<html lang="en">

<head>
  {{-- @include('admin.admincss') --}}

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Absen Member</title>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />




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
              <h4 class="card-title">Absen</h4>
              <center><a href="{{url('/dataabsen')}}"><button class="btn btn-success btn-lg">Data Absensi</a></button></center>
              <div class="table-responsive">

                <table id="myTable" class="table table-striped table-bordered " style="width:100%">
                  <thead>
                    <tr>
                      <th>Nama Member</th>
                      <th>Email </th>
                      <th>Tanggal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data3 as $data)
                    <tr>

                      <td>{{$data->name}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$date}}</td>
                      <td>
                        <div class="badge badge-outline-success"><a href="{{url('/hadir',$data->id)}}">hadir</a></div>
                        <div class="badge badge-outline-warning"><a href="{{url('/izin',$data->id)}}">izin</a></div>
                        <div class="badge badge-outline-danger"><a href="{{url('/alfa',$data->id)}}">alfa</a></div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nama Member</th>
                      <th>Tanggal </th>
                      <th>Email </th>
                      <th>Action</th>
                    </tr>
                  </tfoot>

                </table>


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
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>



</body>

</html>



{{--

<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

@csrf


<div>
  <label>Title</label>
  <input style="color:blue;" type="text" name="title" placeholder="Write a title" class="form-control" required>
</div>
<div>
  <label>Price</label>
  <input style="color:blue;" type="num" name="price" placeholder="price" class="form-control" required>
</div>

<div>
  <label>Image</label>
  <input type="file" name="image" class="form-control" required>
</div>
<div>
  <select name="locations_id" class="form-control" required style="color:white;">
    <option value="">-Pilih Rumah makan-</option>
    @foreach ($data2 as $item)
    <option value="{{$item->id}}">{{$item->title}}</option>
    @endforeach

  </select>
</div>
<div>
  <label>Description</label>
  <input style="color:blue;" type="text" name="description" placeholder="Description" class="form-control" required>
</div>

<div>

  <input style="color: black" type="submit" value="Save">
</div>


</form> --}}