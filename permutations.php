<?php
function permutations($list, $num, $case=[], $all_case=[])
{
    $list_count = count($list);
    if ($num>$list_count){                  // エラー
        return [];
    }
    if ($num==0 || $list_count==0){         // 探索終了
        $all_case[] = $case;
        return $all_case;
    }

    for ($i=0; $i<$list_count; $i++){
        $target = $list;                    // 初期状態に戻す
        array_push($case, $target[$i]);     // 値を追加

        unset($target[$i]);                 // リストから値を削除
        $target = array_values($target);    // 添字再設定

        // 次の桁を探索
        $all_case = permutations($target, $num-1, $case, $all_case);

        array_pop($case);                   // 値を削除
    }
    
    return $all_case;
}
