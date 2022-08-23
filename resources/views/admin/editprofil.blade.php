<!DOCTYPE html>
<html lang="en">

<head>

	<base href="/public">

	@include("admin.admincss")

</head>

<body>



		@include("admin.navbar")


		<div class="main-panel">
            <div class="content-wrapper">
				<div class="row">
					<div class="col-sm-12 grid-margin">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Form Edit Profil</h4>
                                <form action="{{url('/dataiuran')}}" method="post" enctype="multipart/form-data">

									@csrf
									<div class="form-group">
										<label for="nama">Nama Lengkap</label>
										<input class="form-control" name="name" value="{{$data->name}}" required>
									</div>
                                    <div class="form-group">
										<label for="nama">Username</label>
										<input class="form-control" name="username" value="{{$data->username}}" required>
									</div>
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input class="form-control" name="alamat" value="{{$data->alamat}}" required>
									</div>
									<div class="form-group">
										<label for="nohp">No. HP </label>
										<input class="form-control" name="nomer_hp" value="{{$data->nomer_hp}}" required>
									</div>

									<div class="form-group">
										<label>Jenis Kelamin</label>
										<div class="col-sm-7">
											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" class="form-control p_input" name="jk" id="P" value="Perempuan" {{ ($data->jk_user=="Perempuan")? 'checked' : "" }}> Perempuan </label>
											</div>
										</div>
										<div class="col-sm-10">
											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" class="form-control p_input" name="jk" id="L" value="Laki-Laki" {{ ($data->jk_user=="Laki-Laki")? 'checked' : "" }}> Laki-laki </label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="tglahir">Tanggal Lahir</label>
										<input type="date" class="form-control" name="tgl_lahir" value="{{$data->tgl_lahir	}}" required>
									</div>


									<div class="form-group">
										<label for="gambar">Gambar Sebelumnya</label><br>
										<img height="250" width="250" src="/pp/{{$data->profile_photo_path}}">
									</div>
									<div class="form-group">
										<label for="gambar">Gambar Baru</label>
										<input type="file" class="form-control" name="gambar">
										@error('gambar_artikel')
										<span class="text-danger">{{$message}}</span>
										@enderror

									</div>
									<button type="submit" class="btn btn-primary mr-2" value="Save">Edit Profile</button>
									<a href="{{url('/redirects')}}" class="btn btn-dark">Batal</a>
								</form>
							</div>
						</div>
					</div>






				</div>
			</div>
			<!-- content-wrapper ends -->
	
		</div>
	</div>

	@include("admin.adminscript")

</body>

</html>