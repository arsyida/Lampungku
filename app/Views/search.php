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
            <input type="text" class="form-control search-input" placeholder="Search">
            <button class="btn search-btn ms-2"><i class="fas fa-search"></i></button>
        </div>
        <div class="portfolio-area">
        <div class="filters">
			<ul>
            <li class="active" data-filter="*">All</li>
            <li data-filter=".corporate">Lampung Selatan</li>
            <li data-filter=".personal">Lampung Barat</li>
            <li data-filter=".agency">Lampung Timur</li>
    		<li data-filter=".portal">Lampung Tengah</li>
    	    </ul>
        </div>
		</div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
