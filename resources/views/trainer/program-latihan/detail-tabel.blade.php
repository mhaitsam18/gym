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