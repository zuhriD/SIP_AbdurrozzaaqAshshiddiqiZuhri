<?php

namespace App\Imports;

use App\Profile;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class ProfilesImport implements WithMappedCells, ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

     public function mapping(): array
    {
        return [
            'nama_lengkap' => 'A2',
            'gender' => 'B2',
            'tgl_lahir' => 'C2',
            'alamat' => 'D2',
            'portofolio' => 'E2',
            'pekerjaan' => 'F2',
        ];
    }
    public function model(array $row)
    {
        return new Profile([
            'user_id' => session('id'),
            'nama_lengkap' => $row['nama_lengkap'],
            'gender' => $row['gender'],
            'tgl_lahir' => $row['tgl_lahir'],
            'alamat' => $row['alamat'],
            'portofolio' => $row['portofolio'],
            'pekerjaan' => $row['pekerjaan'],
        ]);
    }
}
