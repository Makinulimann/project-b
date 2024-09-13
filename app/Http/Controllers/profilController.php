<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function showProfil()
    {
        $user = Auth::user();
        return view('profil', ['user' => $user]);
    }

    public function editProfil(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'username' => 'string|max:255',
            'email' => 'string|email|max:255',
            'phone' => 'nullable|string|max:15',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::delete('public/photos/' . $user->photo);
            }
            $photoName = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('public/photos', $photoName);
            $user->photo = $photoName;
        }

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->route('profil')->with('success', 'Profil telah diperbarui');
    }
}
