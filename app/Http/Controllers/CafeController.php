<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    // 都道府県選択時表示
    public function list(Request $request)
    {
        $prefecture = $request->input('prefecture');

        // 都道府県が選択されていない場合（初期表示）
        if (empty($prefecture)){
            
            $cafes = Cafe::orderBy('name', 'asc')->paginate(20);
            return view('cafes.list', compact('cafes'));
        }

        // 都道府県が選択されている場合
        if ($prefecture === "全て") {
            $cafes = Cafe::orderBy('name', 'asc')->paginate(20);
        } else {
            $cafes = Cafe::orderBy('address', 'asc')->where('prefecture', $prefecture)->paginate(20);
        }

        // ページネーションリンク押下時に選択されていた都道府県情報も送信
        $cafes->appends(['prefecture' => $prefecture]);
        
        return view('cafes.list', compact('prefecture', 'cafes'));
    }

    // 猫カフェ名リンク押下時
    public function show($id)
    {
        $cafe = Cafe::findOrFail($id);
        return view('cafes.show', compact('cafe'));
    }
}
