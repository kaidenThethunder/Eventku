<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\Event;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Menampilkan daftar partisipan
    public function index()
    {
        $registrations = Registration::with('event')->get();
        return view('admin.registrations.index', compact('registrations'));
    }

    // Menampilkan form pendaftaran untuk event
    public function create()
    {
        $events = Event::all();

        return view('admin.registrations.create', compact('events'));
    }

    // Menyimpan data registrasi partisipan
    public function store(Request $request)
    {
        Registration::create([
            'id_user' => $request->user_id,
            'id_event' => $request->event_id,
        ]);

        return redirect()->route('admin.registrations.index')->with('success', 'Pendaftaran berhasil!');
    }

    // Menampilkan form untuk mengedit registrasi partisipan
    public function edit(Registration $registration)
    {
        $events = Event::all();
        return view('admin.registrations.edit', compact('registration', 'events'));
    }

    // Mengupdate data registrasi partisipan
    public function update(Request $request, Registration $registration)
    {
        $registration->update([
            'id_user' => $request->user_id,
            'id_event' => $request->event_id,
        ]);

        return redirect()->route('admin.registrations.index')->with('success', 'Pendaftaran berhasil diupdate!');
    }

    // Menghapus registrasi partisipan
    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->route('admin.registrations.index')->with('success', 'Pendaftaran berhasil dihapus!');
    }

    // public function getEvents()
    // {
    //     $events = Event::select('id', 'nama_event')->get();

    //     return response()->json($events);
    // }

    // public function getEventDetails($id)
    // {
    //     $event = Event::findOrFail($id);

    //     return response()->json([
    //         'ticket_price' => $event->harga_tiket,
    //         'description' => $event->deskripsi,
    //     ]);
    // }

    public function getAllEvents()
    {
        $events = Event::all([
            'id',
            'nama_event',
            'harga_tiket',
            'deskripsi',
            'lokasi_event',
            'tanggal'
        ]);

        return response()->json($events);
    }
}
