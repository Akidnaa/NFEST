<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('dashboard.events.index', compact('events'));
    }

    public function create()
    {
        return view('dashboard.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|in:ORMAWA,UKM,EKSTERNAL',
            'schedule' => 'required|date',
            'location' => 'required|string|max:255',
            'registration_link' => 'nullable|url',
        ]);

        // Simpan gambar
        $imagePath = $request->file('image')->store('event_images', 'public');

        Event::create([
            'title' => $request->title,
            'image' => $imagePath,
            'category' => $request->category,
            'schedule' => $request->schedule,
            'location' => $request->location,
            'registration_link' => $request->registration_link,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil ditambahkan');
    }

    public function show($id)
{
    $event = Event::findOrFail($id);
    return view('dashboard.events.show', compact('event'));
}


    public function edit(Event $event)
    {
        return view('dashboard.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|in:ORMAWA,UKM,EKSTERNAL',
            'schedule' => 'required|date',
            'location' => 'required|string|max:255',
            'registration_link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event_images', 'public');
            $event->image = $imagePath;
        }

        $event->update([
            'title' => $request->title,
            'category' => $request->category,
            'schedule' => $request->schedule,
            'location' => $request->location,
            'registration_link' => $request->registration_link,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus');
    }
    public function listForUser(Request $request)
{
    $category = $request->query('category');

    $events = Event::when($category && $category !== 'ALL', function ($query) use ($category) {
        return $query->where('category', $category);
    })->latest()->get();

    return view('events', compact('events', 'category'));
}

}
