<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wiki;
use App\WikiLog;
use App\ChartLog;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class WikiController extends Controller
{
    public function select_join(Request $request){
        $wiki = new Wiki();
        $result = $wiki->wiki_join($request->store_id);
        return response()->json(['result'=>$result],Response::HTTP_OK);
    }

    // 店舗ごとのWiki取得
    public function select(Request $request){
        // 仮定のリクエスト作成及びjsonのデコード
        $wiki = new Wiki();
        $wiki_info = $wiki->wiki_select($request->store_id);
        if($wiki_info){
            return response()->json(['response'=>$wiki_info],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'no contents'],Response::HTTP_NOT_FOUND);
        }
    }

    // wikiの登録及びUPDATE
    public function register(Request $request){
        $register = $request;
        $wiki = new Wiki();
        $flag_wiki = $wiki->wiki_register($register);
        if($flag_wiki){
            $flag = response()->json(['message'=>'ok'],Response::HTTP_CREATED);
        }else {
            $flag = response()->json(['message'=>'error'],Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // ログの更新
        if($flag->status() == Response::HTTP_CREATED){
            $wiki_log = new WikiLog();
            $wiki_log->wiki_log_register($flag_wiki, $register->user_id);
        }

        return $flag;

    }

    // Wikiの削除
    public function delete(Request $request){
        $register = $request;
        $wiki = new Wiki();
        if($wiki->wiki_delete($register)){
            return response()->json(['message'=>'ok'],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'error'],Response::HTTP_NO_CONTENT);
        }
    }

}
