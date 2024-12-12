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
            {{-- navbar --}}
            <div class="d-flex flex-column align-items-center text-white"
                style="width: 20rem; background-color:#006B95;">
                <div class="navbar d-flex justify-content-center gap-2 border-bottom w-100" style="height: 125px;">
                    <img src="./assets/IconSidebar.svg" alt="" />
                    <div>Eventku</div>
                </div>

                <div class="link-nav d-flex flex-column align-items-center text-white w-100">
                    <a class="text-white border-bottom w-100" href="">Dashboard</a>
                    <a class="text-white border-bottom w-100" href="">Tambah Event</a>
                    <a class="text-white border-bottom w-100" href="">Kelola Event</a>
                    <a class="text-white border-bottom w-100" href="">Partisipan</a>
                </div>
            </div>

            <div class="w-100">
                {{-- header --}}
                <div class="d-flex justify-content-between align-items-center" style="height: 125px">
                    <div class="header-title ms-3">
                        Dashboard
                    </div>
                    <div class="header d-flex align-items-center gap-2">
                        <div class="admin-inc">Admin</div>
                        <img src="./assets/IconAdmin.svg" alt="">
                    </div>
                </div>

                {{-- content --}}
                <div class="bg-body-secondary" style="height: 100%">

                    {{-- Isi Konten --}}

                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
