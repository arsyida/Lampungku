<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWisataDatabase extends Migration
{
    public function up()
    {
        // Menambahkan field/kolom ke dalam tabel 'wisatas'
        $this->forge->addField([
            'id' => [
                'type'           => 'INT', // Tipe data integer
                'constraint'     => 11, // Panjang maksimal 11 digit
                'unsigned'       => true, // Tidak menerima nilai negatif
                'auto_increment' => true, // Nilai akan bertambah otomatis
            ],
            'name' => [
                'type'       => 'VARCHAR', // Tipe data string
                'constraint' => '255', // Panjang maksimal 255 karakter
                'default'    => '', // Nilai default adalah string kosong
            ],
            'location' => [
                'type'       => 'VARCHAR', // Tipe data string
                'constraint' => '255', // Panjang maksimal 255 karakter
                'default'    => '', // Nilai default adalah string kosong
            ],
            'picture' => [
                'type'       => 'VARCHAR', // Tipe data string
                'constraint' => '255', // Panjang maksimal 255 karakter
                'default'    => '', // Nilai default adalah string kosong
            ],
            'description' => [
                'type' => 'TEXT', // Tipe data teks panjang
                'null' => true, // Nilai boleh null
                'default' => null, // Nilai default adalah null
            ],
            'interesting' => [
                'type' => 'TEXT', // Tipe data teks panjang
                'null' => true, // Nilai boleh null
                'default' => null, // Nilai default adalah null
            ],
            'maps' => [
                'type'       => 'TEXT', // Tipe data teks panjang
                'null'       => true, // Nilai boleh null
                'default'    => null, // Nilai default adalah null
            ],
        ]);

        // Menambahkan primary key pada kolom 'id'
        $this->forge->addKey('id', true);

        // Membuat tabel 'wisatas' di database
        $this->forge->createTable('wisatas');
    }

    public function down()
    {
        // Menghapus tabel 'wisatas' jika ada
        $this->forge->dropTable('wisatas', true);
    }
}
