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
                <table class="table table-stripped text-light" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Trainee</th>
                            <th scope="col">Tanggal Akhir Trainee</th>
                            <th scope="col">Sisa Pertemuan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_trainee as $trainee)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $trainee->member->name }}</td>
                                <td>{{ Carbon::parse($trainee->expired_at)->translatedFormat('j F Y') }}</td>
                                <td>
                                    {{ 16 - $trainee->jadwal->where('accepted_at', '!=', null)->count() }}
                                </td>
                                <td>
                                    <a href="/trainer/member/trainee/list-program" class="btn d-block btn-warning">List Program</a>
                                    <a href="/trainer/member/trainee/histori-bm" class="btn btn-primary d-block">Histori Body Measurement</a>
                                    <a href="/trainer/member/trainee/histori-bmi" class="btn btn-success d-block">Histori Body Mass Index</a>
                                    <a href="/trainer/member/trainee/catatan-program" class="btn btn-info d-block">Catatan Program</a>
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

@endsection
@section('script')

@endsection