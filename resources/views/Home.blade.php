<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Gempa dan Tsunami</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Monitoring MMI dan Data Sensor</h1>

        <!-- Tampilan MMI -->
        <div class="mmi-display">
            <h2>Tampilan MMI</h2>
            <div class="mmi-list" id="mmi-list">
                <h3>Data MMI</h3>
            </div>
        </div>

        <!-- Tampilan Data Sensor -->
        <div class="sensor-display">
            <h2>Tampilan Data Sensor</h2>
            <div class="sensor-list" id="sensor-list">
                <h3>Data Sensor</h3>
            </div>
        </div>
    </div>

    <script>
        // Script untuk mengambil MMI dan Data Sensor
        function loadMmiData() {
            fetch('/api/mmi') // Ubah sesuai dengan rute API yang kamu gunakan
                .then(response => response.json())
                .then(data => {
                    const mmiList = document.getElementById('mmi-list');
                    mmiList.innerHTML = ''; // Bersihkan daftar sebelumnya
                    data.forEach(item => {
                        const div = document.createElement('div');
                        div.className = 'mmi-item';
                        div.innerText = `MMI: ${item.mmi}`; // Ubah sesuai dengan struktur data API
                        mmiList.appendChild(div);
                    });
                });
        }

        function loadSensorData() {
            fetch('/api/sensor-data') // Ubah sesuai dengan rute API yang kamu gunakan
                .then(response => response.json())
                .then(data => {
                    const sensorList = document.getElementById('sensor-list');
                    sensorList.innerHTML = ''; // Bersihkan daftar sebelumnya
                    data.forEach(item => {
                        const div = document.createElement('div');
                        div.className = 'sensor-item';
                        div.innerText = `Nilai Sensor: ${item.sensor_value}`; // Ubah sesuai dengan struktur data API
                        sensorList.appendChild(div);
                    });
                });
        }

        // Memuat data saat halaman pertama kali dimuat
        loadMmiData();
        loadSensorData();
    </script>
</body>
</html>
