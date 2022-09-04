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
                                <th scope="col">Aksi</th>
                                <th scope="col">Nama Member/Trainee</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Kehadiran Trainer</th>
                                <th scope="col">Kehadiran Trainee/Member</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_presensi as $presensi)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    @if ($presensi->jadwal->catatanLatihan)
                                        <a href="/trainer/catatan-latihan/jadwal/{{ $presensi->jadwal_id }}" class="btn btn-info">Lihat Catatan Latihan</a>
                                    @else
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catatanLatihanModal{{ $presensi->jadwal_id }}">Buat Catatan Pelatihan</button>
                                    @endif
                                </td>
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
    @foreach ($data_presensi as $presensi)
        <!-- Modal -->
        <div class="modal fade" id="catatanLatihanModal{{ $presensi->jadwal_id }}" tabindex="-1" aria-labelledby="catatanLatihanModalLabel{{ $presensi->jadwal_id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="catatanLatihanModalLabel{{ $presensi->jadwal_id }}">Edit Program Latihan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/trainer/catatan-latihan/" method="post">
                        @csrf
                        <input type="hidden" name="jadwal_id" value="{{ $presensi->jadwal_id }}">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama">Program Latihan</label>
                                <select name="program_latihan_id" id="program_latiha_id" class="form-control bg-light text-dark program-latihan">
                                    <option value="" selected disabled>Pilih Program</option>
                                    @foreach ($data_program_latihan as $program_latihan)
                                        <option value="{{ $program_latihan->id }}">{{ $program_latihan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="list-detail-program"></div>
                            <div class="form-group">
                                <label for="tinggi_badan">Tinggi Badan</label>
                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" class="form-control bg-light text-dark bmi" name="tinggi_badan" id="tinggi_badan" placeholder="cm">
                            </div>
                            <div class="form-group">
                                <label for="berat_badan">Berat Badan</label>
                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" class="form-control bg-light text-dark bmi" name="berat_badan" id="berat_badan" placeholder="cm">
                            </div>
                            <div class="form-group">
                                <label for="body_mass_index">Body Mass Index</label>
                                <input type="text" class="form-control bg-light text-dark" name="body_mass_index" id="body_mass_index">
                            </div>
                            <div class="form-group">
                                <label for="dada">Ukuran Dada</label>
                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" class="form-control bg-light text-dark bm" name="dada" id="dada" placeholder="inci">
                            </div>
                            <div class="form-group">
                                <label for="pinggang">Ukuran Pinggang</label>
                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" class="form-control bg-light text-dark bm" name="pinggang" id="pinggang" placeholder="inci">
                            </div>
                            <div class="form-group">
                                <label for="pinggul_atas">Ukuran Pinggul Atas</label>
                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" class="form-control bg-light text-dark bm" name="pinggul_atas" id="pinggul_atas" placeholder="inci">
                            </div>
                            <div class="form-group">
                                <label for="pinggul_bawah">Ukuran Pinggul Bawah</label>
                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" class="form-control bg-light text-dark bm" name="pinggul_bawah" id="pinggul_bawah" placeholder="inci">
                            </div>
                            <div class="form-group">
                                <label for="body_measurement">Body Type / Body Measurement</label>
                                <input type="text" class="form-control bg-light text-dark" name="body_measurement" id="body_measurement">
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <textarea class="form-control bg-light text-dark" name="catatan" id="catatan"></textarea>
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
<script>
    $('.program-latihan').on('change', function () {
        const program_latihan_id = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/trainer/program-latihan/get-detail-table",
            type: 'post',
            data: {
                program_latihan_id: program_latihan_id
            },
            success: function(data) {
                $(".list-detail-program").html(data);
            }
        });
    });
</script>
@endsection