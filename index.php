<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/madep.png" type="images/png">
    <title>Sentra Madya</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wA6MA9ov6cdb5In6ZmVt2kmdb5vDIy7QFvFZXxPoUe9inQ8qeRYDpvhuXQe3S/+o" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha384-DyZ88mC6Up2uqS35f0NkK2zY9fVeVSmfpcFzCyoFyFZSYFZ9p9a/cCoACp9xvFL0" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">\
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            scroll-behavior: smooth;
        }

        section {
            padding: 100px 0;
        }

        #home {
            background-color: #f8f9fa;
        }

        #about {
            background-color: #e9ecef;
        }

        #services {
            background-color: #f8f9fa;
        }

        #contact {
            background-color: #e9ecef;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-aos="fade-down" data-aos-anchor-placement="top-center" data-aos-duration="1000">
        <div class="container">
            <a class="navbar-brand" href="index.php"> <img src="images/madep.png" alt="Logo"
                    style="height: 80px; width: auto; margin-right: 2px;">
                Sentra Madya<span></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Jadwal Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kamar">Cek Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="d-flex align-items-center position-relative"
        style="min-height: 100vh; background-image: url('images/gedung.png'); background-size: cover; background-position: top;">
        <div class="background-blur"></div>
        <div class="container text-center p-4 rounded position-relative"
            style="background-color: rgba(255, 255, 255, 0); max-width: 600px; z-index: 1;" data-aos="zoom-in-up" data-aos-duration="1000">
            <h3
                style="color: #f0e68c; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);  padding: 5px; border-radius: 5px;">
                Selamat Datang
            </h3>
            <h1
                style="color: #ff6347; font-size: 3em; text-transform: uppercase; letter-spacing: 2px; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);  padding: 10px; border-radius: 5px;">
                Di Rumah Sakit Sentra Madya
            </h1>
        </div>
    </section>

    <!-- About Section -->
    <div class="container-fluid" id="tentang" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background-size: cover; background-position: center; background-image: url('images/bgabout.jpg');">
        <div class="row">
            <div class="col-md-5">
                <div style="height: 100%; background-size: cover; background-position: center; background-image: url('images/gedung.png'); border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border: 5px solid #fff;" data-aos="fade-right">
                </div>
            </div>
            <div class="col-md-7" data-aos="fade-left">
                <h4>TENTANG</h4>
                <h1 style="margin-bottom: 30px">Rumah Sakit Sentra Madya</h1>
                <p>Rumah Sakit Sentra Madya mulai beroperasi sejak 14 September 2018, menempati tanah seluas 60.000 m2 di Jalan Raya lwinagnggung, Jawa Barat.</p>
                <!-- Button to trigger modal -->
                <button style="margin-top: 20px;padding: 10px 20px;border: none;background: #5560fc;color: white;font-weight: bold;"
                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View More</button>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Rumah Sakit Sentra Madya</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Rumah Sakit Sentra Madya mulai beroperasi sejak 14 September 2018, menempati tanah seluas 60.000
                        m2 di Jalan Raya lwinagnggung, Jawa Barat.</p>
                    <ul>
                        <li aria-level="1">Penambahan Dokter Spesialis: Anak, Kebidanan &amp; Penyakit Kandungan,
                            Penyakit Dalam, Paru, THT, Bedah Umum, Bedah Ortopedi, Bedah Urologi, Bedah Saraf, Gizi
                            Klinik, Okupasi, Gigi Umum dan Spesialis, serta Psikiater dan Psikolog.</li>
                        <li aria-level="1">Penambahan Ruang Poliklinik Rawat Jalan, dari 8 menjadi 21 ruang Praktek.
                        </li>
                        <li aria-level="1">Tersedianya Ruang Poli Kebidanan &amp; Penyakit Kandungan, lengkap dengan USG
                            4 Dimensi.</li>
                        <li aria-level="1">Tersedianya Ruang Bersalin lengkap dengan CTG.</li>
                        <li aria-level="1">Tersedianya Kamar Bayi Sehat untuk pasca kelahiran.</li>
                    </ul>
                    <p>Semua ini merupakan komitmen pemilik dan manajemen Rumah Sakit Sentra Madya untuk menjadi rumah
                        sakit umum yang terdepan dan terpercaya dalam memberikan pelayanan kesehatan yang menyeluruh
                        bagi seluruh komunitas.</p>
                    <p>Dapat menjadi tolak ukur bagi institusi kesehatan dan rujukan tingkat nasional maupun
                        internasional yang selalu mengedepankan keselamatan pasien, kesehatan, dan peningkatan kualitas
                        hidup melalui layanan kesehatan yang berkualitas, ekonomis, dan komprehensif.</p>
                </div>
            </div>
        </div>
    </div>


    <!--start layanan unggulan-->

    <div class="containerrr" id="layanan" style="min-height: 100vh; min-width: 100vw; background-size: cover; background-position: center; background-image: url('images/bgabout.jpg');">
        <h2 class="section-title" style="margin-top: 90px;" data-aos="fade-down-right" data-aos-duration="700">Layanan Unggulan Kami</h2>
        <p class="section-subtitle" data-aos="fade-down-right" data-aos-duration="700">Kami menyediakan layanan kesehatan terbaik untuk Anda dan keluarga.</p>

        <div class="services">
            <div class="service-item" data-aos="flip-left" data-aos-duration="700">
                <div class="service-icon"><i class="fas fa-heartbeat"></i></div>
                <h3 class="service-title">Layanan Gawat Darurat</h3>
                <p class="service-description">Unit gawat darurat kami siap melayani 24 jam untuk situasi medis darurat
                    Anda.</p>
            </div>

            <div class="service-item" data-aos="flip-up" data-aos-duration="700">
                <div class="service-icon"><i class="fas fa-stethoscope"></i></div>
                <h3 class="service-title">Pemeriksaan Kesehatan</h3>
                <p class="service-description">Kami menyediakan layanan pemeriksaan kesehatan lengkap dengan peralatan
                    modern.</p>
            </div>

            <div class="service-item" data-aos="flip-right" data-aos-duration="700">
                <div class="service-icon"><i class="fas fa-user-md"></i></div>
                <h3 class="service-title">Konsultasi Spesialis</h3>
                <p class="service-description">Konsultasi dengan dokter spesialis terbaik untuk berbagai macam penyakit.
                </p>
            </div>

            <div class="service-item" data-aos="flip-left" data-aos-duration="700">
                <div class="service-icon"><i class="fas fa-x-ray"></i></div>
                <h3 class="service-title">Radiologi</h3>
                <p class="service-description">Layanan radiologi kami dilengkapi dengan teknologi terbaru untuk diagnosa
                    yang akurat.</p>
            </div>

            <div class="service-item" data-aos="flip-down" data-aos-duration="700">
                <div class="service-icon"><i class="fas fa-briefcase-medical"></i></div>
                <h3 class="service-title">Bedah</h3>
                <p class="service-description">Tim bedah kami berpengalaman dalam melakukan berbagai prosedur bedah.</p>
            </div>

            <div class="service-item" data-aos="flip-right" data-aos-duration="700">
                <div class="service-icon"><i class="fas fa-baby"></i></div>
                <h3 class="service-title">Layanan Ibu dan Anak</h3>
                <p class="service-description">Kami menawarkan layanan khusus untuk ibu dan anak dengan perawatan
                    terbaik.</p>
            </div>
        </div>
    </div>
    <!--end layanan unggulan-->



    <!-- Contact Section -->
    <section id="contact" class="d-flex justify-content-center align-items-center" style="min-height: 100vh; min-width: 100vw; background-size: cover; background-position: center; background-image: url('images/bgabout.jpg');">
        <div class="container text-center">
            <h2>Jadwal Dokter</h2>
            <p>Get in touch with us for any inquiries or support.</p>

            <!-- Carousel Wrapper -->
            <div id="doctorCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner" style="min-height: 500px;"> <!-- Added min-height to prevent shrinking -->

                    <?php
                    include 'koneksi.php';

                    // Get current date
                    $current_date = date('Y-m-d');

                    // Mapping of English days to Indonesian days
                    $day_map = [
                        'Monday' => 'Senin',
                        'Tuesday' => 'Selasa',
                        'Wednesday' => 'Rabu',
                        'Thursday' => 'Kamis',
                        'Friday' => 'Jumat',
                        'Saturday' => 'Sabtu',
                        'Sunday' => 'Minggu'
                    ];

                    // Get current day in Indonesian
                    $current_day_indonesian = $day_map[date('l')];

                    // Query to get doctor data
                    $query = "SELECT * FROM dokter ORDER BY id ASC";
                    $result = mysqli_query($koneksi, $query);

                    if (!$result) {
                        die("Query Error: " . mysqli_error($koneksi));
                    }

                    $item_count = 0;
                    $active_class = 'active';

                    // Query to get schedule data with doctor names
                    $schedule_query = "
    SELECT d.nama
    FROM jadwal j
    JOIN dokter d ON j.id_dokter = d.id
    WHERE j.hari = '$current_day_indonesian'
";
                    $schedule_result = mysqli_query($koneksi, $schedule_query);
                    $available_doctors = [];

                    if ($schedule_result) {
                        if (mysqli_num_rows($schedule_result) === 0) {
                            echo '<script>console.log("No data found for schedule query.");</script>';
                        }
                        while ($schedule = mysqli_fetch_assoc($schedule_result)) {
                            $available_doctors[] = $schedule['nama'];
                        }
                    } else {
                        echo '<script>console.log("Schedule Query Error: ' . mysqli_error($koneksi) . '");</script>';
                    }

                    while ($row = mysqli_fetch_assoc($result)) {
                        $is_available = in_array($row['nama'], $available_doctors);

                        // Get doctor schedule information
                        $doctor_schedule = [];
                        $schedule_query = "
    SELECT j.hari, j.jam_mulai AS jam_masuk, j.jam_selesai AS jam_keluar
    FROM jadwal j
    JOIN dokter d ON j.id_dokter = d.id
    WHERE d.nama = '{$row['nama']}' AND j.hari = '$current_day_indonesian'
";

                        $schedule_result = mysqli_query($koneksi, $schedule_query);

                        if ($schedule_result) {
                            if (mysqli_num_rows($schedule_result) === 0) {
                                echo '<script>console.log("No data found for doctor schedule query.");</script>';
                            }
                            while ($schedule = mysqli_fetch_assoc($schedule_result)) {
                                $doctor_schedule[] = [
                                    'hari' => $schedule['hari'],
                                    'jam_masuk' => $schedule['jam_masuk'],
                                    'jam_keluar' => $schedule['jam_keluar']
                                ];
                            }
                        } else {
                            echo '<script>console.log("Doctor Schedule Query Error: ' . mysqli_error($koneksi) . '");</script>';
                        }

                        // Encode doctor schedule to JSON for use in JavaScript
                        $doctor_schedule_json = htmlspecialchars(json_encode($doctor_schedule), ENT_QUOTES, 'UTF-8');

                        // Debug output for JSON
                        echo '<script>console.log("Doctor Schedule JSON: ' . $doctor_schedule_json . '");</script>';

                        if ($item_count % 6 == 0) {
                            if ($item_count > 0) {
                                echo '</div>'; // Close previous row
                                echo '</div>'; // Close previous item
                            }
                            echo '<div class="carousel-item ' . $active_class . '">'; // Open new item
                            echo '<div class="row justify-content-center">'; // Open new row
                            $active_class = ''; // Only the first item is active
                        }

                        $opacity_style = $is_available ? '' : 'style="opacity: 0.5;"';
                        $click_handler = $is_available ? "handleClick(this, '{$doctor_schedule_json}')" : 'handleDisabledClick(this)';

                        echo '<div class="col-md-4 staff-member" data-aos="fade-down-right" ' . $opacity_style . ' onclick="' . $click_handler . '">';
                        echo '<img src="images/' . $row['foto'] . '" alt="' . $row['nama'] . '" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">';
                        echo '<h3>' . $row['nama'] . '</h3>';
                        echo '<p>' . $row['spesialis'] . '</p>';
                        echo '</div>';

                        $item_count++;
                    }

                    // Close the last item and row
                    echo '</div>';
                    echo '</div>';
                    ?>


                    <script>
                        function handleClick(element, doctorScheduleJson) {
                            try {
                                // Log JSON for debugging
                                console.log('Received JSON:', doctorScheduleJson);

                                // Parse the JSON string into a JavaScript object
                                let doctorSchedule = JSON.parse(doctorScheduleJson);

                                let scheduleText = 'Jadwal Dokter:\n';

                                // Loop through the schedule and build the text
                                doctorSchedule.forEach(function(schedule) {
                                    scheduleText += `Hari: ${schedule.hari}, Jam Masuk: ${schedule.jam_masuk}, Jam Keluar: ${schedule.jam_keluar}\n`;
                                });

                                // Display the information using Swal.fire
                                Swal.fire({
                                    title: 'Jadwal Dokter',
                                    text: scheduleText,
                                    icon: 'info'
                                });
                            } catch (error) {
                                console.error('Error parsing doctor schedule:', error);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'There was an error displaying the schedule.',
                                });
                            }
                        }

                        function handleDisabledClick(element) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Maaf',
                                text: 'Dokter Sedang Tidak Ada Jadwal!',
                            });
                        }
                    </script>








                </div>

                <!-- Carousel Controls with Custom Styling -->
                <!-- Carousel Controls with Custom Styling -->
                <a class="carousel-control-prev" href="#doctorCarousel" role="button" data-slide="prev" style="width: 5%;">
                    <span class="carousel-control-prev-icon bg-dark p-3 rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only text-black">Previous</span>
                </a>

                <a class="carousel-control-next d-flex align-items-center" href="#doctorCarousel" role="button" data-slide="next" style="width: 5%;">
                    <span class="sr-only text-black order-1">Next</span>
                    <span class="carousel-control-next-icon bg-dark p-3 rounded-circle order-2" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>

    <style>
        /* Ensure consistent background size */
        #contact {
            background-attachment: fixed;
        }

        /* Custom styles for carousel controls */
        .carousel-control-next {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* Align the content to the start of the flex container */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 100% 100%;
            /* Ensure full icon visibility */
            background-position: center;
            /* Center the background image */
        }

        .carousel-control-prev-icon {
            background-image: url('images/prev.jpg');
            /* Optional: Custom Icon */
        }

        .carousel-control-next-icon {
            background-image: url('images/next.jpg');
            /* Optional: Custom Icon */
        }

        .carousel-control-prev,
        .carousel-control-next {
            top: 50%;
            /* Center controls vertically */
            transform: translateY(-50%);
            width: 5%;
            /* Make controls smaller */
        }


        .nav-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .nav-tabs button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs button.active,
        .nav-tabs button:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            max-width: 800px;
            margin: auto;
            margin-top: 50px;
        }

        .floor-plan {
            display: grid;
            grid-template-columns: repeat(3, 150px);
            grid-template-rows: repeat(3, 150px);
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }

        .room-container {
            position: relative;
            width: 150px;
            height: 150px;
            background: linear-gradient(145deg, #e6e8eb, #ffffff);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .room-container:hover {
            transform: scale(1.05);
        }

        .room-title {
            position: absolute;
            font-size: 18px;
            font-weight: bold;
            color: #555;
            text-align: center;
            z-index: 1;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .room {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            width: 130px;
            height: 130px;
            gap: 20px;
        }

        .sub-room {
            border-radius: 8px;
            transition: background-color 0.3s;
            background-color: #28a745;
            /* Default to available */
            box-shadow: inset 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .sub-room.occupied {
            background-color: #dc3545;
        }

        .sub-room.not-available {
            background-color: #dc3545;
            /* Red background */
            color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: inset 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container-fluid {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            background-image: url('images/bgabout.jpg');
            padding: 20px;
        }
    </style>

    <div class="container-fluid" id="kamar">
        <div class="card">
            <div class="nav-tabs">
                <button class="active" onclick="showFloor(1)">Lantai 1</button>
                <button onclick="showFloor(2)">Lantai 2</button>
                <button onclick="showFloor(3)">Lantai 3</button>
            </div>
            <!-- AWALLLLLLLLLLLLLLLLL LANTAIIIIIIIIIIIIIIIIIIIIII 1 -->

            <div id="floor1" class="floor-plan">
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Melati</div>
                    <div id="ruangMelati" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Lily</div>
                    <div id="ruangLily" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Jasmine</div>
                    <div id="ruangJasmine" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Anggrek</div>
                    <div id="ruangAnggrek" class="room"></div>
                </div>
                <div>

                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Anyelir</div>
                    <div id="ruangAnyelir" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Aster</div>
                    <div id="ruangAster" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Clarkia</div>
                    <div id="ruangClarkia" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Camelia</div>
                    <div id="ruangCamelia" class="room"></div>
                </div>
            </div>
            <!-- AKHIR DARIIIIIIII LANTAIIIIIIIIIIIIIII 1 -->

            <!-- AWALLLLLL DARIIII LANTAIIIIIIIIII 2 -->

            <div id="floor2" class="floor-plan" style="display:none;">
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Clover</div>
                    <div id="ruangClover" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Cosmos</div>
                    <div id="ruangCosmos" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Daisy</div>
                    <div id="ruangDaisy" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Dandelion</div>
                    <div id="ruangDandelion" class="room"></div>
                </div>
                <div>

                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Kalanchoe</div>
                    <div id="ruangKalanchoe" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Lantana</div>
                    <div id="ruangLantana" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Nemesia</div>
                    <div id="ruangNemesia" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Sunflower</div>
                    <div id="ruangSunflower" class="room"></div>
                </div>
                <!-- Repeat similar structure for floor 2 rooms -->
            </div>
            <!-- AKHIRRRRRRRRRR DARIIIIIIIIIII LANTAIIIIIIIII 2 -->

            <div id="floor3" class="floor-plan" style="display:none;">
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Lotus</div>
                    <div id="ruangLotus" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Lilac</div>
                    <div id="ruangLilac" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Viola</div>
                    <div id="ruangViola" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Mimosa</div>
                    <div id="ruangMimosa" class="room"></div>
                </div>
                <div>

                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Edelweiss</div>
                    <div id="ruangEdelweiss" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Yolanda</div>
                    <div id="ruangYolanda" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Nerine</div>
                    <div id="ruangNerine" class="room"></div>
                </div>
                <div class="room-container" data-aos="flip-left" data-aos-duration="700">
                    <div class="room-title">Ruang Abelia</div>
                    <div id="ruangAbelia" class="room"></div>
                </div>
                <!-- Repeat similar structure for floor 3 rooms -->
            </div>
        </div>

        <script>
            function showFloor(floor) {
                const floors = document.querySelectorAll('.floor-plan');
                floors.forEach((el, index) => {
                    el.style.display = (index === floor - 1) ? 'grid' : 'none';
                });

                const buttons = document.querySelectorAll('.nav-tabs button');
                buttons.forEach((button, index) => {
                    button.classList.toggle('active', index === floor - 1);
                });
            }

            function updateRoomData() {
                fetch('getRoomData.php')
                    .then(response => response.json())
                    .then(data => {
                        for (const [roomName, beds] of Object.entries(data)) {
                            const roomElement = document.getElementById(`ruang${roomName}`);
                            if (roomElement) {
                                roomElement.innerHTML = ''; // Clear existing content
                                Object.values(beds).forEach(status => {
                                    const subRoom = document.createElement('div');
                                    subRoom.classList.add('sub-room');
                                    if (status === 'occupied') {
                                        subRoom.classList.add('occupied');
                                    } else if (status === 'Tidak Terisi') {
                                        subRoom.classList.add('not-available');

                                    }
                                    roomElement.appendChild(subRoom);
                                });
                            }
                        }
                    })
                    .catch(error => console.error('Error fetching room data:', error));
            }

            // Initialize room data on page load
            updateRoomData();
        </script>
    </div>

    <style>
        .modal-body .row {
            gap: 10px;
        }

        .modal-body .col {
            background-color: #ddd;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>

    <div class="modal fade" id="roomModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Room Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="modalGrid" class="row">
                        <!-- Room details will be inserted here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->

    <script>
        function openModal(roomName) {
            const modalTitle = document.getElementById('modalTitle');
            const modalGrid = document.getElementById('modalGrid');

            // Set the title of the modal
            modalTitle.textContent = `Detail Ruang ${roomName}`;

            // Clear any existing grid content
            modalGrid.innerHTML = '';

            // Fetch the room data from the backend
            fetch('ambil_data.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        nama_kamar: roomName
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const kamarData = data.kamar_data; // Array of room data

                        // Create a row container to center the grid items
                        const row = document.createElement('div');
                        row.classList.add('row', 'justify-content-center');

                        // Create grid items for each room
                        kamarData.forEach(room => {
                            const col = document.createElement('div');
                            col.classList.add('col-4', 'mb-4'); // Each item will take up 4 columns and have bottom margin for spacing

                            // Determine background color based on status
                            const bgColor = room.status === 'Terisi' ? 'bg-success' : 'bg-danger'; // 'Hijau' for Terisi, 'Merah' for Tidak Terisi

                            // Create HTML for the room information
                            col.innerHTML = `
                    <div class="border text-center" style="padding: 10px; border-radius: 5px;">
                        <div class="code-kamar-box text-white p-2 ${bgColor}" style="border-radius: 5px;">
                            <strong>${room.code_kamar}</strong>
                        </div>
                        <p>
                            Status: ${room.status === 'Terisi' ? 'Terisi' : 'Tidak Terisi'}
                        </p>
                        <p> 
                            Nama Pasien: ${room.nama_pasien ? room.nama_pasien : '-'} 
                        </p>
                        <p>
                            Total Hari: ${room.total_hari ? room.total_hari : '-'} hari
                        </p>
                    </div>
                `;
                            row.appendChild(col);
                        });

                        // Append the row to the modal grid
                        modalGrid.appendChild(row);
                    } else {
                        // Handle case when no data is returned or an error occurs
                        modalGrid.innerHTML = '<p>No data found</p>';
                    }

                    // Show the modal
                    const modal = new bootstrap.Modal(document.getElementById('roomModal'));
                    modal.show();
                })
                .catch(error => {
                    console.error('Error fetching room data:', error);
                });
        }

        // Add click event to each room
        document.querySelectorAll('.room-container').forEach(room => {
            room.addEventListener('click', function() {
                // If the room title contains "Ruang Melati", extract just "Melati"
                let roomName = this.querySelector('.room-title').textContent;

                // Example: Strip "Ruang " if it's present
                roomName = roomName.replace(/^Ruang\s*/, '');

                console.log("Room Name:", roomName); // Now it should be just "Melati" or "Lily"
                openModal(roomName);
            });
        });
    </script>







    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="row py-5">
                <!-- Footer Left: Location with Google Map -->
                <div class="col-md-6 footer-left mb-4 mb-md-0">
                    <h3>Location</h3>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8848348718116!2d106.90195957420049!3d-6.408833593581907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb31dee0a82d%3A0x62750238896ad55a!2sSMK%20Madya%20Depok!5e0!3m2!1sen!2sid!4v1725611485039!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Footer Right: Contact Information -->
                <div class="col-md-6 footer-right">
                    <h3>Contact Us</h3>
                    <ul class="contact-info list-unstyled">
                        <li><i class="fas fa-envelope"></i> Email: sentramadya@gmail.com</li>
                        <li><i class="fas fa-phone"></i> Phone: (123) 456-7890</li>
                        <li><i class="fas fa-map-marker-alt"></i> Address: 123 Main St, City, Country</li>
                    </ul>
                    <!-- Social Media Icons -->
                    <div class="social-icons mt-3">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="footer-bottom py-3">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Hospital Sentra Madya.</p>
        </div>
    </div>

    <!-- Link JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMzopP1H7uHk6KjI6j0Cvi0yLFlvZh7mXW0f0vR6FW/qGf6bBfRRAx1nNW7"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgPSHv8ksPZMEIdThmhOKr9RQfAW9gd1IraUOz8CyoC5YMAcNf+d"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>