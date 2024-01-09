<?php

namespace App\Charts;

use App\Models\KelasMapel;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class KelasMapelChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

  
}
