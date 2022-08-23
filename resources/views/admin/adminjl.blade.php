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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

  <!-- for plugin notification -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



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



              <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Data Assessment
                </button></center>

              <table id="myTable" class="table table-striped table-bordered " style="width:100%">
                <thead>
                  <tr>
                    <th>SIT & REACH</th>
                    <th>SHOULDER REACH</th>
                    <th>PLANK</th>
                    <th>PUSH-UP </th>
                    <th>SEATED PULL-UP </th>
                    <th>SQUAT </th>
                    <th>CURLUP </th>
                    <th>Keterangan</th>
                    <th>Tanggal </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $data)
                  <tr>
                    <td>{{$data->sdanr}}</td>
                    <td>{{$data->sr}}</td>
                    <td>{{$data->plank}}</td>
                    <td>{{$data->pushup}}</td>
                    <td>{{$data->spu}}</td>
                    <td>{{$data->squat}}</td>
                    <td>{{$data->curlup}}</td>
                    <td>{{$data->keterangan}}</td>
                    <td>{{$data->created_at}}</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>SIT & REACH</th>
                    <th>SHOULDER REACH</th>
                    <th>PLANK</th>
                    <th>PUSH-UP </th>
                    <th>SEATED PULL-UP </th>
                    <th>SQUAT </th>
                    <th>CURLUP </th>
                    <th>Keterangan</th>
                    <th>Tanggal </th>
                  </tr>
                </tfoot>

              </table>



              <div class="modal fade " id="myModal" role="dialog">
                <div class="modal-dialog">
                  <div class="card">
                    <div class="card-body">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">FLEXIBILITY</h4>

                        </div>
                        <div class="modal-body">

                          <form role="form" method="get" action="{{url('/nambah_assessment')}}">

                            <div class="form-group">
                              <label for="formGroupExampleInput2">SIT & REACH</label>
                              <input type="text" class="form-control" id="sdanr" name="sdanr" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput2">SHOULDER REACH</label>
                              <input type="text" class="form-control" id="sr" name="sr" placeholder="" required>
                            </div>



                            <div class="modal-header">
                              <h4 class="modal-title">STRENGTH AND STABILITY</h4>

                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label for="formGroupExampleInput2">PLANK (1 minutes)</label>
                                <input type="text" class="form-control" id="plank" name="plank" placeholder="" required>
                              </div>
                              <div class="form-group">
                                <label for="formGroupExampleInput2">PUSH-UP (1 minutes)</label>
                                <input type="text" class="form-control" id="pushup" name="pushup" placeholder="" required>
                              </div>
                              <div class="form-group">
                                <label for="formGroupExampleInput2">SEATED PULL-UP (1 minutes)</label>
                                <input type="text" class="form-control" id="spu" name="spu" placeholder="" required>
                              </div>
                              <div class="form-group">
                                <label for="formGroupExampleInput2">SQUAT (1 minutes)</label>
                                <input type="text" class="form-control" id="squat" name="squat" placeholder="" required>
                              </div>
                              <div class="form-group">
                                <label for="formGroupExampleInput2">CURLUP (1 minutes)</label>
                                <input type="text" class="form-control" id="curlup" name="curlup" placeholder="" required>
                              </div>
                              <div class="form-group">
                                <label for="formGroupExampleInput2">Resume</label>
                                <textarea class="form-control" id="eval" name="eval" rows="3"></textarea>

                              </div>
                            </div>
                            <div class="modal-footer">
                              <input class="btn btn-success" type="submit" value="Save">

                          </form>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                        </div>
                      </div>


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