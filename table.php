<?php 

    // membuat variabel dengan data array
    $dataPeserta = [
        [
            'id'            => '1',
            'nama_lengkap'  => 'Billy Rumbiak',
            'alamat_email'  => 'b.rumbiak@sacode.web.id',
            'nomor_hp'      => '082112345678',
        ],
        [
            'id'            => '2',
            'nama_lengkap'  => 'Septemina Waisimon',
            'alamat_email'  => 'septemina.w@sacode.web.id',
            'nomor_hp'      => '082112345678',
        ],
        [
            'id'            => '3',
            'nama_lengkap'  => 'Samuel Bosawer',
            'alamat_email'  => 's.bos@sacode.web.id',
            'nomor_hp'      => '082112345678',
        ],
        [
            'id'            => '4',
            'nama_lengkap'  => 'Sultan Masari',
            'alamat_email'  => 's.m@sacode.web.id',
            'nomor_hp'      => '082112345678',
        ],
    ];

    // menampilkan struktur data dengan fungsi var_dump
    // var_dump($dataPeserta);

    // foreach($dataPeserta as $detailPeserta => $peserta) {
        
    //     echo $peserta['nama_lengkap'];
    //     echo '<br>';

    //     echo $peserta['alamat_email'];
    //     echo '<br>';

    // }

?>

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
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Alamat Email</th>
                                    <th scope="col">Nomor HP/WA</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($dataPeserta as $data => $peserta): ?>

                                <tr>
                                    <th scope="row"><?php echo $peserta['id']; ?></th>
                                    <td><?php echo $peserta['nama_lengkap']; ?></td>
                                    <td><?php echo $peserta['alamat_email']; ?></td>
                                    <td><?php echo $peserta['nomor_hp']; ?></td>
                                </tr>

                                <?php endforeach; ?>
                                
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