<?php

namespace App\Http\Controllers;

use App\Models\TravelLog;
use Illuminate\Http\Request;

class TravelLogController extends Controller
{
    public function index() {
        $travel_log = TravelLog::all();
        return view('travel.index', compact('travel_log'));
    }

    public function create() {

        // menampilkan view form tambah data
        return view('travel.create');
    }


    public function show($id) {
        $travel_log = TravelLog::find($id);

        return view('travel.show', compact('travel_log'));
    }

    public function store(Request $request) {
        TravelLog::create([
            'date'   => $request->date,
            'time'     => $request->time,
            'location'    => $request->location,
            'temperature'      => $request->temperature
        ]);

        return redirect()->route('travel.index');
    }

    public function edit($id) {
        $travel_log = TravelLog::find($id);

        return view('travel.edit', compact('travel_log'));
    }

    public function update(Request $request, $id) {
        $travel_log = TravelLog::find($id);
        $travel_log->date               = $request->date;
        $travel_log->time               = $request->time;
        $travel_log->location           = $request->location;
        $travel_log->temperature        = $request->temperature;

        $travel_log->save();

        return redirect()->route('travel.index');
    }

    public function delete($id) {
        $travel_log = TravelLog::find($id);
        $travel_log->delete();

        return redirect()->route('travel.index');
    }
}
