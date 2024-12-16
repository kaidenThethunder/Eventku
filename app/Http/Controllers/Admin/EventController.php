<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Menampilkan daftar event
    public function index()
    {
        $events = Event::all();
        return view('admin.kelola_event', compact('events'));
    }

    // Menampilkan form untuk membuat event
    public function create()
    {
        return view('admin.tambah_event');
    }

    // Menyimpan data event yang baru
    public function store(Request $request)
    {
        Event::create([
            'nama_event' => $request->nama_event,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'harga_tiket' => $request->harga_tiket,
            'lokasi_event' => $request->lokasi_event,

        ]);

        return redirect()->route('admin.event.index')->with('success', 'Event berhasil dibuat!');
    }

    // Menampilkan form untuk mengedit event
    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    // Mengupdate data event
    public function update(Request $request, Event $event)
    {
        $event->update([
            'nama_event' => $request->nama_event,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'harga_tiket' => $request->harga_tiket,
            'lokasi_event' => $request->lokasi_event,
        ]);

        return redirect()->route('admin.event.index')->with('success', 'Event berhasil diupdate!');
    }

    // Menghapus event
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.index')->with('success', 'Event berhasil dihapus!');
    }
}
