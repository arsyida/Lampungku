<!-- Komponen kartu untuk grid portofolio
Menampilkan gambar, judul, dan lokasi dengan tautan yang dapat diklik -->
<div class="single-portfolio col-sm-4 all corporate">
	<div class="item" id="<?= $id ?>" onclick="location.href='<?= base_url('detail/') ?><?= $id ?>'">
		<img src="<?= $picture ?>" alt="Work 1">
		<div class="p-inner">
			<h4><?= $name ?></h4>
			<div class="cat"><?= $location ?></div>
		</div>
	</div>
</div>