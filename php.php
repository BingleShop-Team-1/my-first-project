<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer.Fingerspot.iO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            color: #343a40;
            position: relative;
            overflow-x: hidden;
        }

        .navbar {
            background-color: #54a4f8;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        h2 {
            color: #070808;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            background-color: #ffffff;
        }

        table th {
            background-color: #54a4f8;
            color: #fff;
        }

        table td {
            color: #222020;
        }

        iframe {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #054c97;
            border-color: #054c97;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004494;
        }

        #logTable code {
            background-color: #f2f8f8;
            padding: 5px;
            display: block;
            border-radius: 5px;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
        }

        footer a {
            color: #007bff;
        }

        footer a:hover {
            color: #0056b3;
        }

        .snowflake {
            position: fixed;
            top: -10px;
            z-index: 1000;
            color: #007bff;
            font-size: 1.5em;
            user-select: none;
            pointer-events: none;
        }

        @keyframes fall {
            to {
                transform: translateY(100vh);
            }
        }

        .snowflake {
            animation: fall linear infinite;
        }

        .snowflake:nth-of-type(odd) {
            animation-duration: 15s;
        }

        .snowflake:nth-of-type(even) {
            animation-duration: 12s;
        }

        .snowflake:nth-of-type(3n) {
            animation-duration: 20s;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.2rem;
            }

            .container {
                margin-top: 10px;
            }

            iframe {
                height: 200px;
            }

            .table-responsive {
                overflow-x: auto;
            }

            footer {
                font-size: 12px;
            }
        }

        /* Chat Box Styles */
        #chatBox {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 300px;
            height: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #fff;
            display: none;
            flex-direction: column;
            display: flex;
        }

        #chatHeader {
            background: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #chatHeader span {
            flex: 1;
        }

        #endChatButton {
            background: transparent;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        #chatMessages {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            border-top: 1px solid #ccc;
        }

        #chatMessages .chatMessage {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 10px;
            background: #f1f1f1;
        }

        #chatMessages .user-message {
            background: #007bff;
            color: #fff;
            align-self: flex-end;
        }

        #chatMessages .bot-message {
            background: #e1e1e1;
            color: #333;
            align-self: flex-start;
        }

        #chatInputSection {
            border-top: 1px solid #ccc;
            display: flex;
            padding: 10px;
        }

        #chatInputSection input {
            flex: 1;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        #chatInputSection button {
            border: none;
            background: #007bff;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 10px;
        }

        #chatIcon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #007bff;
            color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Snowflakes -->
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>
    <div class="snowflake">❄</div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Webhook Developer Fingerspot.iO</a>
        <form id="excelFileForm" class="form-inline ml-auto" enctype="multipart/form-data">
            <input type="file" id="excelFile" name="file" class="form-control mr-2" accept=".xlsx, .xls" required>
            <button type="submit" class="btn btn-primary">Unggah Excel</button>
        </form>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- How it works Section -->
        <h2>Bagaimana Cara Kerjanya?</h2>
        <div class="row">
            <div class="col-md-8">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/9EL1C_-akvQ" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <img src="https://mentorit.com.np/wp-content/uploads/2016/10/red-hat-enterprise-linux-workstation-standard-subscription-rh0958488f3-redhat-0g559-1.jpg" alt="Ilustrasi" class="img-fluid rounded shadow-sm" />
                <p class="mt-3">Pelajari bagaimana webhook bekerja melalui video tutorial dan panduan komprehensif kami. Pastikan integrasi Anda lancar dan efisien.</p>
            </div>
        </div>

        <!-- Logs Section -->
        <h2 class="mt-5">Log</h2>
        <div class="table-responsive">
            <table id="logTable" class="display">
                <thead>
                    <tr>
                        <th>ID Cloud</th>
                        <th>Jenis</th>
                        <th>Dibuat Pada</th>
                        <th>Data Asli</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Log akan ditambahkan di sini -->
                </tbody>
            </table>
        </div>

        <!-- Export Button -->
        <button id="exportLogs" class="btn btn-success mt-3">Ekspor Log ke Excel</button>
    </div>

    <!-- Chat Icon -->
    <div id="chatIcon">💬</div>

    <!-- Chat Box -->
    <div id="chatBox">
        <div id="chatHeader">
            <span>Chat Support</span>
            <button id="endChatButton">×</button>
        </div>
        <div id="chatMessages">
            <!-- Pesan chat akan ditambahkan di sini -->
        </div>
        <div id="chatInputSection">
            <input type="text" id="chatInput" placeholder="Ketik pesan...">
            <button id="sendMessage">Kirim</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Developer.Fingerspot.iO. <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a></p>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.6/xlsx.full.min.js"></script>
     <!-- jQuery and Bootstrap JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <!-- Socket.IO -->
    <script src="/socket.io/socket.io.js"></script>
    <script>
        $(document).ready(function () {
            const socket = io();

            // Initialize DataTable
            let table = $('#logTable').DataTable({
                "order": [[2, "desc"]] // Urutkan berdasarkan kolom 'Created At' secara menurun
            });

            // Listener for 'newData' event
            socket.on('update', function (newData) {
                // Add new row to DataTable
                table.row.add([
                    newData.cloud_id || 'N/A',
                    newData.type || 'N/A',
                    newData.created_at || 'N/A',
                    `<code>${newData.original_data || 'N/A'}</code>`
                ]).draw();

                // Re-sort the table to ensure the latest entry is on top
                table.order([[2, 'desc']]).draw();

                // Notifikasi pop-up
                alert('Halo ada data masuk!');
            });

            // Fetch logs from server and display them
            $.getJSON('/log', function (logs) {
                logs.forEach(log => {
                    table.row.add([
                        log.cloud_id || 'N/A',
                        log.type || 'N/A',
                        log.created_at || 'N/A',
                        `<code>${log.original_data || 'N/A'}</code>`
                    ]).draw();
                });

                // Sort after data is loaded
                table.order([[2, 'desc']]).draw();
            }).fail(function (jqXHR, textStatus, errorThrown) {
                // Handle errors
                console.error('Error fetching logs:', textStatus, errorThrown);
                table.clear().rows.add([['Failed to fetch logs', '', '', '']]).draw();
            });

            // Handle file upload
            $('#excelFileForm').on('submit', function (event) {
                event.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '/upload-excel',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        alert(response.message);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Error uploading file');
                        console.error('Upload error:', textStatus, errorThrown);
                    }
                });
            });

            // Export Logs to Excel
            $('#exportLogs').click(function () {
                window.location.href = '/export-logs';
            });

            // Menampilkan dan menyembunyikan chatbox
            $('#chatIcon').on('click', function () {
                $('#chatBox').toggle();
            });

            $('#endChatButton').on('click', function () {
                $('#chatBox').hide();
            });

            // Listener for 'notification' event
            socket.on('notification', (data) => {
                console.log('Notifikasi diterima dari server:', data);

                // Display notification on the web page
                alert(`Notifikasi: ${JSON.stringify(data)}`);
            });

            // Function to send notification to the server
            function sendNotification(data) {
                socket.emit('notification', data);
            }

            // Mengirim pesan chat
            // Chat functionality
            const chatBox = document.getElementById('chatBox');
            const chatHeader = document.getElementById('chatHeader');
            const chatBody = document.getElementById('chatBody');
            const messageInput = document.getElementById('messageInput');
            const sendButton = document.getElementById('sendButton');
            const minimizeButton = document.querySelector('#chatHeader .minimize-btn');
            const chatIcon = document.getElementById('chatIcon');

            chatHeader.addEventListener('click', () => {
                chatBox.style.display = chatBox.style.display === 'none' ? 'flex' : 'none';
            });

            minimizeButton.addEventListener('click', () => {
                chatBox.style.display = 'none';
            });

            chatIcon.addEventListener('click', () => {
                chatBox.style.display = chatBox.style.display === 'none' ? 'flex' : 'none';
            });

            sendButton.addEventListener('click', () => {
                const message = messageInput.value;
                if (message) {
                    socket.emit('chatMessage', message);
                    messageInput.value = '';
                    chatBody.innerHTML += `<div class="user-message">${message}</div>`;
                    chatBody.scrollTop = chatBody.scrollHeight; // Scroll ke bagian bawah
                }
            });
                    // Listen for chat messages from the server (e.g., from Telegram bot)
            socket.on('telegramMessage', (message) => {
                console.log('Pesan dari bot Telegram diterima:', message);
                chatBody.innerHTML += `<div class="bot-message">${message}</div>`;
                chatBody.scrollTop = chatBody.scrollHeight; // Scroll ke bagian bawah
            });



            
        });
    </script>
</body>

</html>