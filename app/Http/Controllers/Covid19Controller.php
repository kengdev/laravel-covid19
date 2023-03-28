<?php

namespace App\Http\Controllers;

class Covid19Controller extends Controller
{
    public function index()
    {
        $reports = [
            (object) ["country" => "Thailand", "date" => "2020-04-19", "total" => "2765", "active" => "790",
                "death" => "47", "recovered" => "1928"],
            (object) ["country" => "Thailand", "date" => "2020-04-18", "total" => "2733", "active" => "899",
                "death" => "47", "recovered" => "1787"],
            (object) ["country" => "Thailand", "date" => "2020-04-17", "total" => "2700", "active" => "964",
                "death" => "47", "recovered" => "1689"],
            (object) ["country" => "Thailand", "date" => "2020-04-16", "total" => "2672", "active" => "1033",
                "death" => "46", "recovered" => "1593"],
            (object) ["country" => "Thailand", "date" => "2020-04-15", "total" => "2643", "active" => "1103",
                "death" => "43", "recovered" => "1497"],
        ];

        return view("covid19.index", compact("reports"));
    }
}
