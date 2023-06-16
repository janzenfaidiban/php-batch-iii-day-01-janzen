<?php 

  // membuat variabel dengan data array
  $peserta = array(
                    'Alpais', 
                    'Rebly', 
                    'Alpenus', 
                    'Efati', 
                    'Sulenias',
                    'Samuel',
                    'Septemina',
                    'Allyakim',
                    'Belinda',
                  );

  // menampilkan struktur data menggunakan var_dump
  
  // var_dump($peserta);

  // foreach($peserta as $detailPeserta) {
  //   echo '<div class="border shadow m-2 p-2">' . $detailPeserta . '</div>';
  // }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SaCode</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

  <div class="container">

    <div class="row my-5">

      <div class="card">

        <div class="card-body py-5">

          <ul class="list-group">

            <?php 
              foreach($peserta as $detailPeserta):
            ?>

            <li class="list-group-item">
              <a href="#">
                <?php echo $detailPeserta; ?>
              </a>
            </li>

            <?php 
              endforeach;
            ?>

          </ul>

        </div>

      </div>

    </div>

  </div>


</body>

</html>