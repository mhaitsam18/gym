@extends('layouts.main')
@section('content')
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>{{ $title }}</h2>
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Trainee</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Mulai</th>
                            <th scope="col">Selesai</th>
                            <th scope="col">Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_jadwal as $jadwal)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $jadwal->member->name }}</td>
                                <td>{{ $jadwal->tanggal }}</td>
                                <td>{{ $jadwal->waktu->waktu_mulai }}</td>
                                <td>{{ $jadwal->waktu->waktu_selesai }}</td>
                                <td>
                                    @if ($jadwal->is_saran == 1)
                                        @if ($jadwal->accepted_at)
                                            Saran Jadwal diterima
                                        @elseif($jadwal->rejected_at)
                                            Saran Jadwal ditolak
                                        @else
                                            Menunggu Konfirmasi
                                        @endif
                                    @elseif ($jadwal->accepted_at)
                                        Jadwal diterima
                                    @elseif($jadwal->rejected_at)
                                        Jadwal ditolak
                                    @else
                                    <a href="/trainer/jadwal/terima/{{ $jadwal->id }}" class="btn btn-success">Terima</a>
                                    <a href="/trainer/jadwal/tolak/{{ $jadwal->id }}" class="btn btn-danger">Tolak</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jadwalModal{{ $jadwal->id }}">Beri Saran</button>
                                    @endif
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
    @foreach ($data_jadwal as $jadwal)
        <div class="modal fade" id="jadwalModal{{ $jadwal->id }}" tabindex="-1" aria-labelledby="jadwalModal{{ $jadwal->id }}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="jadwalModal{{ $jadwal->id }}Label">Buat Pengajuan Jadwal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/trainer/jadwal/{{ $jadwal->id }}" method="post">
                        <input type="hidden" name="trainer_id" value="{{ $jadwal->trainer_id }}">
                        @method('put')
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control text-dark @error('tanggal') is-invalid @enderror" min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime($jadwal->trainee->expired_at)) }}" name="tanggal" id="tanggal" value="{{ $jadwal->tanggal }}" required>
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
                                        <option value="{{ $waktu->id }}" @selected($waktu->id == $jadwal->waktu_id)>{{ $waktu->waktu_mulai }} - {{ $waktu->waktu_selesai }}</option>
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
    @endforeach
@endsection
@section('script')

@endsection