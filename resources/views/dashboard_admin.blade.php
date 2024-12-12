<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Eventku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #006d91;
            color: white;
            padding: 15px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #005b78;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .card {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>EVENTKU</h2>
        <a href="#">Dashboard</a>
        <a href="#">Tambah Event</a>
        <a href="#">Kelola Event</a>
        <a href="#">Partisipan</a>
    </div>

    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Dashboard</h1>
            <div>
                <span>Admin</span>
                <img src="https://via.placeholder.com/30" alt="Admin" class="rounded-circle ms-2">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Event</h5>
                        <h2 class="card-text">14</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Partisipan</h5>
                        <h2 class="card-text">60</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Event Yang Selesai</h5>
                        <h2 class="card-text">6</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
