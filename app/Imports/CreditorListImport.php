<?php

namespace App\Imports;

use App\Models\CreditorList;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;

class CreditorListImport implements ToModel
{
    use Importable;
    public function model(array $row): Model|CreditorList|null
    {
        return new CreditorList([
            'name_ar' => $row[0],
            'name_en' => $row[1],
            'amount' => $row[2],
            'type' => $row[3],
        ]);
    }
}
