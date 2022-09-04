@extends('layouts.main')
@section('content')
@php
use Illuminate\Support\Carbon;
@endphp
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>{{ $title }}</h2>
                <div class="table-responsive">
                    <table class="table table-stripped table-responsive" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Member/Trainee</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Kehadiran Trainer</th>
                                <th scope="col">Kehadiran Trainee/Member</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_presensi as $presensi)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $presensi->member->name }}</td>
                                <td>{{ Carbon::parse($presensi->jadwal->tanggal)->translatedFormat('j F Y') }}</td>
                                <td>{{ $presensi->jadwal->waktu->waktu_mulai }} - {{ $presensi->jadwal->waktu->waktu_selesai }}</td>
                                <td>
                                    @if ($presensi->is_trainer_present == "0")
                                        Tidak Hadir
                                    @elseif ($presensi->is_trainer_present == 1)
                                        Hadir
                                    @else
                                        Belum dikonfirmasi (Tidak terintegrasi dengan modul Admin)
                                    @endif
                                </td>
                                <td>
                                    @if ($presensi->is_member_present == "0")
                                        Tidak Hadir
                                    @elseif ($presensi->is_member_present == 1)
                                        Hadir
                                    @else
                                        Belum dikonfirmasi (Tidak terintegrasi dengan modul Admin)
                                    @endif
                                </td>
                                <td>
                                    <a href="/trainer/member/catatan-latihan/{{ $presensi->jadwal_id }}" class="btn btn-primary">Lihat Catatan Latihan</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')

@endsection
@section('script')

@endsection