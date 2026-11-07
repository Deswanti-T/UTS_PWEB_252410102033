@props(['username' => ''])

<style>
    .navbar {
        background-color: #3b2a20;
        color: #ffffff;
        padding: 14px 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
    }
    .navbar-brand { font-size: 1.3rem; font-weight: bold; }
    .navbar-menu { display: flex; gap: 18px; }
    .navbar-menu a { color: #f6efe7; text-decoration: none; }
    .navbar-menu a.logout-btn { color: #e0a96d; }
</style>

<nav class="navbar">
    <div class="navbar-brand">
        ☕ Kop(i) Des(i)
    </div>

    @if ($username)
        <div class="navbar-menu">
            <a href="/dashboard?username={{ $username }}">Dashboard</a>
            <a href="/profile?username={{ $username }}">Profil</a>
            <a href="/pengelolaan?username={{ $username }}">Pengelolaan</a>
            <a href="/" class="logout-btn">Keluar</a>
        </div>
    @endif
</nav>