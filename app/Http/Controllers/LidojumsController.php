<?php

namespace App\Http\Controllers;

use App\Models\Lidojums;
use Illuminate\Http\Request;

class LidojumsController extends Controller
{
    public function index(Request $request)
    {
        $query = Lidojums::query();

        // Filtering logic
        if ($request->filled('no')) {
            $query->where('no', 'like', '%' . $request->no . '%');
        }

        if ($request->filled('uz')) {
            $query->where('uz', 'like', '%' . $request->uz . '%');
        }

        if ($request->filled('lidojuma_numurs')) {
            $query->where('lidojuma_numurs', 'like', '%' . $request->lidojuma_numurs . '%');
        }

        $flights = $query->paginate(10)->appends($request->all()); // keep filters when paginating

        return view('lidojumi.index', compact('flights'));
    }

}
