<?php
function permutations($list, $length, $case=[], $results=[])
{
    $list_count = count($list);
    if ($length>$list_count){               // エラー
        return [];
    }
    if ($length===0 || $list_count===0){    // 探索終了
        $results[] = $case;
        return $results;
    }
    for ($i=0; $i<$list_count; $i++){
        $target = $list;                    // 初期状態に戻す
        array_push($case, $target[$i]);     // 値を追加
        unset($target[$i]);                 // リストから値を削除
        $target = array_values($target);    // 添字再設定
        // 次の桁を探索
        $results = permutations($target, $length-1, $case, $results);
        array_pop($case);                   // 値を削除
    }
    
    return $results;
}
