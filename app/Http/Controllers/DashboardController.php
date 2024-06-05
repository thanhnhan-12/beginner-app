<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' =>  'Joel',
                'age' => '50'
            ],

            [
                'name' =>  'Avram',
                'age' => '55'
            ]
        ];

        return view("dashboard", ['users' => $users]);
    }
}
