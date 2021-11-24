<?php

namespace App\Http\Controllers\ucr3\grades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\app\Http\Controllers\ImportUcr3Grades;
use App\Imports\Ucr3GradesImport;

class IntegUcr3GradesController extends Controller
{
    public function processGrades()
    {
        $link = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRrxO_IL_95AhLGtL4hrt6Q282uPBMV-f2J8pusiuZUq0atUJ0odgCyM4APhZtxqA/pub?output=csv&key=AIzaSyAqi6jAce8kgoLraI3HD8JqGS3GxGtGOpU";

        $array = (new Ucr3GradesImport)->import($link, 'local', \Maatwebsite\Excel\Excel::CSV);

        return $array;
        //return $a;
    }

    //Ler o 
    public function readCSV()
    {
    }
}
