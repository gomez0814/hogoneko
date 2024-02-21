<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    // 初期表示（全件表示）
    public function list()
    {
        $cafes = Cafe::orderBy('name', 'asc')->paginate(20);
        $currentPage = $cafes->currentPage();

        return view('cafes.list', compact('cafes', 'currentPage'));
    }

    // 都道府県選択時表示
    public function listByPrefecture(Request $request)
    {
        $prefecture = $request->input('prefecture');

        if ($prefecture === "全て") {
            $cafes = Cafe::orderBy('name', 'asc')->paginate(20);
        } else {
            $cafes = Cafe::orderBy('address', 'asc')->where('prefecture', $prefecture)->paginate(20);
        }
        
        $currentPage = $cafes->currentPage();

        return view('cafes.list', compact('prefecture', 'cafes', 'currentPage'));
    }

    // 猫カフェ名リンク押下時
    public function show($id)
    {
        $cafe = Cafe::findOrFail($id);
        return view('cafes.show', compact('cafe'));
    }
}
