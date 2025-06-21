<x-layout>
    <x-slot name="page_content">
        <div class="container py-4">
            <h4 class="fw-bold mb-4">Detail Pengguna</h4>

            <div class="card shadow rounded-3">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('admin/images/6.svg') }}" alt="Foto Profil"
                            class="rounded-circle mb-2" style="width: 100px; height: 100px;">
                        <h5 class="fw-bold text-gray-800">{{ $user->name }}</h5>
                        <p class="text-muted mb-0">{{ $user->email }}</p>
                        <span class="badge bg-primary mt-2">{{ ucfirst($user->role ?? 'pengguna') }}</span>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-gray-600">Nama Lengkap</label>
                            <div class="form-control bg-light">{{ $user->name }}</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-gray-600">Email</label>
                            <div class="form-control bg-light">{{ $user->email }}</div>
                        </div>
                        {{-- Tambahkan kolom lainnya jika ada seperti gender, alamat, dll --}}
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali ke Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
