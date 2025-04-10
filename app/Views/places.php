<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pencarian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS============================================= -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <div class="container text-center mt-5">
        <h2>Temukan Keindahan di Lampung!</h2>
        <div class="search-container d-flex align-items-center mt-3">
            <input id="search" type="text" class="form-control search-input" placeholder="Search">
            <button id="search-button" class="btn search-btn ms-2"><i class="fas fa-search"></i></button>
        </div>
        <div class="portfolio-area">
            <div class="filters">
                <ul>
                    <li class="<?= (empty($query)) ? 'active' : '' ?>" data-filter="*"
                        onclick="location.href='<?= base_url('places') ?>'">All</li>
                    <li class="<?= ($query == 'Lampung Selatan') ? 'active' : '' ?>" data-filter=".corporate"
                        onclick="location.href='<?= base_url('places') ?>?query=Lampung Selatan'">Lampung Selatan</li>
                    <li class="<?= ($query == 'Lampung Barat') ? 'active' : '' ?>" data-filter=".personal"
                        onclick="location.href='<?= base_url('places') ?>?query=Lampung Barat'">Lampung Barat</li>
                    <li class="<?= ($query == 'Lampung Timur') ? 'active' : '' ?>" data-filter=".agency"
                        onclick="location.href='<?= base_url('places') ?>?query=Lampung Timur'">Lampung Timur</li>
                    <li class="<?= ($query == 'Pesawaran') ? 'active' : '' ?>" data-filter=".portal"
                        onclick="location.href='<?= base_url('places') ?>?query=Pesawaran'">Pesawaran</li>
                    <li class="<?= ($query == 'Way Kanan') ? 'active' : '' ?>" data-filter=".portal"
                        onclick="location.href='<?= base_url('places') ?>?query=Way Kanan'">Way Kanan</li>
                </ul>
            </div>


            <div class="filters-content">
                <div class="row grid">
                    <?php foreach ($data as $data): ?>
                        <?= view('components/card', ['id' => $data['id'], 'name' => $data['name'], 'location' => $data['location'], 'picture' => $data['picture']]) ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
</body>

</html>