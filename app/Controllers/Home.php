<?php

namespace App\Controllers;

// Kelas Home adalah controller yang menangani permintaan ke halaman utama
class Home extends BaseController
{
    // Metode index adalah metode default yang dipanggil saat controller ini diakses
    public function index(): string
    {
        // Membuat instance dari model Wisata
        $wisataModel = new \App\Models\Wisata();

        // Mengambil semua data wisata menggunakan metode getAllWisata dari model
        $data['wisataTanggamus']= $wisataModel->getWisataByLocation('Tanggamus');
        $data['wisataLamsel']= $wisataModel->getWisataByLocation('Lampung Selatan');
        $data['wisataLambar']= $wisataModel->getWisataByLocation('Lampung Barat');
        $data['wisataLamtim']= $wisataModel->getWisataByLocation('Lampung Timur');
        $data['wisataPesawaran']= $wisataModel->getWisataByLocation('Pesawaran');
        $data['wisataWayKanan']= $wisataModel->getWisataByLocation('Way Kanan');

        // Mengembalikan tampilan 'home' dengan data wisata yang dioper ke view
        return view('home', ['data' => $data]);
        // return json_encode($data['wisataLamsel']);
    }
}
