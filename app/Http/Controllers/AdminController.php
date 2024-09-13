<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Materi;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function akun()
    {
        $users = User::all();
        return view('admin.settings.akun', compact('users'));
    }
    public function buatAkun()
    {
        return view('admin.settings.buatAkun');
    }
    public function storeAkun(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:20',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);
        return redirect()->route('admin.settings.akun')->with('success', 'User Berhasil dibuat');
    }

    public function editAkun($id)
    {
        $user = User::findOrFail($id);
        return view('admin.settings.editAkun', compact('user'));
    }

    public function updateAkun(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'username' => 'string|max:255',
            'email' => 'string|email|max:255' . $id,
            'phone' => 'nullable|string|max:15',
            'role' => 'string|max:20',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->only('name', 'username', 'email', 'phone', 'role'));

        return redirect()->route('admin.settings.akun')->with('success', 'User berhasil diupdate.');
    }

    public function destroyAkun($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.settings.akun')->with('success', 'User berhasil dihapus.');
    }
    // =====================================================================================================
    // MATERI................................................................
    public function materi()
    {
        $materi = Materi::all();
        return view('admin.settings.materi', compact('materi'));
    }
    public function buatMateri()
    {
        return view('admin.settings.buatMateri');
    }

    public function storeMateri(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi_materi' => 'required',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        Materi::create([
            'judul' => $request->judul,
            'isi_materi' => $request->isi_materi,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('materi')->with('success', 'materi berhasil dibuat.');
    }

    public function editMateri($id)
    {
        $materi = Materi::findOrFail($id);
        $kelas = Kelas::all();
        return view('admin.settings.editMateri', compact('materi', 'kelas'));
    }

    public function updateMateri(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi_materi' => 'required',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $materi = Materi::findOrFail($id);
        $materi->update($request->only('judul', 'isi_materi', 'kelas_id'));

        return redirect()->route('materi')->with('success', 'Materi telah diperbarui');
    }

    public function destroyMateri($id)
    {
        $materi = Materi::findOrFail($id);
        $materi->delete();

        return redirect()->route('materi')->with('success', 'materi telah dihapus.');
    }
    // =====================================================================================================
    // KELAS -----------------------------------------------------
    public function kelas()
    {
        $kelas = Kelas::all();
        return view('admin.settings.kelas', compact('kelas'));
    }

    public function buatKelas()
    {
        return view('admin.settings.buatKelas');
    }

    public function storeKelas(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->storeAs('public/photos', $imageName);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
        ]);

        return redirect()->route('kelas')->with('success', 'kelas berhasil dibuat.');
    }

    public function editKelas($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.settings.editKelas', compact('kelas'));
    }

    public function updateKelas(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $kelas = Kelas::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($kelas->gambar) {
                Storage::delete('public/photos/' . $kelas->gambar);
            }
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/photos', $imageName);
            $kelas->gambar = $imageName;
        }

        $kelas->update($request->only('nama_kelas', 'deskripsi', 'gambar'));

        return redirect()->route('kelas')->with('success', 'Kelas telah diperbarui');
    }

    public function destroyKelas($id)
    {
        $kelas = Kelas::findOrFail($id);
        if ($kelas->image) {
            Storage::delete('public/photos/' . $kelas->gambar);
        }
        $kelas->delete();

        return redirect()->route('kelas')->with('success', 'kelas telah dihapus.');
    }
}
