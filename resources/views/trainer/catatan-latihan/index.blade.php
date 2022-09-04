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
                <h2>Catatan Latihan</h2>
                <ul>
                    <li><h4>Program Latihan : {{ $catatan_latihan->programLatihan->nama }}</h4></li>
                    <li>
                        <div class="row">
                            <div class="gird-margin col-4">
                                <h3>Detail Program</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($data_detail_program_latihan->count() > 0)
                                            @foreach ($data_detail_program_latihan as $detail_program_latihan)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $detail_program_latihan->nama }}</td>
                                                    <td>{{ $detail_program_latihan->jumlah }} kali</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3">Detail data tidak tersedia</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li><h4>Tinggi Badan : {{ $catatan_latihan->tinggi_badan }} cm</h4></li>
                    <li><h4>Berat Badan : {{ $catatan_latihan->berat_badan }} cm</h4></li>
                    <li><h4>Ukuran Dada : {{ $catatan_latihan->dada }} inci</h4></li>
                    <li><h4>Ukuran Pinggang : {{ $catatan_latihan->pinggang }} inci</h4></li>
                    <li><h4>Ukuran Pinggul Atas : {{ $catatan_latihan->pinggul_atas }} inci</h4></li>
                    <li><h4>Ukuran Pinggul Bawah : {{ $catatan_latihan->pinggul_bawah }} inci</h4></li>
                    <li><h4>Catatan : {{ $catatan_latihan->catatan }}</h4></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
@endsection
@section('script')
@endsection