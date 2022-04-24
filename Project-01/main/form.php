<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ScreameMost</title>

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
            include_once '../dist/php/navbar.php';
            include_once '../dist/php/sidebar.php';
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Body Mass Index (BMI)</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Form BMI</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Form BMI -->
                    <div class="card card-info ">
                        <div class="card-header">
                            <h3 class="card-title">Form Body Mass Index (BMI)</h3>
                        </div>
                        <!-- Form start -->
                        <form method="post" action="result.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"
                                            maxlength="40" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            maxlength="40" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                        <input type="text" name="tmp-lahir" class="form-control"
                                            placeholder="Tempat Lahir" maxlength="40">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        <input type="date" name="tgl-lahir" class="form-control"
                                            placeholder="Tanggal Lahir">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="col-8">
                                        <div class="form-check form-check-inline">
                                            <input name="gender" id="gender" type="radio" class="form-check-input"
                                                value="L" required>
                                            <label for="gender" class="form-check-label">Laki-Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="gender" id="gender" type="radio" class="form-check-input"
                                                value="P" required>
                                            <label for="gender" class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tinggi Badan</label>
                                    <div class="input-group">
                                        <input type="number" name="tinggi-badan" class="form-control"
                                            placeholder="Tinggi Badan" minlength="2" required>
                                        <span class="input-group-text">Cm</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Berat Badan</label>
                                    <div class="input-group">
                                        <input type="number" name="berat-badan" class="form-control"
                                            placeholder="Berat Badan" minlength="2" required>
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Periksa</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        <input type="date" name="tgl-check" class="form-control"
                                            placeholder="Tanggal Periksa">
                                    </div>
                                </div>

                                <div class="card-footer mt-5">
                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                    <button type="submit" class="btn btn-default float-right"><a
                                            href="form.php">Cancel</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

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