<?php

namespace App\Controllers;

class Places extends BaseController
{
    // Fungsi untuk melakukan pencarian data wisata
    public function places(): string
    {
        
        // // Membuat instance dari model Wisata
        // $wisataModel = new \App\Models\Wisata();
        
        // // Mengambil semua data wisata menggunakan fungsi getAllWisata() dari model
        // $data = $wisataModel->getAllWisata();

        // // Mengembalikan view 'search' dengan data yang diambil
        // return view('places', ['data' => $data]);


        // Membuat instance dari model Wisata
        $wisataModel = new \App\Models\Wisata();

        // Check if there is a 'query' parameter in the URL
        $query = $this->request->getVar('query');  // Using CodeIgniter's request helper to get the query parameter

        if ($query) {
            // If there's a query, search for wisata containing the query term
            $data = $wisataModel->getWisataByKeyword($query);

            // If no results are found, return the 'not found' view
            if (empty($data)) {
                return 'not found';  // Create a view 'not_found' to handle the case where no results are found
            }
        } else {
            // If no query is provided, return all the wisata data
            $data = $wisataModel->getAllWisata();
        }

        // Return the 'places' view with the data (filtered or all)
        return view('places', ['data' => $data, 'query' => $query]);
    }
    
}