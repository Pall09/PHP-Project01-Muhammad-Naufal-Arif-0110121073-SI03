<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ScreameMost</title>
    <style>
    .tengah {
        margin-top: 60px;
        display: flex;
        flex-direction: column;
    }
    </style>

    <!-- Style -->
    <?php
        include_once '../dist/php/stylesheet.php';
    ?>
    <!-- /.Style -->

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <?php
            // Navbar
            include_once '../dist/php/navbar.php';
            // Sidebar
            include_once '../dist/php/sidebar.php';


            // ================ Result BMI =================
            require_once "../class/class_pasien.php";
            require_once "../class/class_BMI.php";
            require_once "../class/class_BMIPasien.php";

            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $tmp_lahir = $_POST['tmp-lahir'];
            $tgl_lahir = $_POST['tgl-lahir'];
            $gender = $_POST['gender'];
            $tinggi = $_POST['tinggi-badan'];
            $berat = $_POST['berat-badan'];
            $tgl_check = $_POST['tgl-check'];

            $kode = ["P001","P002","P003","P004"];

            // Pasien input
            if (isset($_POST['submit'])) {
                $pasien = new Pasien($kode, $nama);
                $result = new BMIPasien($berat, $tinggi, $pasien);
    
                $pasien->email = $email;
                $pasien->tmp_lahir = $tmp_lahir;
                $pasien->tgl_lahir = $tgl_lahir;
                $pasien->gender = $gender;
    
                $result->tgl_check = $tgl_check;
                $result->BMI = $result->nilaiBMI($berat, $tinggi);
            }

            // Pasien Tetap
            // Pasien 1
            $pasien1 = new Pasien($kode[0], "Ahmad");
            $ps_tetap1 = new BMIPasien(74.8, 169, $pasien1);
            $pasien1->gender = "L";
            $ps_tetap1->tgl_check = "2022-01-10";
            $ps_tetap1->BMI = $ps_tetap1->nilaiBMI(74.8, 169);

            // Pasien 2
            $pasien2 = new Pasien($kode[1], "Rina");
            $ps_tetap2= new BMIPasien(55.3, 165, $pasien2);
            $pasien2->gender = "P";
            $ps_tetap2->tgl_check = "2022-01-10";
            $ps_tetap2->BMI = $ps_tetap2->nilaiBMI(55.3, 165);

            // Pasien 3
            $pasien3 = new Pasien($kode[2], "Lutfi");
            $ps_tetap3 = new BMIPasien(45.2, 171, $pasien3);
            $pasien3->gender = "L";
            $ps_tetap3->tgl_check = "2022-01-11";
            $ps_tetap3->BMI = $ps_tetap3->nilaiBMI(45.2, 171);

            $ar_pasien = [$ps_tetap1,$ps_tetap2,$ps_tetap3];
        ?>

        <div class="content-wrapper p-2">
            <section class="content ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="invoice p-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h2 class="card-title">Result Data BMI</h2>

                                                <div class="card-tools">
                                                    <div class="input-group input-group-sm" style="width: 150px;">
                                                        <input type="text" name="table_search"
                                                            class="form-control float-right" placeholder="Search">

                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-default">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tanggal Periksa</th>
                                                            <th>Kode Pasien</th>
                                                            <th>Nama Pasien</th>
                                                            <th>Gender</th>
                                                            <th>Berat (kg)</th>
                                                            <th>Tinggi (cm)</th>
                                                            <th>Nilai BMI</th>
                                                            <th>Status BMI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $n = 1;
                                                        foreach ($ar_pasien as $key) {
                                                            echo "<tr>";
                                                            echo "<td>{$n}</td>";
                                                            echo "<td>" . $key->tgl_check. "</td>";
                                                            echo "<td>" . $key->pasien->kode . "</td>";
                                                            echo "<td>" . $key->pasien->nama . "</td>";
                                                            echo "<td>" . $key->pasien->gender . "</td>";
                                                            echo "<td>" . $key->berat . " kg</td>";
                                                            echo "<td>" . $key->tinggi . " cm</td>";
                                                            echo "<td>" . $key->BMI . "</td>";
                                                            echo "<td>" . $key->statusBMI($key->BMI) ."</td>";
                                                            echo "</tr>";
                                                            $n++;
                                                        }

                                                        if(isset($_POST['submit'])) {
                                                            echo "<tr>";
                                                            echo "<td>4</td>";
                                                            echo "<td>" . $result->tgl_check. "</td>";
                                                            echo "<td>" . $result->pasien->kode[3] . "</td>";
                                                            echo "<td>" . ucwords($result->pasien->nama) . "</td>";
                                                            echo "<td>" . $result->pasien->gender . "</td>";
                                                            echo "<td>" . $result->berat . " Kg</td>";
                                                            echo "<td>" . $result->tinggi . " Cm</td>";
                                                            echo "<td>" . $result->BMI . "</td>";
                                                            echo "<td>" . $result->statusBMI($result->BMI) ."</td>";
                                                            echo "</tr>";
                                                        }else {
                                                            echo "<script>console.log('Variabel Kosong');</script>";
                                                        }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div class="row mt-2">
                                    <!-- accepted payments column -->
                                    <div class="col-6">
                                        <div class='tengah'>
                                            <h2 class="text-center mb-4">Status BMI</h4>
                                                <?php
                                                if(isset($_POST['submit'])) {
                                                    echo "<h4 class='text-center'>Nilai BMI Anda adalah <span class='text-primary'>{$result->BMI}</span></>";
                                                    echo "<h4 class='text-center'>Maka, Status BMI Anda <span class='text-primary'>{$result->statusBMI($result->BMI)}</span></h4>";
                                                } else {
                                                    echo "<h4 class='text-center'>Anda belum menghitung <span class='text-primary'>Status BMI anda!</span></h4>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <h4>Keterangan Status BMI</h3>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>BMI</th>
                                                            <th>Status Berat Badan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Kurang dari 18,5</td>
                                                            <td>Kekurangan Berat Badan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>18,5 - 24,9</td>
                                                            <td>Normal (Ideal)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>25,0 - 29,9</td>
                                                            <td>Kelebihan Berat Badan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>30.0 atau Lebih</td>
                                                            <td>Kegemukan (Obesitas)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <!-- /.Content Wraper -->
    <!-- Footer -->
    <?php
            include_once '../dist/php/footer.php';
        ?>
    <!-- /.Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- Script -->
    <?php
        include_once '../dist/php/script.php';
    ?>
    <!-- /.Script -->
</body>

</html>