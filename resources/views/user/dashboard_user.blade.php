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

        <div id="home" class="content active">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-center p-4">
                            <h5 class="fw-bold">Jumlah Event</h5>
                            <h1 class="display-4">{{ $totalEvents }}</h1>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center p-4">
                            <h5 class="fw-bold">Jumlah Event Yang di Daftar</h5>
                            <h1 class="display-4">{{ $totalRegisteredEvents }}</h1>
                        </div>
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
                showContent('confirmation');
            }
        </script>
    </body>

</html>
