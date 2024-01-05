<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'length' => 'required|numeric',
            'max_people' => 'required|numeric',
            'type' => 'required',
        ]);

        if ($request->type != 'enfant' && $request->type != 'adulte') {
            return redirect()->route('training.create');
        }

        Training::create([
            "name" => $request->name,
            "length" => $request->length,
            "max_people" => $request->max_people,
            "type" => $request->type
        ]);


        return redirect()->route('training.index');
    }

    public function edit($id)
    {
        $training = Training::find($id);
        return view('training.edit', ['training' => $training]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'length' => 'required|numeric',
            'max_people' => 'required|numeric',
            'type' => 'required',
        ]);

        if ($request->type != 'enfant' && $request->type != 'adulte') {
            return redirect()->route('training.edit');
        }

        $training = Training::find($id);
        $training->update([
            "name" => $request->name,
            "length" => $request->length,
            "max_people" => $request->max_people,
            "type" => $request->type
        ]);

        return redirect()->route('training.index');
    }

    public function destroy($id)
    {
        $training = Training::find($id);
        $training->delete();
        return redirect()->route('training.index');
    }
}
