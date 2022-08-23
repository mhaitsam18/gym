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



                <div class="row">
                    <div class="col-sm-4 grid-margin">
                      <div class="card">
                        <div class="card-body">
                            
                          <h5>Juani Ft</h5>
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">Rp.100.000.-</h2>
                        </div>
                          <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">

                            <h6 class="text-muted font-weight-normal">1.......</h6>
                            <h6 class="text-muted font-weight-normal">2.......</h6>
                            <h6 class="text-muted font-weight-normal">3.......</h6>
                            <h6 class="text-muted font-weight-normal">4.......</h6>

                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                              <i class="icon-lg mdi mdi-account-convert text-primary ml-auto"></i>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Upgrade</button>
    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                      <div class="card">
                        <div class="card-body">
                            <h5>Kenzi</h5>
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                              <h2 class="mb-0">Rp.200.000.-</h2>
                          </div>
                            <div class="row">
                              <div class="col-8 col-sm-12 col-xl-8 my-auto">
  
                              <h6 class="text-muted font-weight-normal">1.......</h6>
                              <h6 class="text-muted font-weight-normal">2.......</h6>
                              <h6 class="text-muted font-weight-normal">3.......</h6>
                              <h6 class="text-muted font-weight-normal">4.......</h6>
  
                              </div>
                              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-account-convert text-primary ml-auto"></i>
                              </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat">Upgrade</button>
    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                      <div class="card">
                        <div class="card-body">
                            <h5>Sumarto</h5>
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                              <h2 class="mb-0">Rp.300.000.-</h2>
                          </div>
                            <div class="row">
                              <div class="col-8 col-sm-12 col-xl-8 my-auto">
  
                              <h6 class="text-muted font-weight-normal">1.......</h6>
                              <h6 class="text-muted font-weight-normal">2.......</h6>
                              <h6 class="text-muted font-weight-normal">3.......</h6>
                              <h6 class="text-muted font-weight-normal">4.......</h6>
  
                              </div>
                              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-account-convert text-primary ml-auto"></i>
                              </div>
                        
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat">Upgrade</button>
    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
    
		  </div>
		</div>
   </div>


   <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Trainer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('/uploadtrainer1',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf 
            <div class="form-group">
                <h5>Cara Upgrade Member</h5>
                <p>Silahkan transer Sesuai Nominal ke no Rek 123123123123 Mandiri a.n pt.Gym <br>
                    dan kirim bukti transernya
                </p>              
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Bukti Transfer</label>
              <input type="file" class="form-control-file" name="foto" id="exampleModal" required>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input  class="btn btn-success" type="submit"  value="OK">  
        </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Trainer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('/uploadtrainer2',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf 
            <div class="form-group">
                <h5>Cara Upgrade Member</h5>
                <p>Silahkan transer Sesuai Nominal ke no Rek 123123123123 Mandiri a.n pt.Gym <br>
                    dan kirim bukti transernya
                </p>              
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Bukti Transfer</label>
              <input type="file" class="form-control-file" name="foto" id="exampleModal" required>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input  class="btn btn-success" type="submit"  value="OK">  
        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Trainer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('/uploadtrainer2',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf 
            <div class="form-group">
                <h5>Cara Upgrade Member</h5>
                <p>Silahkan transer Sesuai Nominal ke no Rek 123123123123 Mandiri a.n pt.Gym <br>
                    dan kirim bukti transernya
                </p>              
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Bukti Transfer</label>
              <input type="file" class="form-control-file" name="foto" id="exampleModal" required>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input  class="btn btn-success" type="submit"  value="OK">  
        </form>
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
