<x-layout>
    <x-slot name="page_content">
        <div class="container py-4">
            <h2 class="mb-4">Edit Event</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Event</label>
                    <input type="text" name="title" class="form-control" id="title"
                        value="{{ old('title', $event->title) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar (kosongkan jika tidak diubah)</label><br>
                    <img src="{{ asset('storage/' . $event->image) }}" alt="Current Image" class="img-thumbnail mb-2" style="height: 150px;">
                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select name="category" id="category" class="form-select" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="ORMAWA" {{ $event->category === 'ORMAWA' ? 'selected' : '' }}>ORMAWA</option>
                        <option value="UKM" {{ $event->category === 'UKM' ? 'selected' : '' }}>UKM</option>
                        <option value="EKSTERNAL" {{ $event->category === 'EKSTERNAL' ? 'selected' : '' }}>EKSTERNAL</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="schedule" class="form-label">Jadwal</label>
                    <input type="datetime-local" name="schedule" class="form-control" id="schedule"
                        value="{{ old('schedule', \Carbon\Carbon::parse($event->schedule)->format('Y-m-d\TH:i')) }}" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <input type="text" name="location" class="form-control" id="location"
                        value="{{ old('location', $event->location) }}" required>
                </div>

                <div class="mb-3">
                    <label for="registration_link" class="form-label">Link Pendaftaran (opsional)</label>
                    <input type="url" name="registration_link" class="form-control" id="registration_link"
                        value="{{ old('registration_link', $event->registration_link) }}">
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('events.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </x-slot>
</x-layout>
