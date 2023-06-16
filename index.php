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
        
        <?php

          // membuat menu dalam array
          $menus = [
            'beranda' => 'Beranda',
            'tentang-sekolah' => 'Tentang Sekolah',
            'galeri-kegiatan' => 'Galeri Kegiatan',
            'para-guru' => 'Para Guru',
          ];

          // menampilkan data dengan foreach
          foreach ($menus as $menu => $menuLabel) :
            echo '
              <ul class="list-group">
                <li class="list-group-item"> ' . $menu . ' - ' . $menuLabel . ' </li>
              </ul>
            ';
          endforeach;

        ?>

      </div>

      </div>

    </div>

  </div>


</body>

</html>