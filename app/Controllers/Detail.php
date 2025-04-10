<?php

namespace App\Controllers;

class Detail extends BaseController
{
    // Fungsi untuk menampilkan detail wisata berdasarkan nama/id
    public function detail($name): string
    {
        // Membuat instance dari model Wisata
        $wisataModel = new \App\Models\Wisata();

        // Mengambil data wisata berdasarkan nama/id yang diberikan
        $data = $wisataModel->getWisataById($name);

        // Mengembalikan view 'detail' dengan data yang diambil
        return view('detail', ['data' => $data]);
    }
}
