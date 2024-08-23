<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function create()
    {
        return view('grades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'grades.*' => 'required|numeric|min:0|max:10',
        ]);

        $grades = $request->input('grades');
        $average = array_sum($grades) / count($grades);

        return view('grades.result', compact('average'));
    }
}
