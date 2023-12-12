@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-Z2ISwQkTFYpMDtvi4LH6fndFIIpIfFgsrHcMNIta7vaW8+um1RBPGbhC2MZ1BwPR" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Permintaan Aplikasi</title> --}}
    <style>
        .container {
            text-align: center;
            margin-top: 20px;
        }

        .table-container {
            max-height: 400px; /* Atur ketinggian maksimum yang diinginkan */
            overflow-y: auto; /* Atur agar terjadi overflow dengan scrolldown jika lebih dari ketinggian maksimum */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .sub-table {
            display: none;
            background-color: #f9f9f9;
            margin-top: 10px;
        }

        .sub-table th, .sub-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .dropdown-btn {
            cursor: pointer;
            text-decoration: underline;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container bg-accent-color-1 text-white">
        <h4>Permintaan Aplikasi</h4>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No Dokumen</th>
                    <th>Tanggal Dokumen</th>
                    <th>Judul Dokumen</th>
                    <th>Asal Dokumen</th>
                    <th>Tujuan Dokumen</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->no }}</td>
                    <td>{{ $post->tanggal }}</td>
                    <td>{{ $post->judul }}</td>
                    <td>{{ $post->asal }}</td>
                    <td>{{ $post->tujuan }}</td>
                    <td><a href="dokumen/{{ $post }}" target="_blank">Lihat</a></td>
                    <td class="dropdown-btn text-decoration-none" onclick="toggleSubTable('subTable{{ $post->id }}', this)">Lihat</td>
                </tr>
                <tr id="subTable{{ $post->id }}" class="sub-table">
                    <td colspan="8">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Tujuan</th>
                                    <th>File</th>
                                    <th>Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->judul }}</td>
                                    <td>{{ $post->tujuan }}</td>
                                    <td>{{ $post->image }}</td>
                                    <td><img src="{{ asset('storage/' . $post->image) }}" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        data diatas adalah beberapa file yang ada
    </div>

    <script>
        function toggleSubTable(subTableId, btn) {
            const subTable = document.getElementById(subTableId);
            const parentRow = btn.parentNode; // Baris yang mengandung tombol
    
            // Sembunyikan semua subtabel
            const allSubTables = document.querySelectorAll('.sub-table');
            allSubTables.forEach(table => {
                table.style.display = 'none';
            });
    
            // Hapus warna latar belakang dari baris sebelumnya
            const allRows = document.querySelectorAll('tbody tr');
            allRows.forEach(row => {
                row.style.backgroundColor = '';
            });
    
            // Jika subtabel sudah terlihat, sembunyikan
            if (subTable.style.display !== 'none') {
                subTable.style.display = 'none';
            } else {
                // Jika subtabel belum terlihat, tampilkan di bawah baris yang dipilih
                subTable.style.display = 'table-row';
    
                // Atur warna latar belakang pada baris yang dipilih
                parentRow.style.backgroundColor = '#e6f7ff';
            }
        }


        
    </script>
</body>
</html>
@endsection
