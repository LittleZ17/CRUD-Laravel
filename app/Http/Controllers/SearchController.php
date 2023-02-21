<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        $results = DB::table('quotes')
                    ->where('', '%' . $searchQuery . '%')
                    ->get();

        return view('search_results', ['results' => $results]);
    }
}