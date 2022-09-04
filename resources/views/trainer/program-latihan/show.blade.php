@extends('layouts.main')
@section('content')
@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('gagal'))
    <div class="alert alert-danger col-lg-12" role="alert">
        {{ session('gagal') }}
    </div>
@endif
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>{{ $title }}</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailProgramLatihanModal">Tambah Detail Program</button>
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Detail</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_detail_program_latihan as $detail_program_latihan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $detail_program_latihan->nama }}</td>
                            <td>{{ $detail_program_latihan->jumlah }}</td>
                            <td>
                                <button type="button" class="btn btn-success d-inline"  data-toggle="modal" data-target="#detailProgramLatihanModal{{ $detail_program_latihan->id }}">Edit</button>
                                <form action="/trainer/detail-program-latihan/{{ $detail_program_latihan->id }}" method="post" class=" d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<!-- Modal -->
<div class="modal fade" id="detailProgramLatihanModal" tabindex="-1" aria-labelledby="detailProgramLatihanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailProgramLatihanModalLabel">Tambah Detail Program Latihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/trainer/detail-program-latihan" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="program_latihan_id" value="{{ $programLatihan->id }}">
                    <div class="form-group">
                        <label for="nama">Nama Detail Program Latihan</label>
                        <input type="text" class="form-control bg-light text-dark" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control bg-light text-dark" name="jumlah" id="jumlah">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@foreach ($data_detail_program_latihan as $detail_program_latihan)
    <!-- Modal -->
    <div class="modal fade" id="detailProgramLatihanModal{{ $detail_program_latihan->id }}" tabindex="-1" aria-labelledby="detailProgramLatihanModalLabel{{ $detail_program_latihan->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailProgramLatihanModalLabel{{ $detail_program_latihan->id }}">Edit Detail Program Latihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/trainer/detail-program-latihan/{{ $detail_program_latihan->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama Detail Program Latihan</label>
                            <input type="text" class="form-control bg-light text-dark" name="nama" id="nama" value="{{ $detail_program_latihan->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control bg-light text-dark" name="jumlah" id="jumlah" value="{{ $detail_program_latihan->jumlah }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

@endsection
@section('script')

@endsection