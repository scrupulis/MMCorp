
  <?php

    function decode_json($json)
    {
      $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
      return json_decode($json,true);
    }

    function get_value_from_decoded_json($decoded_json , $key){
      return $decoded_json[$key];
    }

    // ニュース情報ファイルを取得
    $file_name_news = 'include/data/nestednews.json';
    $news_content = file_get_contents($file_name_news);


    if($news_content){

      // JSONをデコード
      // 入れ子になっているJSONまでデコードしてくれる
      $news_array = decode_json($news_content);
    
      // JSONをデコードした連想配列中の全てのキーを取得
      $keys = array_keys($news_array);
      
      foreach( $keys as $key ){
        
        $link = $news_array[$key]["link"];

        echo '<div class="row"><div class="col">'.$key.'</div>';
        
        if($link != ""){
          echo '<div class="col out"><a href="'.$news_array[$key]["link"].'">'.$news_array[$key]["text"].'</a></div></div>';
        }else{
          echo '<div class="col out">'.$news_array[$key]["text"].'</div></div>';
        }
      }
    }
    else{
      echo '<div class="row"><div class="col"></div>';
      echo '<div class="col">新着情報はありません</div></div>';
    }

  ?>