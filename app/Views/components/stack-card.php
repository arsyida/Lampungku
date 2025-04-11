<!-- Komponen kartu ini akan mengarahkan ke halaman places saat diklik.
Menampilkan nama lokasi dan gambar yang terkait. -->
<div class="card" onclick="location.href='<?= base_url('places') ?>?query=<?= $location ?>'">
    <span><?php echo $location ?></span>
    <img src="<?= $picture ?>" alt="Picture of <?= $location ?>" />
</div>