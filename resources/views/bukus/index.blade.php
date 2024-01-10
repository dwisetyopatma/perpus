{{-- resources/views/bukus/index.blade.php --}}

<h1>Data Buku</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bukus as $buku)
            <tr>
                <td>{{ $buku->bukuID }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
            </tr>
        @endforeach
    </tbody>
</table>