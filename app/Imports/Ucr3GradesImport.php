<?php

namespace App\Imports;

use App\Ucr3Grades;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class Ucr3GradesImport implements ToModel
{

    use Importable;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Ucr3Grades([
            'quiz1'    => $row[0],
            'quiz2'    => $row[1],
            'quiz3'    => $row[2]
        ]);
    }
}
