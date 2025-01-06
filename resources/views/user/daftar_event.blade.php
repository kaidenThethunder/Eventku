<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eventku Dashboard</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f4f4f4;
            }

            .card {
                border: none;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border-radius: 20px;
                max-width: 600px;
                margin: auto;
            }

            .navbar-nav {
                margin: 0 auto;
            }

            .navbar-brand img {
                height: 30px;
                margin-right: 10px;
            }

            .profile-logo {
                height: 30px;
                margin-left: 10px;
                border-radius: 50%;
            }

            .content {
                display: active;
            }

            .content.active {
                display: block;
            }

            .table-container {
                border-radius: 20px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                background-color: white;
                padding: 20px;
            }

            .btn-success {
                background-color: #006B95;
                border-color: #006B95;
            }

            .btn-success:hover {
                background-color: #00567A;
                border-color: #00567A;
            }

            .btn-success img {
                height: 20px;
                margin-right: 8px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
                    <img src="./logo.svg" alt="Logo">
                    EVENTKU
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/daftarevent">Daftar Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listEvents">Lihat Event</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" style="font-size: 20px;"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                        <img src="logoprofil.svg" alt="Profile Logo" class="profile-logo">
                    </div>
                </div>
            </div>
        </nav>


        <div id="daftar-event" class="content d-flex justify-content-center align-items-center">
            <div class="container mt-5">
                <div class="card p-4">
                    <h5 class="fw-bold text-center mb-4">Daftar Event</h5>
                    <form onsubmit="showConfirmation(event)" method="post" action="{{ route('registration.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="eventName" class="form-label">Pilih Event</label>
                            <select class="form-control" id="eventName" name="nama_event">
                                <option value="" disabled selected>Pilih salah satu</option>
                            </select>
                        </div>



                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="nama"
                                value="{{ Auth::user()->username }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="ticketPrice" class="form-label">Harga Tiket</label>

                            <input type="text" class="form-control" id="ticketPrice" name="harga_tiket" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="LokasiEvent" class="form-label">Lokasi Event</label>
                            <input type="text" class="form-control" id="LokasiEvent" name="LokasiEvent" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="Tanggal" name="tanggal" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Event</label>
                            <textarea class="form-control" id="description" rows="3" name="deskripsi" readonly></textarea>
                        </div>
                        <input type="hidden" class="form-control" id="id_event" name="event_id">
                        <input type="hidden" class="form-control" id="iduser" name="id"
                            value="{{ Auth::user()->id }}">
                        <input type="hidden" class="form-control" id="nameevent" name="nama_event">
                        <input type="hidden" class="form-control" id="status" name="status" value="pending">
                        <button type="submit" class="btn btn-primary w-100">Daftar Event</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function showContent(id) {
                const contents = document.querySelectorAll('.content');
                contents.forEach(content => content.classList.remove('active'));
                document.getElementById(id).classList.add('active');
            }

            function showConfirmation(event) {

                const eventName = document.getElementById('eventName');
                const selectedEventText = eventName.options[eventName.selectedIndex].textContent;
                const name = document.getElementById('name').value;
                const address = document.getElementById('address').value;
                const ticketPrice = document.getElementById('ticketPrice').value;
                const location = document.getElementById('LokasiEvent').value;
                const date = document.getElementById('Tanggal').value;
                const status = document.getElementById('status').value;

                document.getElementById('confirmEventName').textContent = selectedEventText;
                document.getElementById('confirmName').textContent = name;
                document.getElementById('confirmAddress').textContent = address;
                document.getElementById('confirmTicketPrice').textContent = ticketPrice;
                document.getElementById('confirmLocation').textContent = location;
                document.getElementById('confirmDate').textContent = date;
                document.getElementById('confirmStatus').textContent = status;

                showContent('confirmation');

            }


            document.addEventListener('DOMContentLoaded', function() {

                const eventSelect = document.getElementById('eventName');
                const ticketPriceInput = document.getElementById('ticketPrice');
                const locationInput = document.getElementById('LokasiEvent');
                const dateInput = document.getElementById('Tanggal');
                const descriptionTextarea = document.getElementById('description');

                let eventsData = []; // Untuk menyimpan data event

                // Fetch semua data event
                fetch('/events')
                    .then(response => response.json())
                    .then(data => {
                        eventsData = data; // Simpan data ke dalam cache

                        // Tambahkan opsi ke dropdown
                        data.forEach(event => {
                            const option = document.createElement('option');
                            option.value = event.id; // Gunakan ID sebagai value
                            option.textContent = event.nama_event; // Nama event sebagai teks
                            eventSelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching events:', error);
                    });

                // Update harga tiket dan deskripsi saat pilihan berubah
                eventSelect.addEventListener('change', function() {
                    const selectedEventId = eventSelect.value;

                    if (selectedEventId) {
                        // Cari data event yang sesuai berdasarkan ID
                        const selectedEvent = eventsData.find(event => event.id == selectedEventId);

                        if (selectedEvent) {
                            const idEventInput = document.getElementById('id_event');
                            idEventInput.value = selectedEvent.id;
                            const hargaTiket = selectedEvent.harga_tiket;
                            ticketPriceInput.value = selectedEvent.harga_tiket;
                            locationInput.value = selectedEvent.lokasi_event;
                            dateInput.value = selectedEvent.tanggal;
                            descriptionTextarea.value = selectedEvent.deskripsi;

                            const nameEventInput = document.getElementById('nameevent');
                            nameEventInput.value = selectedEvent.nama_event;


                        }
                    } else {
                        // Reset jika tidak ada pilihan
                        ticketPriceInput.value = '';
                        descriptionTextarea.value = '';
                    }
                });
            });

            // document.addEventListener('DOMContentLoaded', function() {
            //     const waButton = document.querySelector('.btn-success');

            //     waButton.addEventListener('click', function() {
            //         const eventName = document.getElementById('confirmEventName').textContent;
            //         const name = document.getElementById('confirmName').textContent;
            //         const address = document.getElementById('confirmAddress').textContent;
            //         const ticketPrice = document.getElementById('confirmTicketPrice').textContent;
            //         const location = document.getElementById('confirmLocation').textContent;
            //         const date = document.getElementById('confirmDate').textContent;

            //         // Format pesan ke Markdown style key:value
            //         const message = `*Detail Event*\n` +
            //             `*Nama Event:* ${eventName}\n` +
            //             `*Nama Peserta:* ${name}\n` +
            //             `*Alamat:* ${address}\n` +
            //             `*Harga:* ${ticketPrice}\n` +
            //             `*Lokasi Event:* ${location}\n` +
            //             `*Tanggal:* ${date}`;

            //         // Encode pesan dan buat link WhatsApp
            //         const waLink = `https://wa.me/+6282255244513?text=${encodeURIComponent(message)}`;

            //         // Redirect ke WhatsApp
            //         window.location.href = waLink;
            //     });
            // });
        </script>
    </body>

</html>
