<?php
namespace App\Http\Controllers\Api\Dummy;

trait DummyBlogs
{
  public function getBlogs()
  {
    return [
      (object) [
          'id'      => '1',
          'user_id' => '1', 
          'title'   => 'Cara Memulai Blogging',
          'content' => 'Ini adalah panduan singkat tentang cara memulai blogging.',
      ],
      (object) [
          'id'      => '2',
          'user_id' => '1', 
          'title'   => 'Tips Menulis Konten Menarik',
          'content' => 'Pelajari cara menulis konten yang bisa menarik perhatian pembaca Anda.',
      ],
      (object) [
          'id'      => '3',
          'user_id' => '2', 
          'title'   => 'Pengenalan Keuangan Pribadi',
          'content' => 'Bagaimana mengelola keuangan pribadi dengan bijak.',
      ],
      (object) [
          'id'      => '4',
          'user_id' => '2', 
          'title'   => 'Investasi Saham untuk Pemula',
          'content' => 'Pelajari dasar-dasar investasi saham jika Anda pemula di bidang ini.',
      ],
      (object) [
          'id'      => '5',
          'user_id' => '3', 
          'title'   => 'Teknik Dasar Memasak',
          'content' => 'Panduan untuk memasak makanan lezat dengan teknik dasar.',
      ],
      (object) [
          'id'      => '6',  
          'user_id' => '3', 
          'title'   => 'Resep Kue Coklat Enak',
          'content' => 'Bagikan resep kue coklat yang lezat ini kepada teman-teman Anda.',
      ],
      (object) [
          'id'      => '7',
          'user_id' => '4', 
          'title'   => 'Perjalanan Mendaki Gunung',
          'content' => 'Cerita seru tentang perjalanan mendaki gunung yang menantang.',
      ],
      (object) [
          'id'      => '8',
          'user_id' => '4', 
          'title'   => 'Tips Foto Alam yang Indah',
          'content' => 'Bagikan tips untuk mengambil foto alam yang indah.',
      ],
      (object) [
          'id'      => '9',
          'user_id' => '5', 
          'title'   => 'Panduan Belajar Bahasa Spanyol',
          'content' => 'Pelajari bahasa Spanyol dengan cepat dengan panduan ini.',
      ],
      (object) [
          'id'      => '10',
          'user_id' => '5',
          'title'   => 'Wisata Kuliner di Barcelona',
          'content' => 'Nikmati makanan lezat di Barcelona dengan panduan wisata kuliner ini.',
      ],
    ];
  }
}
