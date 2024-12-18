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
                display: none;
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
                    <img src="logo.svg" alt="Logo">
                    EVENTKU
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Daftar Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Lihat Event</a>
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


        <div id="daftar-event" class="content">
            <div class="container mt-5">
                <div class="card p-4">
                    <h5 class="fw-bold text-center mb-4">Daftar Event</h5>
                    <!-- <form onsubmit="showConfirmation(event)" method="post" action="{{ route('admin.registration.store') }}"> -->
                        @csrf
                        <div class="mb-3">
                            <label for="eventName" class="form-label">Pilih Event</label>
                            <select class="form-control" id="eventName" name="eventName" onchange="updateTicketPrice()">
                                <option value="" data-price="">Pilih Event</option>
                                <!-- @foreach ($events as $event)
                                    <option value="{{ $event->id }}" data-price="{{ $event->ticket_price }}">{{ $event->nama_event }}</option>
                                @endforeach -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="ticketPrice" class="form-label">Harga Tiket</label>
                            <input type="text" class="form-control" id="ticketPrice" name="ticketPrice" disabled>
                            <input type="hidden" class="form-control" id="status" name="status" value="Pending" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Event</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Daftar Event</button>
                    </form>

                </div>
            </div>
        </div>


        <div id="confirmation" class="content">
            <div class="container mt-5">
                <div class="card p-4">
                    <h5 class="fw-bold text-center mb-4">Detail Event</h5>
                    <div class="confirmation-text">
                        <p><span>Nama Event :</span><span id="confirmEventName"></span></p>
                        <p><span>Nama Peserta :</span><span id="confirmName"></span></p>
                        <p><span>Alamat :</span><span id="confirmAddress"></span></p>
                        <p><span>Harga :</span><span id="confirmTicketPrice"></span></p>
                        <p><span>Lokasi Event :</span><span id="confirmLocation"></span></p>
                        <p><span>Tanggal :</span><span id="confirmDate"></span></p>
                    </div>
                    <div class="confirmation-text-left">
                        <p>*untuk melakukan pembayaran hubungi admin</p>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-success w-100">
                            <img src="logowa.svg" alt="WhatsApp">Lanjutkan Pembayaran
                        </a>
                    </div>
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
                event.preventDefault();
                
                // Ambil nilai dari inputan form
                const eventName = document.getElementById('eventName').value;
                const name = document.getElementById('name').value;
                const address = document.getElementById('address').value;
                const ticketPrice = document.getElementById('ticketPrice').value;

                // Masukkan nilai ke dalam modal
                document.getElementById('confirmEventName').textContent = eventName;
                document.getElementById('confirmName').textContent = name;
                document.getElementById('confirmAddress').textContent = address;
                document.getElementById('confirmTicketPrice').textContent = `Rp. ${ticketPrice}`;
                

                // Tampilkan modal
                showContent('confirmation');
            }

            function updateTicketPrice() {
                // Ambil elemen dropdown event
                const eventDropdown = document.getElementById('eventName');
                // Ambil harga tiket dari atribut data-price pada opsi yang dipilih
                const selectedOption = eventDropdown.options[eventDropdown.selectedIndex];
                const ticketPrice = selectedOption.getAttribute('data-price');
                // Tampilkan harga tiket pada input harga tiket
                document.getElementById('ticketPrice').value = ticketPrice ? `Rp. ${ticketPrice}` : '';
            }
        </script>
    </body>

</html>
