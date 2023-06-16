<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SaCode PHP Day 02</title>

    <!-- BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <?php require_once('includes/nav.php'); ?>

    <!-- .container start -->
    <div class="container">

        

        <!-- .row start -->
        <div class="row py-5">

            <!-- .col start -->
            <div class="col-12">

                <!-- .card start -->
                <div class="card">

                    <!-- .card-header start -->
                    <div class="card-header">
                        <h3>Data Pengguna</h3>
                    </div>
                    <!-- .card-header end -->

                    <!-- .card-body start -->
                    <div class="card-body">

                        <!-- ============= CONTENT AREA START ===================== -->



                        <!-- your codes goes here -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Alamat Email</th>
                                    <th scope="col">Nomor HP/WA</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <th>
                                        <img src="images/contributor-billy-rumbiak.png" alt="gambar" width="100px">
                                    </th>
                                    <td>Billy Rumbiak</td>
                                    <td>b.rumbiak@outlook.com</td>
                                    <td>123423453456</td>
                                    <td>
                                        <a href="" class="btn btn-primary">
                                            <i class="fa-solid fa-eye"></i> Detail
                                        </a>
                                        <a href="" class="btn btn-outline-primary">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <th>
                                        <img src="images/contributor-septemina-waisimon.png" alt="gambar" width="100px">
                                    </th>
                                    <td>Septemina Waisimon</td>
                                    <td>s.waisimon@outlook.com</td>
                                    <td>123423453456</td>
                                    <td>
                                        <a href="" class="btn btn-primary">
                                            <i class="fa-solid fa-eye"></i> Detail
                                        </a>
                                        <a href="" class="btn btn-outline-primary">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <th>
                                        <img src="images/contributor-sulenias-asso.png" alt="gambar" width="100px">
                                    </th>
                                    <td>Sulenias Asso</td>
                                    <td>s.asso@outlook.com</td>
                                    <td>123423453456</td>
                                    <td>
                                        <a href="" class="btn btn-primary">
                                            <i class="fa-solid fa-eye"></i> Detail
                                        </a>
                                        <a href="" class="btn btn-outline-primary">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <th>
                                        <img src="images/contributor-samuel-bosawer.png" alt="gambar" width="100px">
                                    </th>
                                    <td>Samuel Bosawer</td>
                                    <td>s.bosawer@outlook.com</td>
                                    <td>123423453456</td>
                                    <td>
                                        <a href="" class="btn btn-primary">
                                            <i class="fa-solid fa-eye"></i> Detail
                                        </a>
                                        <a href="" class="btn btn-outline-primary">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>



                        <!-- ============= CONTENT AREA END ===================== -->

                    </div>
                    <!-- .card-body end -->

                </div>
                <!-- .card end -->

            </div>
            <!-- .col end -->

        </div>
        <!-- .row end -->



    </div>
    <!-- .container end -->

    <?php require_once('includes/footer.php'); ?>

    <!-- BOOSTRAP JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>