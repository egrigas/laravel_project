<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('conferences.index', ['conferences' => $conferences]);
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        $conference = new Conference;
    $conference->name = $request->name;
    $conference->description = $request->description;
    $conference->date_start = $request->date_start;
    $conference->date_end = $request->date_end;
    $conference->location= $request->location;
    $conference->save();

    return redirect()->route('conferences.index');
    }

    public function show($id)
    {
        $conference = Conference::find($id);
    return view('conferences.show', ['conference' => $conference]);
    }

    public function edit($id)
    {
        $conference = Conference::find($id);
    return view('conferences.edit', ['conference' => $conference]);
    }

    public function update(Request $request, $id)
    {
        $conference = Conference::find($id);
    $conference->name = $request->name;
    $conference->description = $request->description;
    $conference->date_start = $request->date_start;
    $conference->date_end = $request->date_end;
    $conference->location= $request->location;
    $conference->save();

    return redirect()->route('conferences.index');
    }

    public function destroy($id)
    {
        $conference = Conference::find($id);
    $conference->delete();

    return redirect()->route('conferences.index');
    }
}
