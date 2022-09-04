@extends('layouts.main')
@section('content')
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>{{ $title }}</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#programLatihanModal">Tambah Program Latihan</button>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Program</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_program_latihan as $program_latihan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $program_latihan->nama }}</td>
                            <td>
                                <a href="/trainer/program-latihan/{{ $program_latihan->id }}" class="btn btn-info d-inline">Detail</a>
                                <button type="button" class="btn btn-success d-inline"  data-toggle="modal" data-target="#programLatihanModal{{ $program_latihan->id }}">Edit</button>
                                <form action="/trainer/program-latihan/{{ $program_latihan->id }}" method="post" class=" d-inline">
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
<div class="modal fade" id="programLatihanModal" tabindex="-1" aria-labelledby="programLatihanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="programLatihanModalLabel">Tambah Program Latihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/trainer/program-latihan" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="trainer_id" value="{{ $trainer->id }}">
                    <div class="form-group">
                        <label for="nama">Nama Program Latihan</label>
                        <input type="text" class="form-control bg-light text-dark" name="nama" id="nama">
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
@foreach ($data_program_latihan as $program_latihan)
    <!-- Modal -->
    <div class="modal fade" id="programLatihanModal{{ $program_latihan->id }}" tabindex="-1" aria-labelledby="programLatihanModalLabel{{ $program_latihan->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="programLatihanModalLabel{{ $program_latihan->id }}">Edit Program Latihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/trainer/program-latihan/{{ $program_latihan->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="trainer_id" value="{{ $trainer->id }}">
                        <div class="form-group">
                            <label for="nama">Nama Program Latihan</label>
                            <input type="text" class="form-control bg-light text-dark" name="nama" id="nama" value="{{ $program_latihan->nama }}">
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