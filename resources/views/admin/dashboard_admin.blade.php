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
        <style>
            .content {
                display: none;
            }

            .content.active {
                display: block;
            }
        </style>
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
                    <a class="text-white border-bottom w-100" href="/dashboard_admin">Dashboard</a>
                    <a class="text-white border-bottom w-100" href="/tambahevent">Tambah Event</a>
                    <a class="text-white border-bottom w-100" href="/index">Kelola Event</a>
                    <a class="text-white border-bottom w-100" href="{{route('admin.partisipan.index')}}">Partisipan</a>
                </div>
            </div>

            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center" style="height: 125px">
                    <div class="content active header-title ms-3" id="home1">
                        Dashboard
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
                    <div id="home" class="content active">
                        <div class="row mx-5">
                            <div class="col-12 col-md-6 col-lg-4 mt-5 rounded-5">
                                <div class="card rounded d-flex flex-column align-items-center gap-5 "
                                    style="padding:5rem ;">
                                    <h5 class="title">Jumlah Event</h5>
                                    <p class="value">1</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mt-5 rounded-5">
                                <div class="card rounded d-flex flex-column align-items-center gap-5 "
                                    style="padding:5rem ;">
                                    <h5 class="title">Partisipan</h5>
                                    <p class="value">1</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mt-5 rounded-5">
                                <div class="card rounded d-flex flex-column align-items-center gap-5 "
                                    style="padding:5rem ;">
                                    <h5 class="title">Event yang Selesai</h5>
                                    <p class="value">0</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </section>

        


            // document.querySelectorAll('.btn-edit').forEach(button => {
            // button.addEventListener('click', function () {
            //     // Contoh data yang bisa Anda ambil dari tabel
            //     const row = this.closest('tr');
            //     const eventName = row.cells[0].innerText;
            //     const eventLocation = row.cells[1].innerText;
            //     const eventDate = row.cells[2].innerText;
            //     const eventPrice = row.cells[3].innerText;
            //     const eventDescription = row.cells[4].innerText;

            //     // Isi data ke dalam form di modal
            //     document.getElementById('editEventName').value = eventName;
            //     document.getElementById('editEventLocation').value = eventLocation;
            //     document.getElementById('editEventDate').value = eventDate;
            //     document.getElementById('editEventPrice').value = eventPrice;
            //     document.getElementById('editEventDescription').value = eventDescription;
            // });
            // });

            // Tambahkan event listener untuk tombol simpan perubahan
            document.getElementById('editEventForm').addEventListener('submit', function(event) {
                event.preventDefault();
                alert('Perubahan berhasil disimpan!');
                // Tambahkan logika untuk menyimpan perubahan ke database atau memperbarui tabel
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
