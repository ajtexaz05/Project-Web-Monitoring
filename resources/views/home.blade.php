<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-/assets-path="/assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>STMKG</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/STMKGLogo.PNG" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
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
                <div class="col-md-20 col-lg-6 h-auto">
                  <div class="card">
                    <div class="card-body text-nowrap">
                      <h3 class="card-title mb-4 flex-wrap text-nowrap">Current MMI</h3>
                      <p class="mb-2">Lorem Ipsum</p>
                      <h1 class="text-primary mb-4" id="mmi-value">{{ $data->data }}</h1>
                      <div class="alert alert-warning" id="alert-warning" role="alert" style="display: none;">
                          Peringatan! MMI di atas normal!
                      </div>
                      <div class="alert alert-danger" id="alert-danger" role="alert" style="display: none;">
                          Peringatan! MMI sangat tinggi!
                      </div>
                      <div class="alert alert-success" id="alert-success" role="alert" style="display: none;">
                          MMI Normal
                      </div>
                      
                      <!-- Elemen audio untuk suara peringatan -->
                      <audio id="warning-sound" src="/assets/sound/alert-warning.mp3" preload="auto"></audio>
                      <audio id="danger-sound" src="/assets/sound/alert-danger.mp3" preload="auto"></audio>
              
                      <!-- Tombol untuk memicu suara -->
                      <button id="check-mmi" class="btn btn-primary mt-3">Cek MMI</button>
                  </div>
              
                  
                  <script>
                    const mmiValue = parseFloat(document.getElementById('mmi-value').innerText);
                    const alertWarning = document.getElementById('alert-warning');
                    const alertDanger = document.getElementById('alert-danger');
                    const alertSuccess = document.getElementById('alert-success');
                    const warningSound = document.getElementById('warning-sound');
                    const dangerSound = document.getElementById('danger-sound');
            
                    let hasInteracted = false;
                    let soundInterval; // Variabel untuk menyimpan interval
            
                    function checkMMI() {
                        if (mmiValue >= 10.0) {
                            alertDanger.style.display = 'block'; // Menampilkan peringatan bahaya
                            alertWarning.style.display = 'none';  // Menyembunyikan peringatan warning
                            alertSuccess.style.display = 'none';   // Menyembunyikan peringatan sukses
                            if (hasInteracted) {
                                dangerSound.play(); // Memutar suara bahaya
                            }
                            // Mengatur interval untuk memutar suara setiap detik
                            if (!soundInterval) {
                                soundInterval = setInterval(() => dangerSound.play(), 1000);
                            }
                        } else if (mmiValue >= 7.0) {
                            alertWarning.style.display = 'block';  // Menampilkan peringatan warning
                            alertDanger.style.display = 'none';     // Menyembunyikan peringatan bahaya
                            alertSuccess.style.display = 'none';    // Menyembunyikan peringatan sukses
                            if (hasInteracted) {
                                warningSound.play(); // Memutar suara peringatan
                            }
                            // Mengatur interval untuk memutar suara setiap detik
                            if (!soundInterval) {
                                soundInterval = setInterval(() => warningSound.play(), 1000);
                            }
                        } else {
                            alertWarning.style.display = 'none';    // Menyembunyikan peringatan warning
                            alertDanger.style.display = 'none';      // Menyembunyikan peringatan bahaya
                            alertSuccess.style.display = 'block';    // Menampilkan peringatan sukses
                            clearInterval(soundInterval); // Menghentikan interval suara
                            soundInterval = null; // Reset interval
                        }
                    }
            
                    // Memeriksa MMI saat halaman dimuat
                    window.addEventListener('load', () => {
                        checkMMI(); // Memeriksa MMI saat halaman dimuat
                    });
            
                    // Menangani interaksi pengguna
                    document.getElementById('check-mmi').addEventListener('click', () => {
                        hasInteracted = true; // Menandai bahwa pengguna telah berinteraksi
                        checkMMI(); // Memeriksa MMI saat tombol diklik 
                    });
                </script>
                  
                    
                    
                  </div>
                  
                  <div class="card mt-5">
                    <div class="card-header">
                      <div class="d-flex align-items-center">
                        <h3 class="huge mt-0 mb-0 " >MMI Scale</h3>
                        
                      </div>
                    </div>
                    <div class="card-body pt-lg-1">
                      <div class="row">
                        <div class="col-md">
                          <div class="accordion mt-0" id="accordionExample">
                            
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionTwo"
                                  aria-expanded="false"
                                  aria-controls="accordionTwo">
                                  Accordion Item 2
                                </button>
                              </h2>
                              <div
                                id="accordionTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                                  dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                                  Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionThree"
                                  aria-expanded="false"
                                  aria-controls="accordionThree">
                                  Accordion Item 3
                                </button>
                              </h2>
                              <div
                                id="accordionThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                                  gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                                  dragée caramels. Ice cream wafer danish cookie caramels muffin.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionFour"
                                  aria-expanded="false"
                                  aria-controls="accordionFour">
                                  Accordion Item 4
                                </button>
                              </h2>
                              <div
                                id="accordionFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                                  gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                                  dragée caramels. Ice cream wafer danish cookie caramels muffin.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!--/ Congratulations card -->
                <!-- Weekly Overview Chart -->
                <div class="col-xl-6 col-md-6">
                  <div class="card p-0">
                    <div class="card-header">
                      <div class="d-flex">
                        <h4 class="mb-0 mt-0" >Last PGA</h4>
                        
                      </div>
                    </div>
                    <div class="card-body">
                      <canvas id="myChart" style="width:100%;height: 200px;"></canvas>

                      <div class="mt-1 mt-md-1">
                        
                        <div class="d-grid mt-1 mt-md-1">
                          <button class="btn btn-primary" type="button">Download</button>
                        </div>
                      </div>
                      <div class="card-header">
                        <div class="d-flex justify-content-between">
                          <h4 class="mb-0" >Last Huge MMI</h4>
                          
                        </div>
                      </div>
                      <canvas id="myChart2" style="width:100%;height: 200px;"></canvas>

                    </div>
                  </div>
                </div>
                <!--/ Weekly Overview Chart last-->

                <!-- Transactions -->
               

               

                <!-- Total Earnings -->
               
                <!--/ Total Earnings -->

                <!-- Four Cards -->
                
                
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
                    Sekolah Tinggi Meteorologi Klimatologi dan Geofisika</div>
                  
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
      const data = []; // Initialize an array to hold fetched data
      const xValues = []; // Initialize an array for x-axis values

      // Initialize the chart
      const myChart = new Chart("myChart", {
        type: "line",
        data: {
          labels: xValues,
          datasets: [{ 
            data: [], // Start with an empty dataset
            borderColor: "blue",
            fill: false
          }]
        },
        options: {
          plugins: {
            legend: {
              display: false // Turn off the legend
            }
          },
          scales: {
            x: {
              title: {
                display: false // Turn off the x-axis title
              }
            },
            y: {
              title: {
                display: true,
                text: 'Skala MMI'
              },
              suggestedMin: 1, // Minimum MMI
              suggestedMax: 10 // Maksimum MMI
            }
          }
        }
      });

      function fetchData() {
        fetch('/getData')
          .then(response => response.json())
          .then(newData => {
            // Clear previous data
            xValues.length = 0;
            data.length = 0;

            // Loop through the latest 10 entries
            newData.slice(0, 10).forEach(entry => {
              xValues.push(entry.updated_at); // Use the updated_at for x-axis
              data.push(entry.data); // Use the data for y-axis
            });

            // Reverse the order of the arrays to display oldest data on the left
            xValues.reverse();
            data.reverse();

            // Update the chart with new data
            myChart.data.labels = xValues;
            myChart.data.datasets[0].data = data;
            myChart.update(); // Refresh the chart
          })
          .catch(error => console.error('Error fetching data:', error)); // Handle fetch errors
      }

      // Fetch data every 2 seconds
      setInterval(fetchData, 2000);

      new Chart("myChart", {
        type: "line",
        data: {
          labels: xValues,
          datasets: [{ 
            data: [], // Start with an empty dataset
            borderColor: "blue",
            fill: false
          }]
        },
        options: {
          legend: {display: false},
          scales: {
            x: {
              title: {
                display: false,
                text: 'Tanggal'
              }
            },
            y: {
              title: {
                display: true,
                text: 'Skala MMI'
              },
              suggestedMin: 1, // Minimum MMI
              suggestedMax: 10 // Maksimum MMI
            }
          }
        }
      });
</script>

<script>
  var dates = ["01-Jan", "01-Feb", "01-Mar", "01-Apr", "01-May"];
  var mmiValues = [9, 8, 7, 2, 11];
  
  // Tentukan warna untuk setiap nilai MMI
  var barColors = mmiValues.map(value => {
    return value === Math.max(...mmiValues) ? "rgba(0,0,150,1.0)" : "rgba(0,0,255,0.5)";
  });

  new Chart("myChart2", {
    type: "bar",
    data: {
      labels: dates,
      datasets: [{
        backgroundColor: barColors,
        data: mmiValues
      }]
    },
    options: {
      legend: {display: false},
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }],
      }
    }
  });
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
