@extends('layouts.admin')

@section('content')
<section class="min-h-screen bg-white py-20">
    <div class="max-w-2xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6">Tambah Admin/User</h2>

        <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block font-medium">Nama</label>
                <input type="text" name="name" class="w-full border border-gray-300 rounded px-4 py-2" required>
            </div>

            <div>
                <label class="block font-medium">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded px-4 py-2" required>
            </div>

            <div>
                <label class="block font-medium">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded px-4 py-2" required>
            </div>

            <div>
                <label class="block font-medium">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded px-4 py-2" required>
            </div>

            <div>
                <label class="block font-medium">Role</label>
                <select name="role" class="w-full border border-gray-300 rounded px-4 py-2" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>

            <button type="submit" class="bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700">
                Simpan
            </button>
        </form>
    </div>
</section>
@endsection
