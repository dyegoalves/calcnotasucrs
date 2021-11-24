<?php

namespace App\Console\Commands\ucr3;


use Illuminate\Console\Command;
use App\Http\Controllers\ucr3\grades\IntegUcr3GradesController;

class IntegUcr3Grades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'integ:ucr3grades';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $a = new IntegUcr3GradesController();
        $this->info($a->processGrades());
    }
}
