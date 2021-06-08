
<html lang="ja">
  <head> 
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta description="株式会社エム・マーケティング　公式ホームページ"/>
    <!-- CSSリンク-->
    <link href="./include/css/reset.css" rel="stylesheet"/>
    <link href="./include/css/header.css" rel="stylesheet"/>
    <link href="./include/css/topmain.css" rel="stylesheet"/>
    <link href="./include/css/linkbutton.css" rel="stylesheet"/>
    <link href="./include/css/contact.css" rel="stylesheet"/>
    <link href="https://mmark.co.jp/media/publicresources/css/publicstyle.css" rel="stylesheet"/>
    <link href="./include/css/footer.css" rel="stylesheet"/>
    <link href="./include/css/publicstyle.css" rel="stylesheet"/>
    <link href="./include/css/topfv.css" rel="stylesheet"/>
    <!-- ファビコン設定-->
    <link href="https://mmark.co.jp/media/publicresources/images/mmark_logo.svg" rel="icon" type="image/svg+xml"/>
    <title>株式会社エム・マーケティング　公式ホームページ</title>
    <script src="./include/js/jquery3.4.1.min.js"></script>
  </head>
  <body>
    <div id="top-hero" class="top-hero">
      <header>
        <div class="inner">
          <div class="header-logo"><a href="./">
              <figure><img src="./include/images/mmark_logo_white.svg" oncontextmenu="return false;" onmousedown="return false;"/></figure></a></div>
          <nav class="pc">
            <ul>
              <li> <a href="./#business">事業案内</a></li>
              <li> <a href="./#company">会社情報</a></li>
              <li> <a href="./#contact">お問い合わせ</a></li>
              <li> <a href="./#news">新着情報</a></li>
              <li> <a href=".//sublayers/csr">CSR</a></li>
            </ul>
          </nav>
          <nav class="sp"> 
            <div class="hamberger-wrapper">
              <div class="inner"><a id="hamberger-toggle-switch">
                  <script src="./include/js/jquery3.4.1.min.js"></script>
                  <script src="./include/js/hambergertoggler.js"></script><span class="hambergar-bar"></span><span class="hambergar-bar"></span><span class="hambergar-bar"></span></a></div>
            </div>
          </nav>
        </div>
        <div id="sp-nav-body">
          <ul>
            <li> <a href="./#business">事業案内</a></li>
            <li> <a href="./#company">会社情報</a></li>
            <li> <a href="./#contact">お問い合わせ</a></li>
            <li> <a href="./#news">新着情報</a></li>
            <li> <a href=".//sublayers/csr">CSR</a></li>
          </ul>
        </div>
      </header>
      <section id="top-first-view">
        <div class="inner">
          <div class="background">
            <div class="background-screen">
              <div class="animation-panel">
                <div class="animation-cavas">
                  <div class="animation-cavas-inner">
                    <div class="logo">
                      <div class="wrapper"><img src="./images/navylogo_ci.png"/></div>
                    </div>
                    <div class="title">
                      <h1>「知」と「希望」に<br class="sp"/>あふれた社会を創る。</h1>
                    </div>
                    <div class="line"></div>
                    <div class="sub-title"> 
                      <h2>SMB特化型の<br class="sp"/>サクセスプラットフォームを提供しています。</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="info-panel">
                <div class="inner">
                  <div class="news-list">
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <main>
      <script src="./include/js/jquery3.4.1.min.js"></script>
      <script>
        $(function(){
            $(window).scroll(function (){
                $('.fadein').each(function(){
                    var targetElement = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    if (scroll > targetElement - windowHeight + 200){
                        $(this).css('opacity','1');
                        $(this).css('transform','translateY(0)');
                    }
                });
            });
        });
      </script>
      <div class="content-wrapper">
        <section id="business">
          <div class="inner">
            <div class="section-head fadein">
              <h1>Business</h1>
              <p class="subtitle">事業案内</p>
            </div>
            <div class="section-body">
              <section id="education" class="subsection fadein">
                <div class="business-card">
                  <div class="image-wrapper">
                    <figure> <img src="./images/education.jpg" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"/></figure>
                  </div>
                  <div class="text-wrapper">
                    <h2>社会人向け教育事業</h2>
                    <p>教えたい人と学びたい人とをつなげるプラットフォーム「MMビジネスアカデミー」を展開。<br/>著名人のビジネス講座を総合プロデュースします。 あなたの経営ノウハウをビジネス講座にして世の中に広めませんか？</p><a href="./sublayers/mmba" target="_blank" rel="noopener noreferrer" class="link-button">詳細はこちら</a>
                  </div>
                </div>
              </section>
              <section id="ad" class="subsection fadein">
                <div class="business-card">
                  <div class="image-wrapper">
                    <figure> <img src="./images/ad.jpg" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"/></figure>
                  </div>
                  <div class="text-wrapper">
                    <h2>広告代理事業</h2>
                    <p>SNS広告、リスティング広告運用代行<br/>LP制作から、集客コンサルティングまで「完全オーダーメイド」の広告運用を提供します。<br/><small>完全紹介制のため特別なお客様のみへのご案内となっております。</small></p>
                  </div>
                </div>
              </section>
              <section id="youtube" class="subsection fadein">
                <div class="business-card">
                  <div class="image-wrapper">
                    <figure> <img src="./images/youtube.png" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"/></figure>
                  </div>
                  <div class="text-wrapper">
                    <h2>YouTubeチャンネルプロデュース事業</h2>
                    <p>チャンネルの企画・初期運用・動画制作・集客チャネル化まで、お客様の様々な目的に則した形で提供させていただきます。※御相談を多くいただいておりますので、ご興味ある方はまずお問合せください。</p>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </section>
        <section id="company">
          <div class="inner">
            <div class="section-head fadein">
              <h1>Company</h1>
              <p class="subtitle">会社情報</p>
            </div>
            <div class="section-body">
              <section id="philosophies" class="subsection">
                <div class="section-head fadein">
                  <h2>Philosophies</h2>
                  <p class="subtitle">経営理念</p>
                </div>
                <div class="section-body fadein">
                  <div class="inner">
                    <div class="section-unique-box">
                      <figure> <img src="./images/mvv.svg" alt=""/>
                      </figure>
                    </div>
                  </div>
                </div>
              </section>
              <section id="message" class="subsection"> 
                <div class="section-head fadein">
                  <h2>Message</h2>
                  <p class="subtitle">代表メッセージ</p>
                </div>
                <div class="section-body fadein">
                  <div class="inner">
                    <div class="section-unique-box">
                      <div class="message-section-unique-box">
                        <div class="image-wrapper">
                          <figure class="pc"><img src="./images/about01.jpg"/></figure>
                          <figure class="sp"><img src="./images/about01sp.jpg"/></figure>
                        </div>
                        <div class="text-wrapper">
                          <p>
                            エム・マーケティングは、「知と希望にあふれた社会を創る」ことを
                            経営ビジョンとして掲げております。 
                            いつでも、どこでも、情報にアクセスできる時代においては、
                            自分に必要な情報を見極める事が非常に大切です。 
                            しかし、自分にとって必要な情報・サービスを判断する事は時に
                            パラダイムシフトが必要となる為、容易ではありません。
                            不確実性の高いこの世の中で、良い情報・サービスを分かりやすく世間に伝え、
                            関わる全ての方々に本当に必要な情報・サービスを届けたい。 我々はそんな熱い想いを持ち、
                            日々挑戦しております。 価値を見える化し、革新的なマーケティング力で各業界を牽引し、
                            世界中の人々から必要とされる企業であり続けるため、果敢に挑戦し、自らも進化を続けて参ります。
                          </p>
                          <p class="sign">株式会社エム・マーケティング<br/>原田正文　</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="profile" class="subsection">
                <div class="section-head fadein">
                  <h2>Company Profile</h2>
                  <p class="subtitle">会社概要</p>
                </div>
                <div class="section-body fadein">
                  <div class="inner"> 
                    <div class="section-unique-box">
                      <div class="company-profile-unique-box">
                        <table class="default-table">
                          <tr>
                            <th>商号</th>
                            <td>株式会社エム・マーケティング</td>
                          </tr>
                          <tr>
                            <th>代表者</th>
                            <td>原田正文</td>
                          </tr>
                          <tr> 
                            <th>設立</th>
                            <td>2015年7月</td>
                          </tr>
                          <tr>
                            <th>資本金</th>
                            <td>1,000千円</td>
                          </tr>
                          <tr> 
                            <th>事業内容</th>
                            <td>社会人向けの教育講座の提供<br/>及びその講師のプロデュース事業<br/>広告代理事業</td>
                          </tr>
                          <tr>
                            <th>売上高</th>
                            <td>940,000千円</td>
                          </tr>
                          <tr>
                            <th>主要取引先銀行</th>
                            <td>三井住友銀行<br/>みずほ銀行<br/>りそな銀行<br/>城南信用金庫<br/>さわやか信用金庫</td>
                          </tr>
                          <tr>
                            <th>主要監査法人</th>
                            <td>PwC京都監査法人</td>
                          </tr>
                          <tr>
                            <th>従業員数</th>
                            <td>54名（パート含む）</td>
                          </tr>
                          <tr>
                            <th>電話番号</th>
                            <td>03-6804-5580</td>
                          </tr>
                          <tr>
                            <th>受付時間</th>
                            <td>10:00 〜 18:00</td>
                          </tr>
                          <tr>
                            <th>本社所在地</th>
                            <td>下記<a href="#access">アクセス情報</a>に記載</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="datis-intro" class="subsection">
                <div class="section-head fadein">
                  <h2>数字で見るエム・マーケティング</h2>
                </div>
                <div class="section-body fadein">
                  <div class="inner"> 
                    <div class="section-unique-box">
                      <p>株式会社エム・マーケティングの様々な側面を数字で紹介します。</p>
                      <div class="button"><a href="./sublayers/datis" target="_blank" rel="noopener noreferrer" class="link-button">詳しく見る</a></div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="access">
                <div class="section-head fadein">
                  <h1>Acecess</h1>
                  <p class="subtiel">アクセス</p>
                </div>
                <div class="section-boyd fadein">
                  <div class="inner">
                    <div class="section-unique-box"> 
                      <div class="access-unique-box">
                        <div class="table-wrapper">
                          <table class="default-table">
                            <tr>
                              <th>本社所在地</th>
                              <td>〒102-0083<br/>東京都千代田区麹町3-2-9 麹町PREX5階</td>
                            </tr>
                            <tr>
                              <th>交通</th>
                              <td>■東京メトロ有楽町線「麹町駅」3番出口 徒歩1分<br/>■東京メトロ半蔵門線「半蔵門駅」6番出口 徒歩4分</td>
                            </tr>
                          </table>
                        </div>
                        <div class="map-wrapper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.707154942809!2d139.73621331525885!3d35.684212080193575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d9a22bc55b1%3A0x3277cb162b44a9ef!2z5qCq5byP5Lya56S-44Ko44Og44O744Oe44O844Kx44OG44Kj44Oz44Kw!5e0!3m2!1sja!2sjp!4v1592474945979!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="contact">
                <div class="section-head fadein">
                  <h1>Contact</h1>
                  <p class="subtitle">お問い合わせ</p>
                </div>
                <div class="section-body fadein">
                  <div class="inner">
                    <div class="section-unique-box"> 
                      <div class="contact-unique-box"> 
<main>
    <article id="common-article">
        <div class="contact-form-outer">
            <div class="contact-form-wrapper">

                    <div class="contact-form-col-wrapper--" style="display: flex; justify-content: center;">
                        <a id = "button1" class="submit-button link-button" href="https://www.secure-cloud.jp/sf/business/1576745508ZOlnBngb" >お問い合わせはこちら </a>
                    </div>
                    

            </div>
        </div>
    </article>


</main>

                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="news" class="fadein">
                <div class="section-head">
                  <h1>News</h1>
                </div>
                <div class="section-body">
                  <div class="section-unique-box"> 
                    <div class="news-unique-box">   
                      <div class="news-list">
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
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </section>
      </div><!-- SATORI API CALLER FOR THE COPORATE SITE.  -->
<!-- SATORI連携は廃止されました -->
    </main>
  </body>
  <footer>
    <div class="inner">
      <div class="menu">
        <nav> 
          <ul>
            <li> <a href="./#business">事業案内</a></li>
            <li> <a href="./#company">会社情報</a></li>
            <li> <a href="./#contact">お問い合わせ</a></li>
            <li> <a href="./#news">新着情報</a></li>
            <li> <a href=".//sublayers/csr">CSR</a></li>
          </ul>
        </nav>
        <nav> 
          <ul>
            <li> <a href="./sublayers/datis">数字で見るエム・マーケティング</a></li>
          </ul>
        </nav>
        <div class="info">
          <div class="copy-right">
            <p class="footer-text">&copy; 2020 <a href="./">株式会社エム・マーケティング </a></p>
          </div>
          <div class="legal-link"><a href="./sublayers/privacypolicy" class="footer-text">プライバシーポリシー</a><a href="./sublayers/tokusho" class="footer-text">特定商法取引法に基づく表示</a></div>
        </div>
      </div>
    </div>
  </footer>
</html>