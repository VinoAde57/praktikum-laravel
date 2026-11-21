@extends('layouts.app')

@section('title', 'Data Admin')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Data Admin</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Admin</h6>
            <a href="{{ url('/admin/create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Admin
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($admins as $admin)
                        <tr>
                            <td>{{ $admin->id_admin }}</td>
                            <td>{{ $admin->username }}</td>
                            <td>{{ $admin->created_at }}</td>
                            <td>
                                <a href="{{ url('/admin/'.$admin->id_admin.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ url('/admin/'.$admin->id_admin) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="text-center">Belum ada data admin.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection