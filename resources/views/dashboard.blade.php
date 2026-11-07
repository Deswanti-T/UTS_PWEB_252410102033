@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <h1>Halo, {{ $username }}! 👋</h1>
        <p>Selamat datang di dashboard Kop(i) Des(i) yaa. Dari sini kamu bisa melihat profil dan mengelola menu kafe Des(i).</p>
    </div>
@endsection