<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard Admin</title>
        <link rel="stylesheet" href="./assets/css/DashboardStyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet">

    </head>

    <body>
        <section class="d-flex items-center overflow-hidden" style="min-height: 100vh">
            <div class="d-flex flex-column align-items-center text-white"
                style="width: 20rem; background-color:#006B95;">
                <div class="navbar d-flex justify-content-center gap-2 border-bottom w-100" style="height: 125px;">
                    <img src="./assets/IconSidebar.svg" alt="" />
                    <div>Eventku</div>
                </div>

                <div class="link-nav d-flex flex-column align-items-center text-white w-100">
                    <a class="text-white border-bottom w-100" href="/index">Dashboard</a>
                    <a class="text-white border-bottom w-100" href="/tambahevent">Tambah Event</a>
                    <a class="text-white border-bottom w-100" href="">Kelola Event</a>
                    <a class="text-white border-bottom w-100" href="">Partisipan</a>
                </div>
            </div>

            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center" style="height: 125px">

                    <div class="content header-title ms-3">
                        Tambah Event
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 24px;">
                                Admin
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Profile</a></li>
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

                <div class="bg-body-secondary" style="height: 100%">
                    <!-- Konten Konten -->

                    <div id="tambah-event" class="content pt-5">
                        <!-- Form Tambah Event -->
                        <div class="container d-flex justify-content-center align-items-center">
                            <div class="card p-4 w-100"
                                style="max-width: 600px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <h5 class="fw-bold text-center mb-4">Tambah Event</h5>
                                <form action="{{ route('admin.event.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="eventName" class="form-label">Masukkan Nama Event</label>
                                        <input type="text" class="form-control" name="nama_event" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" name="lokasi_event" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ticketPrice" class="form-label">Harga Tiket</label>
                                        <input type="text" class="form-control" name="harga_tiket" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Deskripsi Event</label>
                                        <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Daftar Event</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
