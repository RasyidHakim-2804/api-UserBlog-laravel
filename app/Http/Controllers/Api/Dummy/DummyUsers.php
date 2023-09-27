<?php
namespace App\Http\Controllers\Api\Dummy;

trait DummyUsers
{
  public function getUser()
  {
    return [
      (object) [
          'id'   => '1',
          'name' => 'John Doe',
          'email'=> 'john.doe@example.com'
      ],
      (object) [
          'id'   => '2',
          'name' => 'Maria Putri',
          'email'=> 'maria.putri@example.com',
      ],
      (object) [
          'id'   => '3',
          'name' => 'Budi Santoso',
          'email'=> 'budi.santoso@example.com',
      ],
      (object) [
          'id'   => '4',
          'name' => 'Siti Rahayu',
          'email'=> 'siti.rahayu@example.com',
      ],
      (object) [
          'id'   => '5',
          'name' => 'David Pratama',
          'email'=> 'david.pratama@example.com',
      ],
    ];
  }
}
