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
              <h4 class="card-title">Body Measurement</h4>
              <div class="table-responsive">

                <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Tambah Data Body Measurement
                  </button></center>
                <br>
                <table id="myTable" class="table table-striped table-bordered " style="width:100%">
                  <thead>
                    <tr>
                      <th>BODYWEIGHT</th>
                      <th>BODY FAT</th>
                      <th>VISCERAL FAT</th>
                      <th>CAL/DAY</th>
                      <th>BMI</th>
                      <th>METABOLIC AGE</th>
                      <th>SUB FAT</th>
                      <th>TRUNK</th>
                      <th>ARM</th>
                      <th>LEG</th>
                      <th>CHEES</th>
                      <th>WAIST</th>
                      <th>HIP</th>
                      <th>THIGHT</th>
                      <th>CALF</th>
                      <th>ARM</th>
                      <th>FORE ARM</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $data)
                    <tr>

                      <td>{{$data->bd}}</td>
                      <td>{{$data->b}}</td>
                      <td>{{$data->vf}}</td>
                      <td>{{$data->cd}}</td>
                      <td>{{$data->bmi}}</td>
                      <td>{{$data->ma}}</td>
                      <td>{{$data->sf}}</td>
                      <td>{{$data->t}}</td>
                      <td>{{$data->a}}</td>
                      <td>{{$data->l}}</td>
                      <td>{{$data->a}}</td>
                      <td>{{$data->w}}</td>
                      <td>{{$data->h}}</td>
                      <td>{{$data->t}}</td>
                      <td>{{$data->calf}}</td>
                      <td>{{$data->arm}}</td>
                      <td>{{$data->fa}}</td>
                      <td>{{$data->created_at}}</td>

                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>BODYWEIGHT</th>
                      <th>BODY FAT</th>
                      <th>VISCERAL FAT</th>
                      <th>CAL/DAY</th>
                      <th>BMI</th>
                      <th>METABOLIC AGE</th>
                      <th>SUB FAT</th>
                      <th>TRUNK</th>
                      <th>ARM</th>
                      <th>LEG</th>
                      <th>CHEES</th>
                      <th>WAIST</th>
                      <th>HIP</th>
                      <th>THIGHT</th>
                      <th>CALF</th>
                      <th>ARM</th>
                      <th>FORE ARM</th>
                      <th>Tanggal</th>
                    </tr>
                  </tfoot>

                </table>
                <!-- Modal -->

                <div class="modal fade " id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="card">
                      <div class="card-body">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Tambah Data Body Measurement</h4>

                          </div>
                          <div class="modal-body">

                            <form action="{{url('/uploadukur')}}" method="post" enctype="multipart/form-data">

                              @csrf
                              <div class="modal-header">
                                <h4 class="modal-title">KARADA SCAN</h4>

                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">BODY FAT</label>
                                  <input type="text" class="form-control" id="bd" name="bd" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">BODYWEIGHT</label>
                                  <input type="text" class="form-control" id="b" name="b" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">VISCERAL FAT</label>
                                  <input type="text" class="form-control" id="vf" name="vf" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">CAL/DAY</label>
                                  <input type="text" class="form-control" id="cd" name="cd" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">BMI</label>
                                  <input type="text" class="form-control" id="bmi" name="bmi" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">METABOLIC AGE</label>
                                  <input type="text" class="form-control" id="ma" name="ma" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">SUB FAT</label>
                                  <input type="text" class="form-control" id="sf" name="sf" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">TRUNK</label>
                                  <input type="text" class="form-control" id="t" name="t" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">ARM</label>
                                  <input type="text" class="form-control" id="a" name="a" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">LEG</label>
                                  <input type="text" class="form-control" id="l" name="l" placeholder="" required>
                                </div>

                              </div>

                              <div class="modal-header">
                                <h4 class="modal-title">ANTHOPOMETRIK</h4>

                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">CHESS</label>
                                  <input type="text" class="form-control" id="c" name="c" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">WAIST</label>
                                  <input type="text" class="form-control" id="w" name="w" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">HIP</label>
                                  <input type="text" class="form-control" id="h" name="h" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">THIGHT</label>
                                  <input type="text" class="form-control" id="th" name="th" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">CALF</label>
                                  <input type="text" class="form-control" id="calf" name="calf" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">ARM</label>
                                  <input type="text" class="form-control" id="arm" name="arm" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">FORE ARM</label>
                                  <input type="text" class="form-control" id="fa" name="fa" placeholder="" required>
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