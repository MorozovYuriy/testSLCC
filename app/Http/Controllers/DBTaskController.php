<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DBTaskController extends Controller
{
    public function first_db_task()
    {
        return view('pages.first-db-task');
    }

    public function second_db_task()
    {
        $result = DB::select('SELECT bids.name FROM bids WHERE price=(SELECT MAX(price) FROM bids);');

        foreach ($result as $index) {
            $data['result'] = $index->name;
        }

        return view('pages.second-db-task', $data);
    }

    public function third_db_task()
    {
        $result = DB::select('SELECT events.caption FROM events WHERE events.id NOT IN (SELECT id_event FROM bids);');

        foreach ($result as $index) {
            $data['result'] = $index->caption;
        }

        return view('pages.third-db-task', $data);
    }

    public function fourth_db_task()
    {
        $result = DB:: select('SELECT events.caption FROM events 
INNER JOIN bids ON events.id=bids.id_event
GROUP BY events.caption
HAVING COUNT(events.caption) > 3');

        foreach ($result as $index) {
            $data['result'] = $index->caption;
        }

        return view('pages.fourth-db-task', $data);
    }

    public function fifth_db_task()
    {

        $result = DB::select('SELECT events.caption, COUNT(events.caption) FROM events 
INNER JOIN bids ON events.id=bids.id_event
GROUP BY events.caption
ORDER BY COUNT(events.caption) DESC LIMIT 1');

        foreach ($result as $index) {
            $data['result'] = $index->caption;
        }

        return view('pages.fifth-db-task', $data);
    }
}
