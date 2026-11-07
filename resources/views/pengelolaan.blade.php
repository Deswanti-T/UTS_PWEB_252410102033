@extends('layouts.app')

@section('title', 'Pengelolaan Menu')

@section('content')
<style>
    .page-header {
        margin-bottom: 20px;
    }
    .page-header p {
        color: #666;
        margin-top: 5px;
    }
    .table-menu th:first-child,
    .table-menu td:first-child {
        text-align: center;
        width: 60px;
    }
</style>

<div class="card">
    <div class="page-header">
        <h1>📋 Pengelolaan Menu</h1>
        <p>Daftar menu Kop(i) Des(i) yang dikelola oleh <strong>{{ $username }}</strong>.</p>
    </div>

    <div class="table-wrap">
        <table class="table-menu">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($menus as $index => $menu)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $menu['nama'] }}</td>
                        <td>{{ $menu['kategori'] }}</td>
                        <td>Rp {{ number_format($menu['harga'], 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center;">Belum ada data menu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection