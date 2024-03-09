<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;

class SnsController extends Controller
{
    public function list(Request $request)
    {
        $sns = $request->input('sns');

        // SNS選択されていない場合（初期表示）
        if (empty($sns)){

            return view('sns.list');
        }

        // 選択されたSNSのカラムが空でないレコードを取得
        $cafes = Cafe::orderBy('address', 'asc')->whereNotNull($sns)->paginate(20);

        // ページネーションリンク押下時に選択されていたSNS情報も送信
        $cafes->appends(['sns' => $sns]);
        
        return view('sns.list', compact('sns', 'cafes'));
    }
}
