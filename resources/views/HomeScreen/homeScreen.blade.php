<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-/assets-path="/assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>STMKG</title>

    <style>
        /* Style for the pop-up message */
        #popup {
            display: none;
            /* Initially hidden */
            position: fixed;
            top: 50%;
            left: 50%;
            width: 1000px;
            height: 600px;
            background-color: red;
            color: white;
            padding: 15px;
            border-radius: 20px;
            /* Rounded corners */
            z-index: 1000;
            transform: translate(-50%, -50%);
            /* Center the pop-up */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            /* Add shadow for visual effect */

            /* Flexbox settings */
            /* display: flex; */
            justify-content: center;
            align-items: center;
            text-align: center;
            /* Center text inside pop-up */

            /* Ensure the content doesn't grow unexpectedly */
            flex-direction: column;
            overflow: hidden;
            font-size: 24px;
            /* Increase font size for visibility */
        }

        /* General header styles */
        header {
            display: flex;
            justify-content: space-between;
            /* Space out the columns */
            align-items: center;
            /* Center items vertically */
            height: 70px;
            background-color: #ff8e2b;
            padding: 0 20px;
            /* Add some padding to left and right */
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1);
            /* Add a subtle shadow */
        }

        /* Left section (time) */
        .header-left {
            flex: 1;
            /* Make sure each section takes its share of space */
            text-align: left;
            /* Align time to the left */
            font-size: 18px;
            /* Adjust the size of the time */
        }

        /* Center section (header title) */
        .header-center {
            flex: 2;
            /* Larger space for the title */
            text-align: center;
        }

        .header-center h1 {
            margin: 0;
            /* Remove default margin from h1 */
            font-size: 24px;
            color: white;
            /* Change text color */
        }

        /* Right section (logos) */
        .header-right {
            flex: 1;
            display: flex;
            justify-content: flex-end;
            /* Align logos to the right */
        }

        .logo {
            height: 50px;
            /* Adjust size of logos */
            margin-left: 10px;
            /* Add some spacing between the logos */
        }

        /* Added style for the popup image */
        #popup img {
            width: 13%;
            /* Set the width of the image */
            max-width: 300px;
            /* Optional: Set a maximum width */
        }
    </style>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/STMKGLogo.PNG" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/assets/vendor/fonts/remixicon/remixicon.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
</head>

<body>

    {{-- Header --}}
    <header class="px-5">
        <div class="header-left" style="display: flex; align-items: center; height: 100%;">
            <div>
                <p id="date" class="text-white mb-0">22 Oktober 2024</p>
                <p id="time" style="color: white;">18:55:05 WIB</p>
            </div>
        </div>
        <div class="header-center">
            <h1>INSTRUMENTASI-MKG</h1>
        </div>

        <div class="header-right">
            <img src="{{ asset('assets/img/logo/LogoBMKG.png') }}" alt="Logo BMKG" class="logo">
            <img src="{{ asset('assets/img/logo/LogoSTMKG.png') }}" alt="Logo STMKG" class="logo">
        </div>
    </header>
    {{-- Header --}}

    {{-- Pop Upnya --}}
    <div id="popup">
        <img class="mb-6" src="/assets/img/danger.png" alt="">
        <h1 class="text-white mb-3">PERINGATAN!!</h1>
        <h2 class="text-white mb-3">Terjadi Gempa Besar, Lindungi Diri Anda!</h2>
        <h3 class="text-white">Skala MMI : <span id="alertMMI">{{ strtoupper($data->mmi) }}</span></h3>
    </div>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->


            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->



                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-4 container-p-y">
                        <div class="row gy-2">
                            <!-- Congratulations card -->
                            <div class="col-md-12 col-lg-12 d-flex"> <!-- Added d-flex class -->
                                <div class="card mb-3 flex-fill"> <!-- Added flex-fill class -->
                                    <div class="card-body text-nowrap">
                                        <div style="
                                                width:1350px;
                                                height:3px; 
                                                text-align:center;
                                            ">
                                            <!-- <h3 class="card-title mt-5 mb-5 flex-wrap text-nowrap">Time</h3>
                                            <p id="date" class="text-black mb-0">22 Oktober 2024</p>
                                            <p id="time" style="color: black;">18:55:05 WIB</p> -->
                                            <h3 class="card-title mb-4 flex-wrap text-nowrap">Current PGA & MMI</h3>
                                        </div>
                                        <div class="row text-center align-item-center">
                                            <div class="col-md-6 mt-10">
                                                <p class="mb-5">PGA Saat Ini :</p><br>
                                                <h1 class="mb-4" id="pga-value" style="color: #00448d; font-size:50px;">{{ $data->data }}
                                                    cm/s<sup>2</sup>
                                                </h1>
                                            </div>
                                            <div class="col-md-6 mt-10">
                                                <p class="mb-2">MMI Saat Ini :</p><br><br>
                                                <h1 class="mb-4 fw-bolder" id="mmi-value" style="color: #00448d; font-size:80px;">
                                                    {{ strtoupper($data->mmi) }}
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row gy-2">
                            <div class="col-xl-12 col-md-12 mt-2">
                                <div class="card p-0">
                                    <div class="card-header">
                                        <div class="d-flex">
                                            <h4 class="mb-0 mt-0">Acceleration</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="nsChart" style="width:100%;height: 180px;"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="ewChart" style="width:100%;height: 180px;"></canvas>
                                    </div>

                                </div>
                                <!-- / Content -->

                                <!-- Footer -->
                                <!-- <footer class="content-footer footer bg-footer-theme">
                                    <div class="container-xxl">
                                        <div
                                            class="footer-container d-flex align-items-center justify-content-between pt-10 flex-md-row flex-column">
                                            <div class="text-body mb-2 mb-md-0">
                                                ©
                                                <script>
                                                    document.write(new Date().getFullYear());
                                                </script>
                                                Sekolah Tinggi Meteorologi Klimatologi dan Geofisika
                                            </div>

                                        </div>
                                    </div>
                                </footer> -->
                                <!-- / Footer -->

                                <div class="content-backdrop fade"></div>
                            </div>
                            <!-- Content wrapper -->
                        </div>
                        <!-- / Layout page -->
                    </div>

                    <!-- Overlay -->
                    <div class="layout-overlay layout-menu-toggle"></div>
                </div>
                <!-- / Layout wrapper -->



                <!-- Core JS -->
                <!-- build:js /assets/vendor/js/core.js -->
                <script src="/assets/vendor/libs/jquery/jquery.js"></script>
                <script src="/assets/vendor/libs/popper/popper.js"></script>
                <script src="/assets/vendor/js/bootstrap.js"></script>
                <script src="/assets/vendor/libs/node-waves/node-waves.js"></script>
                <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
                <script src="/assets/vendor/js/menu.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ns = [];
                    const ew = [];
                    const updatedAt = [];

                    const pgaValue = document.getElementById('pga-value');
                    const mmiValue = document.getElementById('mmi-value');
                    const popup = document.getElementById('popup');
                    const alertMMI = document.getElementById('alertMMI');

                    let popupShownTime;
                    let lastHighMMI;

                    // Function to update the date
                    function updateDate() {
                        const now = new Date();
                        const options = {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            weekday: 'long'
                        };
                        const currentDate = now.toLocaleDateString('id-ID', options);
                        document.getElementById('date').textContent = currentDate;
                    }

                    // Initialize the date display when the page loads
                    updateDate();

                    const nsChart = new Chart("nsChart", {
                        type: "line",
                        data: {
                            datasets: [{
                                data: [],
                                borderColor: "green",
                                borderWidth: 2,
                                fill: false,
                                tension: 0.3,
                                pointRadius: 0
                            }]
                        },
                        options: {
                            animation: false,
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    enabled: true,
                                    mode: 'index',
                                    intersect: false,
                                    callbacks: {
                                        label: function(tooltipItem) {
                                            return `Value: ${tooltipItem.raw}`;
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    display: false
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'North - South'
                                    },
                                    suggestedMin: 1,
                                    suggestedMax: 10,
                                    grid: {
                                        color: "rgba(0, 0, 0, 0.1)",
                                        lineWidth: 1
                                    }
                                }
                            }
                        }
                    });

                    const ewChart = new Chart("ewChart", {
                        type: "line",
                        data: {
                            datasets: [{
                                data: [],
                                borderColor: "red",
                                borderWidth: 2,
                                fill: false,
                                tension: 0.3,
                                pointRadius: 0
                            }]
                        },
                        options: {
                            animation: false,
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    enabled: true,
                                    mode: 'index',
                                    intersect: false,
                                    callbacks: {
                                        label: function(tooltipItem) {
                                            return `Value: ${tooltipItem.raw}`;
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    display: false
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'East - West'
                                    },
                                    suggestedMin: 1,
                                    suggestedMax: 10,
                                    grid: {
                                        color: "rgba(0, 0, 0, 0.1)",
                                        lineWidth: 1
                                    }
                                }
                            }
                        }
                    });

                    function updateTime() {
                        const now = new Date();
                        const hours = String(now.getHours()).padStart(2, '0');
                        const minutes = String(now.getMinutes()).padStart(2, '0');
                        const seconds = String(now.getSeconds()).padStart(2, '0');
                        const currentTime = `${hours}:${minutes}:${seconds}`;
                        document.getElementById('time').textContent = currentTime;
                    }

                    // Update the time every second
                    setInterval(updateTime, 1000);
                    updateTime();

                    function showPopup() {
                        popup.style.display = 'flex';
                        popupShownTime = Date.now();
                    }

                    function closePopup() {
                        const timeSinceShown = Date.now() - popupShownTime;
                        if (timeSinceShown >= 5000) {
                            popup.style.display = 'none';
                        } else {
                            setTimeout(closePopup, 5000 - timeSinceShown);
                        }
                    }

                    function fetchData() {
                        fetch('/getData')
                            .then(response => response.json())
                            .then(newData => {
                                updatedAt.length = 0;
                                ns.length = 0;
                                ew.length = 0;

                                newData.slice(0, 100).forEach(entry => {
                                    const time = new Date(entry.updated_at).toLocaleTimeString('en-GB', {
                                        hour: '2-digit',
                                        minute: '2-digit',
                                        second: '2-digit',
                                        hour12: false
                                    });
                                    updatedAt.push(time);
                                    ns.push(entry.acceleration_ns);
                                    ew.push(entry.acceleration_ew);
                                });

                                updatedAt.reverse();
                                ns.reverse();
                                ew.reverse();

                                nsChart.data.labels = updatedAt;
                                nsChart.data.datasets[0].data = ns;
                                ewChart.data.labels = updatedAt;
                                ewChart.data.datasets[0].data = ew;
                                nsChart.update();
                                ewChart.update();

                                const lastEntry = newData[0];
                                pgaValue.textContent = `${lastEntry.data} cm/s²`;
                                mmiValue.textContent = `${lastEntry.mmi.toUpperCase()}`;

                                const highMMI = ['vi', 'vii', 'viii', 'ix', 'x', 'xi', 'xii'];
                                if (highMMI.includes(lastEntry.mmi)) {
                                    if (!popup.style.display || popup.style.display === 'none') {
                                        lastHighMMI = lastEntry.mmi.toUpperCase();
                                        alertMMI.textContent = lastHighMMI;
                                        showPopup();
                                    } else {
                                        lastHighMMI = lastEntry.mmi.toUpperCase();
                                        alertMMI.textContent = lastHighMMI;
                                    }
                                } else {
                                    const timeSinceShown = Date.now() - popupShownTime;
                                    if (timeSinceShown >= 5000) {
                                        closePopup();
                                    }
                                }
                            })
                            .catch(error => console.error('Error fetching data:', error));
                    }

                    // Fetch data every 2 seconds
                    setInterval(fetchData, 2000);
                </script>


                <!-- endbuild -->

                <!-- Vendors JS -->
                <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

                <!-- Main JS -->
                <script src="/assets/js/main.js"></script>

                <!-- Page JS -->
                <script src="/assets/js/dashboards-analytics.js"></script>

                <!-- Place this tag before closing body tag for github widget button. -->
                <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>