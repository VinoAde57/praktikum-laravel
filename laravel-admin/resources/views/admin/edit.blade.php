@extends('layouts.app')

@section('title', 'Edit Admin')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Edit Admin</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ url('/admin/'.$admin->id_admin) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="{{ old('username', $admin->username) }}"
                           class="form-control @error('username') is-invalid @enderror">
                    @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"
                           placeholder="Kosongkan jika tidak diubah">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ url('/admin') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection