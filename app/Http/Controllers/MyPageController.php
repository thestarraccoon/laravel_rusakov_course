<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class MyPageController extends Controller
{
    public function mypage(Request $request) {
            $clients = self::getPeopleList();
            return view('mypage', ['clients' => $clients]);
    }

    private function getPeopleList():array {
        $clients = [];

        for ($i = 0; $i < 3; $i++) {
            $clients[] = new stdClass();
            $clients[$i]->id = $i+ 22;
            $clients[$i]->name = "John Doe";
            $clients[$i]->email = "john.doe@example.com";
        }

        return($clients);
    }
}
