@extends('layouts.app')

@section('title', 'Login')

@section('content')
<style>
    .login-card {
        max-width: 420px;
        margin: 40px auto;
    }
    .login-card p {
        margin-bottom: 16px;
        color: #666;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
    }
</style>

<div class="card login-card">
    <h2>☕ Selamat Datang di Kop(i) Des(i)</h2>
    <p>Silakan masuk untuk mengelola menu kafe Des(i).</p>

    <form action="/dashboard" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username..." required autocomplete="off">
        </div>

        <button type="submit" class="btn" style="width: 100%;">Masuk</button>
    </form>
</div>
@endsection