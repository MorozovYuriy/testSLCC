<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function first_task()
    {
        $stud = 28;
        $sport_stud_percent = 75;

        $sport_stud = $stud/100*$sport_stud_percent;

        $data['sport_stud'] = $sport_stud;

        return view('pages.first-task', $data);
    }

    public function second_task()
    {
        $str = "This server has 386 GB RAM and 5000 GB storage";
        $numbers = preg_replace("/[^0-9]/", ' ', $str);

        $data['numbers'] = $numbers;

        return view('pages.second-task', $data);
    }

    public function third_task()
    {
        $arr = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];

        $first_elem = array_shift($arr);

        $data['first_elem'] = $first_elem;

        return view('pages.third-task', $data);
    }

    public function fourth_task()
    {
        $a = 10;
        $b = 3;

        $c = $a%$b;

        $data['result'] = $c;
        return view('pages.fourth-task', $data);
    }

    public function fifth_task()
    {
        $a = [1,2,3,4,5];
        $b = 'Hello World';

        list($a, $b) = [$b, $a];

        $data['a'] = $a;
        $data['b'] = $b;

        return view('pages.fifth-task', $data);
    }

    public function sixth_task()
    {
        return view('pages.sixth-task');
    }

    public function seventh_task()
    {
        return view('pages.seventh-task');
    }

    public function eighth_task()
    {
        return view('pages.eighth-task');
    }

    public function nineth_task()
    {
        return view('pages.nineth-task');
    }
}
