<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Produk</title>
</head>
<body>
    <h3 align="center">Data Produk</h3>
    <table border="1" cellpadding ="10" align="center">
        <thead>
           <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Minimal Stok</th>
            <th>Jenis Produk</th>
           </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($produk as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->nama }}</td>
                <td>Rp. {{ $p->harga_beli }}</td>
                <td>Rp. {{ $p->harga_jual }}</td>
                <td align="center">{{ $p->stok }}</td>
                <td align="center">{{ $p->min_stok }}</td>
                <td>{{ $p->jenis_produk->nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>