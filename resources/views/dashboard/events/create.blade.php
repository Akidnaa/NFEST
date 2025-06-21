<x-layout>
    <x-slot name="page_content">
        <div class="dashboard-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold">Tambah Event Baru</h4>
                <a href="{{ route('events.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>

            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Event</label>
                    <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" id="category" class="form-control" required value="{{ old('category') }}">
                </div>

                <div class="mb-3">
                    <label for="schedule" class="form-label">Jadwal</label>
                    <input type="datetime-local" name="schedule" id="schedule" class="form-control" required value="{{ old('schedule') }}">
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <input type="text" name="location" id="location" class="form-control" required value="{{ old('location') }}">
                </div>

                <div class="mb-3">
                    <label for="registration_link" class="form-label">Link Pendaftaran</label>
                    <input type="url" name="registration_link" id="registration_link" class="form-control" required value="{{ old('registration_link') }}">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </x-slot>
</x-layout>
