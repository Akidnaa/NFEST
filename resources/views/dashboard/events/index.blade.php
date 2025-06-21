<x-layout>
    <x-slot name="page_content">
        <div class="dashboard-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold">Daftar Event</h4>
                <a href="{{ route('events.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Tambah Event
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- FILTER KATEGORI --}}
            {{-- Uncomment jika ingin pakai filter kategori --}}
            {{-- 
            <div class="mb-3">
                <a href="?category=ALL" class="btn btn-secondary btn-sm {{ request('category') == 'ALL' ? 'active' : '' }}">Semua</a>
                <a href="?category=ORMAWA" class="btn btn-outline-primary btn-sm {{ request('category') == 'ORMAWA' ? 'active' : '' }}">ORMAWA</a>
                <a href="?category=UKM" class="btn btn-outline-primary btn-sm {{ request('category') == 'UKM' ? 'active' : '' }}">UKM</a>
                <a href="?category=EKSTERNAL" class="btn btn-outline-primary btn-sm {{ request('category') == 'EKSTERNAL' ? 'active' : '' }}">EKSTERNAL</a>
            </div>
            --}}

            <table id="eventTable" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="fixed-width"></th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Jadwal</th>
                        <th class="text-center">Lokasi</th>
                        <th class="text-center">Link</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($events as $event)
                        <tr>
                            <td class="fixed-width"></td>

                            <td class="text-center align-middle">
                                @if ($event->image)
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="Gambar"
                                        class="rounded" style="width: 60px; height: 40px; object-fit: cover;">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            <td class="text-center align-middle">
                                <span class="h6 mb-0 fw-medium text-gray-700">{{ $event->title }}</span>
                            </td>

                            <td class="text-center align-middle">
                                <span class="badge bg-info text-white">{{ $event->category }}</span>
                            </td>

                            <td class="text-center align-middle">
                                <span class="h6 mb-0 fw-medium text-gray-700">
                                    {{ \Carbon\Carbon::parse($event->schedule)->format('d M Y H:i') }}
                                </span>
                            </td>

                            <td class="text-center align-middle">
                                <span class="h6 mb-0 fw-medium text-gray-700">{{ $event->location }}</span>
                            </td>

                            <td class="text-center align-middle">
                                @if ($event->registration_link)
                                    <a href="{{ $event->registration_link }}" target="_blank"
                                        class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-link"></i> Link
                                    </a>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            <td class="text-center align-middle">
                                <a href="{{ route('events.show', $event->id) }}" class="btn btn-info btn-sm mb-1">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>

                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm mb-1">
                                    <i class="far fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                    class="d-inline delete-form"
                                    onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="far fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">Belum ada event.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-slot>
</x-layout>
