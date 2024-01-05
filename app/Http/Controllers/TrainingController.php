<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Training;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::all();
        return view('training.index', ['trainings' => $trainings]);
    }

    public function create()
    {
        return view('training.create');
    }
}
