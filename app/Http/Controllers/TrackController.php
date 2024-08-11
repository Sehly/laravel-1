<?php

namespace App\Http\Controllers;

use App\Models\Track; // Corrected this line to import the Track model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{

    function index()
    {
        $tracks= Track::all();
        return view('tracks', compact("tracks"));
    }

    function view($id)
    {
        $track = Track::find($id);
        return view('trackData', compact("track"));
    }

    public function destroy($id)
    {
        $tracks = Track::find($id);
        $tracks->delete();

        return redirect()->route('tracks.index')->with('success', 'Track deleted successfully');
    }
}
