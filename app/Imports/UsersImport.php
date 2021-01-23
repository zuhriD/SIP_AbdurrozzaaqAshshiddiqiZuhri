<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;

use Illuminate\Support\Facades\Hash;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
  

    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'username' => $row[1],
            'email' => $row[2],
            'password' => Hash::make($row[3]),
            'role_id'=> 2,
        ]);
    }
}
