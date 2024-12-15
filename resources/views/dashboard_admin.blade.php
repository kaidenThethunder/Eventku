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
                    <a class="text-white border-bottom w-100" href="javascript:void(0);"
                        onclick="showContent('home','home1')">Dashboard</a>
                    <a class="text-white border-bottom w-100" href="javascript:void(0);"
                        onclick="showContent('tambah-event','tambah-event1')">Tambah Event</a>
                    <a class="text-white border-bottom w-100" href="javascript:void(0);"
                        onclick="showContent('lihat-event','lihat-event1')">Kelola Event</a>
                    <a class="text-white border-bottom w-100"
                        href="javascript:void(0);"onclick="showContent('lihat-partisipan','lihat-partisipan1')">Partisipan</a>
                </div>
            </div>

            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center" style="height: 125px">
                    <div class="content active header-title ms-3" id="home1">
                        Dashboard
                    </div>
                    <div class="content header-title ms-3" id="tambah-event1">
                        Tambah Event
                    </div>
                    <div class="content header-title ms-3" id="lihat-event1">
                        Lihat Event
                    </div>
                    <div class="content header-title ms-3" id="lihat-partisipan1">
                        Kelola Event
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

                    <div id="tambah-event" class="content pt-5">
                        <!-- Form Tambah Event -->
                        <div class="container d-flex justify-content-center align-items-center">
                            <div class="card p-4 w-100"
                                style="max-width: 600px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <h5 class="fw-bold text-center mb-4">Tambah Event</h5>
                                <form>
                                    <div class="mb-3">
                                        <label for="eventName" class="form-label">Masukkan Nama Event</label>
                                        <input type="text" class="form-control" id="eventName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="address" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ticketPrice" class="form-label">Harga Tiket</label>
                                        <input type="text" class="form-control" id="ticketPrice" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Deskripsi Event</label>
                                        <textarea class="form-control" id="description" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Daftar Event</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="lihat-event" class="content pt-5">
                        <div class="container mt-5">
                            <div class="table-container">
                                <h5 class="mb-4">Kelola Event</h5>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Event</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal</th>
                                            <th>Harga Tiket</th>
                                            <th>Deskripsi</th>
                                            <th>Update/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Konser MCR</td>
                                            <td>GBK</td>
                                            <td>27 Januari 2025</td>
                                            <td>700000</td>
                                            <td>Konser Band Legendaris</td>
                                            <td class="action-icons">
                                                <button class="btn-edit rounded-3" data-bs-toggle="modal"
                                                    data-bs-target="#editEventModal"><img src="pencil.svg"
                                                        alt="Edit" style="width: 20px; height: 20px;"></button>
                                                <button class="btn-hapus rounded-3"><img src="delete.svg"
                                                        alt="hapus" style="width: 20px; height: 20px;"></button>
                                            </td>
                                        </tr>
                                        <!-- Tambahkan data lainnya jika perlu -->
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editEventModalLabel">Update</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editEventForm">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="editEventName"
                                                placeholder="Masukkan Nama Event" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="editEventLocation"
                                                placeholder="Lokasi Event" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" id="editEventDate"
                                                placeholder="Tanggal" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="number" class="form-control" id="editEventPrice"
                                                placeholder="Harga Tiket" required>
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="editEventDescription" rows="3" placeholder="Deskripsi Event" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div id="lihat-partisipan" class="content pt-5">
                        <div class="container mt-5">
                            <div class="table-container">
                                <h5 class="mb-4">Partisipan</h5>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Partisipan</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal</th>
                                            <th>Nama Event</th>
                                            <th>Status</th>
                                            <th>Update/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Rico Adrian Naibaho</td>
                                            <td>GBK</td>
                                            <td>27 Januari 2024</td>
                                            <td>Konser MCR</td>
                                            <td>Sudah Bayar</td>
                                            <td class="action-icons">
                                                <button class="btn-edit rounded-3" data-bs-toggle="modal"
                                                    data-bs-target="#editPartisipanModal"><img src="pencil.svg"
                                                        alt="Edit" style="width: 20px; height: 20px;"></button>
                                                <button class="btn-hapus rounded-3"><img src="delete.svg"
                                                        alt="hapus" style="width: 20px; height: 20px;"></button>
                                            </td>
                                        </tr>
                                        <!-- Tambahkan data lainnya jika perlu -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="editPartisipanModal" tabindex="-1"
                        aria-labelledby="editPartisipanModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPartisipanModalLabel">Update</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editPartisipanForm">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="editPartisipanName"
                                                placeholder="Masukkan Nama Partisipan" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="editPartisipanAlamat"
                                                placeholder="Alamat Partisipan" required>
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-control" id="editPartisipanStatus" required>
                                                <option value="" disabled selected>Pilih Status</option>
                                                <option value="pending">Pending</option>
                                                <option value="sudah_bayar">Sudah Bayar</option>
                                                <option value="batal">Batal</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script>
            function showContent(contentId1, contentId2 = null) {
                // Menyembunyikan semua konten
                const contents = document.querySelectorAll('.content');
                contents.forEach(content => content.classList.remove('active'));

                // Menampilkan konten pertama
                const activeContent1 = document.getElementById(contentId1);
                if (activeContent1) {
                    activeContent1.classList.add('active');
                }

                // Jika ada konten kedua, tampilkan juga
                if (contentId2) {
                    const activeContent2 = document.getElementById(contentId2);
                    if (activeContent2) {
                        activeContent2.classList.add('active');
                    }
                }
            }


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
