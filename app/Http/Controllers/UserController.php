<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /* =========================
       INDEX (LIST USER)
    ========================= */
    public function index()
    {
        if (!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /* =========================
       CREATE FORM
    ========================= */
    public function create()
    {
        if (!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        return view('admin.users.create');
    }

    /* =========================
       STORE USER + FOTO
    ========================= */
    public function store(Request $request)
{
    if (session('role') !== 'admin') {
        abort(403, 'Akses ditolak');
    }

    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'phone'    => 'nullable|string',
        'address'  => 'nullable|string',
        'photo'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $photoName = null;

    if ($request->hasFile('photo')) {

        $file = $request->file('photo');

        $photoName = time().'_'.$file->getClientOriginalName();

        $file->move(
            public_path('users'),
            $photoName
        );
    }

    User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'phone'    => $request->phone,
        'address'  => $request->address,
        'password' => Hash::make($request->password),
        'role'     => $request->role ?? 'user',
        'photo'     => $photoName,
    ]);

    return redirect()->route('users.index')
        ->with('success', 'User berhasil ditambahkan');
}
    /* =========================
       EDIT FORM
    ========================= */
    public function edit($id)
    {
        if (!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    /* =========================
       UPDATE USER + FOTO
    ========================= */
    public function update(Request $request, $id)
    {
        if (session('role') !== 'admin') {
            abort(403, 'Akses ditolak');
        }

        $user = User::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role'  => 'required|in:admin,user',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            
        ]);

       if ($request->hasFile('photo')) {

    if ($user->photo && file_exists(public_path('users/'.$user->photo))) {
        unlink(public_path('users/'.$user->photo));
    }

    $file = $request->file('photo');

    $photoName = time().'_'.$file->getClientOriginalName();

    $file->move(
        public_path('users'),
        $photoName
    );

    $user->photo = $photoName;
}

        // UPDATE DATA
        $user->name    = $request->name;
        $user->email   = $request->email;
        $user->phone   = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;

        // password optional
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil diupdate');
    }

    /* =========================
       DELETE USER
    ========================= */
    public function destroy($id)
    {
        if (session('role') !== 'admin') {
            abort(403, 'Akses ditolak');
        }

        $user = User::findOrFail($id);

        // hapus foto
        if ($user->photo && file_exists(public_path('users/'.$user->photo))) {
            unlink(public_path('users/'.$user->photo));
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }


public function editProfil()
{
    $user = User::findOrFail(session('user_id'));

    return view('admin.users.edit_profil', compact('user'));
}

public function updateProfil(Request $request)
{
    $user = User::findOrFail(session('user_id'));

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('photo')) {

        if ($user->photo && file_exists(public_path('users/'.$user->photo))) {
            unlink(public_path('users/'.$user->photo));
        }

        $file = $request->file('photo');
        $photoName = time().'_'.$file->getClientOriginalName();

        $file->move(public_path('users'), $photoName);

        $user->photo = $photoName;
    }

    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;

    if (!empty($request->password)) {
        $user->password = \Hash::make($request->password);
    }

    $user->save();

    return redirect()
        ->route('edit_profil')
        ->with('success', 'Profil berhasil diperbarui');
}

}