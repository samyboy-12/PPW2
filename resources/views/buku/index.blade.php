<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $buku)
        <tr>
            <td>{{ $buku->id }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ 'Rp. '.number_format($buku->harga, 2, ',', '.') }}</td>
            <td>{{ $buku->tgl_terbit->format('d/m/Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Menampilkan jumlah buku dan total harga di bawah tabel -->
<div class="mt-3">
    <p><strong>Jumlah Buku:</strong> {{ $jumlah_buku }}</p>
    <p><strong>Total Harga Semua Buku:</strong> {{ 'Rp. '.number_format($total_harga, 2, ',', '.') }}</p>
</div>
