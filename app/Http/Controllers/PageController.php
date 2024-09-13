<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('index', ['kelas' => $kelas]);
    }

    public function dashboard()
    {
        $user = Auth::user();
        $kelas = Kelas::all();
        return view('dashboard', ['user' => $user, 'kelas' => $kelas]);
    }

    public function admin()
    {
        $user = Auth::user();
        return view('admin.admindashboard', ['user' => $user]);
    }

    public function showKelas($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas', compact('kelas'));
    }
}
