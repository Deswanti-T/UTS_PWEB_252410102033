@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<style>
    .profile-card {
        max-width: 500px;
        margin: 0 auto;
    }
    .profile-table {
        margin-top: 15px;
    }
    .profile-table th {
        width: 35%;
    }
    .back-btn {
        margin-top: 20px;
        display: inline-block;
    }
</style>

<div class="card profile-card">
    <h1>👤 Profil Pengguna</h1>

    <table class="profile-table">
        <tbody>
            <tr>
                <th>Username</th>
                <td>{{ $username }}</td>
            </tr>
            <tr>
                <th>Peran</th>
                <td>Admin Kafe</td>
            </tr>
            <tr>
                <th>Kafe</th>
                <td>Kop(i) Des(i)</td>
            </tr>
        </tbody>
    </table>

    <a href="/dashboard?username={{ $username }}" class="btn back-btn">
        &larr; Kembali ke Dashboard
    </a>
</div>
@endsection