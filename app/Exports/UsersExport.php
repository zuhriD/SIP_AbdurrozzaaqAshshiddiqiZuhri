<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   
     public function view(): View
    {
        return view('users.excel', [
            'data' => session('d')
        ]);
    }
}
