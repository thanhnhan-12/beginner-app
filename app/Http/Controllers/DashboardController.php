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
                'age' => '52'
            ],

            [
                'name' =>  'Avram',
                'age' => '58'
            ],

            [
                'name' =>  'Erik Ten Hag',
                'age' => '50'
            ]
        ];

        return view("dashboard", ['users' => $users]);
    }
}
