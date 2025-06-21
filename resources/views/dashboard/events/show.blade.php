<x-layout>
    <x-slot name="page_content">
        <div class="container py-4">
            <h2 class="mb-4">Detail Event</h2>

            <div class="card shadow-sm">
                <div class="row g-0">
                    <div class="col-md-5">
                        @if ($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid rounded-start w-100 h-100" style="object-fit: cover;" alt="{{ $event->title }}">
                        @else
                            <div class="d-flex align-items-center justify-content-center h-100 bg-secondary text-white">
                                <p class="m-0">Tidak ada gambar</p>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">{{ $event->title }}</h4>
                            <p class="card-text"><strong>Kategori:</strong> {{ $event->category }}</p>
                            <p class="card-text"><strong>Jadwal:</strong> {{ \Carbon\Carbon::parse($event->schedule)->translatedFormat('d F Y H:i') }}</p>
                            <p class="card-text"><strong>Lokasi:</strong> {{ $event->location }}</p>

                            @if ($event->registration_link)
                                <p class="card-text">
                                    <strong>Link Pendaftaran:</strong><br>
                                    <a href="{{ $event->registration_link }}" target="_blank" class="btn btn-outline-primary mt-1">
                                        Buka Link
                                    </a>
                                </p>
                            @endif

                            <div class="mt-4">
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning me-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ route('events.index') }}" class="btn btn-secondary">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </x-slot>
</x-layout>
