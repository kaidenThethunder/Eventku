<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>View Details</title>
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
        <div class="container mt-5">
            <div class="card p-4">
                <h5 class="fw-bold text-center mb-4">Detail Event</h5>
                <div class="confirmation-text">
                    <p><span>Nama Event :</span><span
                            id="confirmEventName">{{ $registration->event->nama_event }}</span></p>
                    <p><span>Nama Peserta :</span><span id="confirmName">{{ $registration->nama }}</span></p>
                    <p><span>Alamat :</span><span id="confirmAddress">{{ $registration->alamat }}</span></p>
                    <p><span>Harga :</span><span
                            id="confirmTicketPrice">Rp.{{ number_format($registration->harga_tiket, 0, ',', '.') }}</span>
                    </p>
                    <p><span>Lokasi Event :</span><span
                            id="confirmLocation">{{ $registration->event->lokasi_event }}</span></p>
                    <p><span>Tanggal :</span><span
                            id="confirmDate">{{ \Carbon\Carbon::parse($registration->event->tanggal)->isoFormat('d-m-Y') }}</span>
                    </p>
                </div>
                <div class="confirmation-text-left">
                    <p>*untuk melakukan pembayaran hubungi admin</p>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success w-100" id="waButton">
                        <svg width="20" height="20" viewBox="0 0 45 45" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_40_944)">
                                <path
                                    d="M32.805 26.9677C32.2411 26.6822 29.4947 25.342 28.9814 25.1508C28.4681 24.968 28.0955 24.8723 27.7214 25.4362C27.3558 25.9861 26.2786 27.2447 25.9495 27.6117C25.6205 27.9788 25.297 28.0069 24.7416 27.758C24.1777 27.4725 22.3762 26.8861 20.2373 24.968C18.5667 23.4816 17.4544 21.6506 17.1239 21.0867C16.7948 20.5298 17.0873 20.2148 17.3658 19.9364C17.6217 19.6805 17.9297 19.2923 18.2152 18.9548C18.4866 18.6173 18.5737 18.3909 18.772 18.0253C18.9548 17.6302 18.8606 17.3222 18.7214 17.0438C18.5822 16.7653 17.4614 14.0048 16.9931 12.9052C16.5459 11.8139 16.0777 11.9531 15.7331 11.9531C15.4111 11.9236 15.037 11.9236 14.6644 11.9236C14.2917 11.9236 13.6828 12.0628 13.1695 12.5972C12.6562 13.1611 11.2064 14.5083 11.2064 17.2336C11.2064 19.9659 13.2131 22.6097 13.4916 23.0048C13.777 23.3705 17.4389 28.9955 23.0569 31.4128C24.397 31.9767 25.4377 32.3142 26.2505 32.5927C27.5906 33.0173 28.8141 32.9583 29.7802 32.8191C30.8489 32.6433 33.0905 31.4634 33.5602 30.1458C34.0369 28.8197 34.0369 27.7214 33.8977 27.4725C33.7584 27.2166 33.3928 27.0773 32.8289 26.8284L32.805 26.9677ZM22.6167 40.7812H22.5872C19.2614 40.7812 15.9736 39.8798 13.102 38.1952L12.4284 37.793L5.39719 39.6239L7.28719 32.7825L6.83297 32.0794C4.97625 29.1266 3.9911 25.7096 3.99094 22.2216C3.99094 12.0122 12.3483 3.68437 22.6308 3.68437C27.6117 3.68437 32.2847 5.625 35.8003 9.14062C37.5345 10.8544 38.9101 12.8962 39.8468 15.1472C40.7836 17.3981 41.2628 19.813 41.2566 22.2511C41.2425 32.4534 32.8922 40.7812 22.6237 40.7812H22.6167ZM38.4736 6.46734C34.1958 2.33578 28.5708 0 22.5872 0C10.2459 0 0.196875 10.0055 0.189844 22.3017C0.189844 26.228 1.215 30.0586 3.17812 33.4491L0 45L11.88 41.902C15.1704 43.678 18.8495 44.6114 22.5886 44.6189H22.5956C34.9439 44.6189 44.993 34.6134 45 22.3088C45 16.3547 42.6783 10.7508 38.4455 6.53906L38.4736 6.46734Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_40_944">
                                    <rect width="45" height="45" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        Lanjutkan Pembayaran
                    </button>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const waButton = document.getElementById('waButton');

                waButton.addEventListener('click', function() {
                    // Get text content from HTML elements
                    const eventName = document.getElementById('confirmEventName').textContent;
                    const name = document.getElementById('confirmName').textContent;
                    const address = document.getElementById('confirmAddress').textContent;
                    const ticketPrice = document.getElementById('confirmTicketPrice').textContent;
                    const location = document.getElementById('confirmLocation').textContent;
                    const date = document.getElementById('confirmDate').textContent;

                    // Format message to Markdown style
                    const message = `*Detail Event*\n` +
                        `*Nama Event:* ${eventName}\n` +
                        `*Nama Peserta:* ${name}\n` +
                        `*Alamat:* ${address}\n` +
                        `*Harga:* ${ticketPrice}\n` +
                        `*Lokasi Event:* ${location}\n` +
                        `*Tanggal:* ${date}`;

                    // Create WhatsApp link with encoded message
                    const waLink = `https://wa.me/+6282255244513?text=${encodeURIComponent(message)}`;

                    // Redirect to WhatsApp
                    window.location.href = waLink;
                });
            });
        </script>
    </body>

</html>
