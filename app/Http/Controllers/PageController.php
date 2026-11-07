<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;

        if (!$username) {
            return redirect()->to('/');
        }

        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        return view('profile', [
            'username' => $request->get('username')
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->username;

        $menus = [
            ['nama' => 'Espresso', 'kategori' => 'Kopi', 'harga' => 18000],
            ['nama' => 'Cappuccino', 'kategori' => 'Kopi', 'harga' => 25000],
            ['nama' => 'Es Kopi Susu', 'kategori' => 'Kopi', 'harga' => 22000],
            ['nama' => 'Matcha Latte', 'kategori' => 'Non-Kopi', 'harga' => 27000],
            ['nama' => 'Croissant', 'kategori' => 'Makanan', 'harga' => 20000],
            ['nama' => 'Nasi Goreng', 'kategori' => 'Makanan', 'harga' => 28000],
        ];

        return view('pengelolaan', compact('username', 'menus'));
    }
}