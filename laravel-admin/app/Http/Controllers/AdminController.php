<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|max:100',
            'password' => 'required|max:100',
        ]);

        Admin::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/admin')->with('success', 'Data admin berhasil ditambahkan');
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'username' => 'required|max:100',
            'password' => 'nullable|max:100',
        ]);

        $admin->username = $request->username;
        if ($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }
        $admin->save();

        return redirect('/admin')->with('success', 'Data admin berhasil diubah');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect('/admin')->with('success', 'Data admin berhasil dihapus');
    }
}