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
                <h4 class="card-title">{{ $title }}</h4>
                <h4>Nama Trainer : {{ $trainee->trainer->user->name }}</h4>
                <button type="button" class="btn btn-primary @disabled($jadwal_acc >= 16)" data-toggle="modal" data-target="#jadwalModal" @disabled($jadwal_acc >= 16)>
                    Ajukan Jadwal
                </button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#jadwalTrainerModal">
                    Lihat Jadwal Trainer
                </button>

                <div class="table-responsive">
                    <center><a href="{{url('/event')}}"><button class="btn btn-success btn-lg">Full Calender</a></button></center>
                    <table id="myTable" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Mulai</th>
                                <th scope="col">Selesai</th>
                                <th scope="col">Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_jadwal as $jadwal)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $jadwal->tanggal }}</td>
                                    <td>{{ $jadwal->waktu->waktu_mulai }}</td>
                                    <td>{{ $jadwal->waktu->waktu_selesai }}</td>
                                    <td>
                                        @if ($jadwal->accepted_at)
                                            Jadwal diterima
                                        @elseif($jadwal->rejected_at)
                                            Jadwal ditolak
                                        @else
                                            Belum dikonfirmasi
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>


                    </table>
                    <!-- Modal -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')

<!-- Modal -->
<div class="modal fade" id="jadwalModal" tabindex="-1" aria-labelledby="jadwalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jadwalModalLabel">Buat Pengajuan Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/member/trainee/jadwal" method="post">
                @csrf
                <input type="hidden" name="trainee_id" value="{{ $trainee->id }}">
                <input type="hidden" name="member_id" value="{{ $trainee->member_id }}">
                <input type="hidden" name="trainer_id" value="{{ $trainee->trainer_id }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control text-dark @error('tanggal') is-invalid @enderror" min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime($trainee->expired_at)) }}" name="tanggal" id="tanggal" required>
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="waktu_id">Waktu</label>
                        <select name="waktu_id" id="waktu_id" class="form-control bg-light @error('waktu_id') is-invalid @enderror" required>
                            <option value="" selected disabled>Pilih Waktu</option>
                            @foreach ($data_waktu as $waktu)
                                <option value="{{ $waktu->id }}">{{ $waktu->waktu_mulai }} - {{ $waktu->waktu_selesai }}</option>
                            @endforeach
                        </select>
                        @error('waktu_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="jadwalTrainerModal" tabindex="-1" aria-labelledby="jadwalTrainerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jadwalTrainerModalLabel">Pengajuan Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-2">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data_jadwal_trainer->count() > 0)
                                @foreach ($data_jadwal_trainer as $jadwal_trainer)
                                    <tr>
                                        <td>{{ $jadwal_trainer->tanggal }}</td>
                                        <td>{{ $jadwal_trainer->waktu->waktu_mulai.' s/d '.$jadwal_trainer->waktu->waktu_selesai }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="2">Tidak Ada Jadwal</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

@endsection