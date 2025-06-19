<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lidojums;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Lidojums::query();

        // Filter by flight number or destination
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('lidojuma_numurs', 'like', "%{$search}%")
                    ->orWhere('uz', 'like', "%{$search}%");
            });
        }

        // Validate sort column and order
        $allowedSorts = ['id', 'lidojuma_numurs', 'uz', 'izlidosanas_laiks', 'status'];
        $sortBy = in_array($request->input('sort_by'), $allowedSorts) ? $request->input('sort_by') : 'id';
        $sortOrder = $request->input('sort_order') === 'desc' ? 'desc' : 'asc';

        // Use pagination instead of get() for better performance
        $flights = $query->orderBy($sortBy, $sortOrder)->paginate(10)->withQueryString();

        return view('admin.dashboard', compact('flights', 'sortBy', 'sortOrder'));
    }
}
