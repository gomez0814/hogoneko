<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    //
    public function list()
    {
        $cafes = Cafe::paginate(20);
        $currentPage = $cafes->currentPage();

        return view('cafes.list', compact('cafes', 'currentPage'));
    }

    public function listByPrefecture(Request $request)
    {
        $prefecture = $request->input('prefecture');

        if ($prefecture === "全て") {
            $cafes = Cafe::paginate(20);
        } else {
            $cafes = Cafe::where('prefecture', $prefecture)->paginate(20);
        }
        
        $currentPage = $cafes->currentPage();

        return view('cafes.list', compact('prefecture', 'cafes', 'currentPage'));
    }

    public function show($id)
    {
        $cafe = Cafe::findOrFail($id);
        // return view('cafes.show', ['cafe' => $cafe]);
        return view('cafes.show', compact('cafe'));
    }
}
