<x-layout>
    <x-slot name="page_content">
        <div class="dashboard-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold">Daftar Pengguna</h4>
                {{-- Tombol tambah pengguna di-nonaktifkan --}}
            </div>

            <table id="userTable" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="fixed-width"></th>
                        <th class="h6 text-gray-300 text-center">Nama Pengguna</th>
                        <th class="h6 text-gray-300 text-center">Email</th>
                        <th class="h6 text-gray-300 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td class="fixed-width"></td>
                            <td class="text-center align-middle">
                                <div class="d-flex align-items-center gap-2 justify-content-center">
                                    <img src="{{ asset('admin/images/6.svg')}}" alt="Foto" class="rounded-circle" style="width: 40px; height: 40px;">
                                    <span class="h6 mb-0 fw-medium text-gray-300">{{ $user->name }}</span>
                                </div>
                            </td>
                            <td class="text-center align-middle">
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $user->email }}</span>
                            </td>
                            <td class="text-center align-middle">
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">
                                    <i class="far fa-eye"></i> Lihat
                                </a>
                                {{-- Edit dan hapus di-nonaktifkan --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Tidak ada pengguna yang ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-slot>
</x-layout>
