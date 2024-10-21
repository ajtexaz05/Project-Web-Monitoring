<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-/assets-path="/assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>STMKG</title>

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
                            <div class="col-md-6 col-lg-6 d-flex"> <!-- Added d-flex class -->
                                <div class="card mb-3 flex-fill"> <!-- Added flex-fill class -->
                                    <div class="card-body text-nowrap">
                                        <h3 class="card-title mb-4 flex-wrap text-nowrap">Current PGA & MMI</h3>
                                        <div class="row text-center align-item-center">
                                            <div class="col-md-6 mt-10">
                                                <p class="mb-2">PGA Saat Ini :</p>
                                                <h1 class="text-primary mb-4" id="mmi-value">{{ $data->data }}
                                                    cm/s<sup>2</sup>
                                                </h1>
                                            </div>
                                            <div class="col-md-6 mt-10">
                                                <p class="mb-2">MMI Saat Ini :</p>
                                                <h1 class="text-primary mb-4" id="mmi-value">
                                                    {{ strtoupper($data->mmi) }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 d-flex"> <!-- Added d-flex class -->
                                <div class="card mb-3 flex-fill"> <!-- Added flex-fill class -->
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h3 class="huge mt-0 mb-0 ">MMI Scale</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="accordion mt-0" id="accordionExample">

                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button type="button" class="accordion-button collapsed"
                                                                data-bs-toggle="collapse" data-bs-target="#accordionTwo"
                                                                aria-expanded="false" aria-controls="accordionTwo">
                                                                I-II
                                                            </button>
                                                        </h2>
                                                        <div id="accordionTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <b>TIDAK DIRASAKAN (Not Felt)</b>
                                                                Tidak dirasakan atau dirasakan hanya oleh beberapa orang
                                                                tetapi terekam oleh alat.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button type="button" class="accordion-button collapsed"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#accordionThree" aria-expanded="false"
                                                                aria-controls="accordionThree">
                                                                III-V
                                                            </button>
                                                        </h2>
                                                        <div id="accordionThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <b>DIRASAKAN (Felt)</b>
                                                                Dirasakan oleh orang banyak tetapi tidak menimbulkan
                                                                kerusakan. Benda-benda ringan yang digantung bergoyang
                                                                dan jendela kaca bergetar.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button type="button" class="accordion-button collapsed"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#accordionFour" aria-expanded="false"
                                                                aria-controls="accordionFour">
                                                                VI
                                                            </button>
                                                        </h2>
                                                        <div id="accordionFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <b>KERUSAKAN RINGAN (Slight Damage)</b>
                                                                Bagian non struktur bangunan mengalami kerusakan ringan,
                                                                seperti retak rambut pada dinding, genteng bergeser ke
                                                                bawah dan sebagian berjatuhan.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button type="button" class="accordion-button collapsed"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#accordionFour" aria-expanded="false"
                                                                aria-controls="accordionFour">
                                                                VII-VIII
                                                            </button>
                                                        </h2>
                                                        <div id="accordionFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <b>KERUSAKAN SEDANG (Moderate Damage)</b>
                                                                Banyak Retakan terjadi pada dinding bangunan sederhana,
                                                                sebagian roboh, kaca pecah. Sebagian plester dinding
                                                                lepas. Hampir sebagian besar genteng bergeser ke bawah
                                                                atau jatuh. Struktur bangunan mengalami kerusakan ringan
                                                                sampai sedang.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button type="button" class="accordion-button collapsed"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#accordionFour" aria-expanded="false"
                                                                aria-controls="accordionFour">
                                                                IX-XII
                                                            </button>
                                                        </h2>
                                                        <div id="accordionFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <b>KERUSAKAN BERAT (Heavy Damage)</b>
                                                                Sebagian besar dinding bangunan permanen roboh. Struktur
                                                                bangunan mengalami kerusakan berat. Rel kereta api
                                                                melengkung.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="row gy-2">
                            <div class="col-xl-12 col-md-12 mt-8">
                                <div class="card p-0">
                                    <div class="card-header">
                                        <div class="d-flex">
                                            <h4 class="mb-0 mt-0">Acceleration</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="nsChart" style="width:100%;height: 200px;"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="ewChart" style="width:100%;height: 200px;"></canvas>
                                    </div>

                                </div>
                                <!-- / Content -->

                                <!-- Footer -->
                                <footer class="content-footer footer bg-footer-theme">
                                    <div class="container-xxl">
                                        <div
                                            class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                            <div class="text-body mb-2 mb-md-0">
                                                ©
                                                <script>
                                                    document.write(new Date().getFullYear());
                                                </script>
                                                Sekolah Tinggi Meteorologi Klimatologi dan Geofisika
                                            </div>

                                        </div>
                                    </div>
                                </footer>
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

                    // Initialize the chart
                    // Initialize the nsChart without any animation
                    // Initialize the nsChart to resemble seismic signal
                    const nsChart = new Chart("nsChart", {
                        type: "line",
                        data: {
                            datasets: [{
                                data: [],
                                borderColor: "green", // Seismic signals are often displayed in black or dark colors
                                borderWidth: 2, // Make the line thicker for better visibility
                                fill: false,
                                tension: 0.3, // Add tension for smoother curves, simulating a waveform
                                pointRadius: 0 // Remove point markers
                            }]
                        },
                        options: {
                            animation: false, // Disable animation for all updates and rendering
                            plugins: {
                                legend: {
                                    display: false // Turn off the legend
                                },
                                tooltip: { // Added tooltip configuration
                                    enabled: true, // Enable tooltips
                                    mode: 'index', // Show tooltip for all datasets at the hovered index
                                    intersect: false, // Allow tooltips to show when hovering over the line
                                    callbacks: {
                                        label: function(tooltipItem) {
                                            return `Value: ${tooltipItem.raw}`; // Customize label display
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    display: false, // Hide the x-axis
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'North - South'
                                    },
                                    suggestedMin: 1,
                                    suggestedMax: 10,
                                    grid: {
                                        color: "rgba(0, 0, 0, 0.1)", // Lighten horizontal gridlines
                                        lineWidth: 1 // Thinner gridlines
                                    }
                                }
                            }
                        }
                    });

                    // Initialize the ewChart to resemble seismic signal
                    const ewChart = new Chart("ewChart", {
                        type: "line",
                        data: {
                            datasets: [{
                                data: [],
                                borderColor: "red", // Use red for EW seismic signal for contrast
                                borderWidth: 2,
                                fill: false,
                                tension: 0.3, // Smooth curves to simulate a waveform
                                pointRadius: 0 // Remove point markers
                            }]
                        },
                        options: {
                            animation: false, // Disable animation for all updates and rendering
                            plugins: {
                                legend: {
                                    display: false // Turn off the legend
                                },
                                tooltip: { // Added tooltip configuration
                                    enabled: true, // Enable tooltips
                                    mode: 'index', // Show tooltip for all datasets at the hovered index
                                    intersect: false, // Allow tooltips to show when hovering over the line
                                    callbacks: {
                                        label: function(tooltipItem) {
                                            return `Value: ${tooltipItem.raw}`; // Customize label display
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    display: false, // Hide the x-axis
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'East - West'
                                    },
                                    suggestedMin: 1,
                                    suggestedMax: 10,
                                    grid: {
                                        color: "rgba(0, 0, 0, 0.1)", // Light horizontal gridlines
                                        lineWidth: 1
                                    }
                                }
                            }
                        }
                    });



                    // Update fetchData function to include ew data
                    function fetchData() {
                        fetch('/getData')
                            .then(response => response.json())
                            .then(newData => {
                                // Clear previous data
                                updatedAt.length = 0;
                                ns.length = 0;
                                ew.length = 0;

                                // Loop through the latest 100 entries
                                newData.slice(0, 100).forEach(entry => { // Changed from 50 to 100
                                    const time = new Date(entry.updated_at).toLocaleTimeString('en-GB', {
                                        hour: '2-digit',
                                        minute: '2-digit',
                                        second: '2-digit',
                                        hour12: false
                                    }); // Extract time in 24-hour format with seconds
                                    updatedAt.push(time); // Use the time for x-axis
                                    ns.push(entry.acceleration_ns); // Use the data for y-axis
                                    ew.push(entry.acceleration_ew); // Added ew data for y-axis
                                });

                                // Reverse the order of the arrays to display oldest data on the left();
                                updatedAt.reverse();
                                ns.reverse();
                                ew.reverse(); // Reverse ew data

                                // Update the chart with new data
                                nsChart.data.labels = updatedAt;
                                nsChart.data.datasets[0].data = ns;
                                ewChart.data.labels = updatedAt; // Update ewChart labels
                                ewChart.data.datasets[0].data = ew; // Update ewChart data
                                nsChart.update(); // Refresh the nsChart
                                ewChart.update(); // Refresh the ewChart
                            })
                            .catch(error => console.error('Error fetching data:', error)); // Handle fetch errors
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
