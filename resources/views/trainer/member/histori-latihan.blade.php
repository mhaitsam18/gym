@extends('layouts.main')
@section('content')
@php
use Illuminate\Support\Carbon;
@endphp
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
                <div class="table-responsive">
                    <table class="table table-stripped table-responsive" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_histori as $histori)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                
                                <td>{{ Carbon::parse($histori->jadwal->tanggal)->translatedFormat('j F Y') }}</td>
                                <td>{{ $histori->jadwal->waktu->waktu_mulai }} - {{ $histori->jadwal->waktu->waktu_selesai }}</td>
                                <td>
                                    @if ($histori->jadwal->catatanLatihan)
                                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#catatanLatihanModal{{ $histori->jadwal_id }}">Lihat Catatan</button>
                                    @else
                                        <span class="btn btn-danger">Catatan Tidak tersedia</span>
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
</div>
@endsection
@section('modal')
    @foreach ($data_histori as $histori)
        <!-- Modal -->
        <div class="modal fade" id="catatanLatihanModal{{ $histori->jadwal_id }}" tabindex="-1" aria-labelledby="catatanLatihanModalLabel{{ $histori->jadwal_id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="catatanLatihanModalLabel{{ $histori->jadwal_id }}">Edit Program Latihan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="hidden" name="jadwal_id" value="{{ $histori->jadwal_id }}">
                    <div class="modal-body">
                        @if ($histori->jadwal->catatanLatihan)
                            <ul>
                                <li><h4>Program Latihan : {{ $histori->jadwal->catatanLatihan->programLatihan->nama }}</h4></li>
                                <li>
                                    <h3>Detail Program</h3>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($histori->jadwal->catatanLatihan->programLatihan->detailProgramLatihan->count() > 0)
                                                @foreach ($histori->jadwal->catatanLatihan->programLatihan->detailProgramLatihan as $detail_program_latihan)
                                                    <tr>
                                                        <td>{{ $detail_program_latihan->nama }}</td>
                                                        <td>{{ $detail_program_latihan->jumlah }} kali</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2">Detail data tidak tersedia</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </li>
                                <li><h4>Tinggi Badan : {{ $histori->jadwal->catatanLatihan->tinggi_badan }}</h4></li>
                                <li><h4>Berat Badan : {{ $histori->jadwal->catatanLatihan->berat_badan }}</h4></li>
                                <li><h4>Body Mass Index : {{ $histori->jadwal->catatanLatihan->body_mass_index }}</h4></li>
                                <li><h4>Ukuran Dada : {{ $histori->jadwal->catatanLatihan->dada }}</h4></li>
                                <li><h4>Ukuran Pinggang : {{ $histori->jadwal->catatanLatihan->pinggang }}</h4></li>
                                <li><h4>Ukuran Pinggul Atas : {{ $histori->jadwal->catatanLatihan->pinggul_atas }}</h4></li>
                                <li><h4>Ukuran Pinggul Bawah : {{ $histori->jadwal->catatanLatihan->pinggul_bawah }}</h4></li>
                                <li><h4>Catatan : {{ $histori->jadwal->catatanLatihan->catatan }}</h4></li>
                            </ul>
                        @endif
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('script')
@endsection