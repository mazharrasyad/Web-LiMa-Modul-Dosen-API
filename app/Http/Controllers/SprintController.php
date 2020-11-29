<?php

namespace App\Http\Controllers;
use App\Sprint;

class SprintController extends Controller
{
    public function index()
    {
        return array('results' => Sprint::all());
    }
}
