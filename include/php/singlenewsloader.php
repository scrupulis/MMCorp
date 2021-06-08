
<?php

// require("newsloader.php");

// ニュース情報ファイルを取得
$file_name_news = 'include/data/nestednews.json';
$news_content = file_get_contents($file_name_news);

if($news_content){

    // JSONをデコード
    // 入れ子になっているJSONまでデコードしてくれる
    $news_array = decode_json($news_content);

    // JSONをデコードした連想配列中の全てのキーを取得
    $keys = array_keys($news_array);

    $link = $news_array[$keys[0]]["link"];

    echo '<div class="row"><div class="col white">News</div>';
    echo '<div class="row"><div class="col white">'.$keys[0].'</div>';
    
    if($link != ""){
        echo '<div class="col out white"><a class="white" href="'.$news_array[$keys[0]]["link"].'">'.$news_array[$keys[0]]["text"].'</a></div></div>';
    }else{
        echo '<div class="col out white">'.$news_array[$keys[0]]["text"].'</div></div>';
    }

}
else{
echo '<div class="row"><div class="col"></div>';
echo '<div class="col">新着情報はありません</div></div>';
}

?>