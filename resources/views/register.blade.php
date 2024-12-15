<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Register Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link rel="stylesheet" href="./assets/css/RegisterStyle.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet" />
    </head>

    <body>
        <section class="d-flex justify-content-center align-items-center my-5" style="height:100vh">
            <div class="card" style="border-radius: 45px">
                <div class="d-flex justify-content-center" style="margin-top: -3rem">
                    <img src="../assets/solar_user-bold.svg" alt="" class="icon-user bg-white" />
                </div>

                <div class="p-5">
                    <div style="border: 1px solid #d9d9d9; border-radius: 30px">
                        <div class="d-flex justify-content-center gap-3">
                            <div class="login-text text-secondary">Login</div>
                            <div class="regis-text text-light">Register</div>
                        </div>
                    </div>

                    <form method="POST" action="/register">
                        @csrf
                        <div class="d-flex flex-column gap-4 py-5">
                            <input type="email" class="form-control username-input" id="email" name="email"
                                placeholder="Masukkan Email" />

                            <input type="text" id="fullName" class="form-control pass-input" name="full_name"
                                placeholder="Masukkan Nama Lengkap" />

                            <input type="text" id="username" class="form-control pass-input" name="username"
                                placeholder="Masukkan Username" />

                            <input type="password" id="password" class="form-control pass-input" name="password"
                                placeholder="Masukkan Password" />

                            <input type="hidden" name="role" value="user" /> <!-- Role fixed to 'user' -->

                            <button class="button-register text-white"
                                onclick="submitRegistrationForm()">Register</button>
                            <div>
                                Sudah punya akun?
                                <a href="/" class="register-anchor">Masuk Sekarang</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script>
            function submitRegistrationForm() {
                const formData = new FormData(document.querySelector('form'));

                fetch('/register', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Pastikan CSRF token disertakan
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.errors) {
                            // Tampilkan error di console jika ada kesalahan
                            console.error('Terjadi kesalahan:', data.errors);
                            alert('Terjadi kesalahan saat membuat akun. Cek console untuk detail.');
                        } else {
                            // Jika berhasil, tampilkan alert sukses
                            alert('Akun berhasil dibuat!');
                            window.location.href = '/login'; // Redirect ke halaman login
                        }
                    })
                    .catch(error => {
                        // Tangani error jika fetch gagal
                        console.error('Error:', error);
                    });
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
