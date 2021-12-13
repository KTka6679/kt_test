<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns#">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="description" content="メイクアップアーティスト、トニータナカの展開するトニーズコレクションのwebサイトです。取り扱い製品のご案内・販売、スクールのご案内、ウェディングなど各種サービスのご案内を掲載しています。">
<meta name="keywords" content="トニータナカ,メイクアップ,化粧品,スクール,ウェディング,ネイル,ヘアメイク,スタジオ,サロン,製品案内">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>株式会社トニーズコレクション</title>
<link rel="icon" href="/assets/img/common/favicon.ico">
<meta property="og:title" content="株式会社トニーズコレクション">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.tony-tanaka.co.jp/">
<meta property="og:image" content="http://www.tony-tanaka.co.jp/assets/img/common/ogp.png">
<meta property="og:site_name" content="トニーズコレクション">
<meta property="og:description" content="メイクアップアーティスト、トニータナカの展開するトニーズコレクションのwebサイトです。取り扱い製品のご案内・販売、スクールのご案内、ウェディングなど各種サービスのご案内を掲載しています。">
<?php
	$srv = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'];

	//wp_enqueue_style('wp_styles', $srv.'/admin/wp-style.css');
	wp_enqueue_style('css_styles', $srv.'/assets/css/styles.css');
	wp_enqueue_script('library.js', $srv.'/assets/js/library.js');
	wp_enqueue_script('scripts.js', $srv.'/assets/js/scripts.js');
	wp_enqueue_script('ga.js', $srv.'/assets/js/ga.js');

  wp_enqueue_style('css_home', $srv.'/assets/css/page/home.css');
  wp_enqueue_script('home.js', $srv.'/assets/js/home.js');
?>
<?php wp_head(); ?>
</head>
<body id="home">
<!--header-->
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/_include/header.html");
?>
<!--//header-->
<main>
  <section>
    <div class="mv">
      <div class="mv-inner">
        <h2 class="mv__heading">ETERNAL<br>BEAUTY<br>PHILOSOPHY</h2>
        <div class="text-box">
          <p class="mv__text">人は外見だけどんなに取り繕っても<br>心が満たされていない状態では<br class="sp-only">本当の美しさは引き出せません。<br>これらが融合しあってこそ、<br>不変の美(エターナルビューティ)が<br class="sp-only">表現できるのです。<br>それがトニータナカが考える美容哲学<br>「エターナルビューティフィロソフィ」です。</p>
        </div>
      </div>
      <figure class="mv__image image-box is-box-shadow"><img src="/assets/img/home/mv_1.jpg" alt=""></figure>
      <figure class="mv__image image-box is-box-shadow"><img src="/assets/img/home/mv_2.jpg" alt=""></figure>
    </div><!-- /.mv -->
  </section>
  <section>
    <div id="message" class="message-block">
      <div class="content-box">
        <figure class="image-box is-box-shadow animation-box"><img src="/assets/img/home/pict_president.jpg" alt=""></figure>
        <div class="text-box is-box-shadow animation-box">
          <h3 class="heading-level3">MESSAGE</h3>
          <p>人は外見だけどんなに取り繕っても心が満たされなければ本当の美しさは引き出されません。これらが全て融合しあってこそ『エターナルビューティ（不変の美）』が表現されます。</p>
          <p>トニーズコレクションは美容哲学『エターナルビューティフィロソフィー』を会社の企業理念に置き、商品やサービス・技術・施設を通じ全てのお客様へ満足をしていただける会社を目指しております。これからも日本国内はもちろん、全世界に目を向け続け、時代や環境に即し、人々にとって最高の美を総合的に提案する企業として成長をしつづけてまいります。</p>
          <p class="text-right">代表取締役社長 トニータナカ</p>
        </div>
      </div>
    </div><!-- /.message-block -->
  </section>
  <section>
    <div id="items" class="items-block">
      <div class="content-box without-limit">
        <h2 class="heading-level2">ITEMS</h2>
        <div class="column-layout has-two-columns is-box-shadow animation-box">
          <div class="column-layout__item animation-box">
            <div class="background-image-box"></div>
          </div>
          <div class="column-layout__item">
            <div class="text-wrap">
              <div class="text-box">
                <p>時代がめまぐるしく変わり、人の生き方や考え方が変わっても、時を超えて受け継がれていく、不変の美容哲学。貴方に贈るスキンケア＆メイクアップはトニーズコレクションの想いを込めたメッセージです。</p>
              </div>
              <p><a href="http://www2.enekoshop.jp/shop/tony-tanaka/" class="basic-button has-blank-icon" target="_blank">ONLINE STORE</a></p>
            </div>
            <div class="link-wrap column-layout has-one-columns"><!-- banner2コ時はhas-two-colums -->
              <!-- div class="link-box">
                <a href="#" class="basic-link has-blank-icon">
                  <figure class="image-box"><img src="/assets/img/home/pict_items_link_1.jpg" alt=""></figure>
                  <div class="text-box text-center">
                    <p class="text-en">ONLINE<br>CATALOG</p>
                    <p class="text-jp">オンラインカタログ</p>
                  </div>
                </a>
              </div -->
              <div class="link-box">
                <a href="/rubylabel/" class="basic-link has-arrow-icon">
                  <figure class="image-box"><img src="/assets/img/home/pict_items_link_2.jpg" alt=""></figure>
                  <div class="text-box text-center">
                    <p class="text-en">RUBY LABEL</p>
                    <p class="text-jp">ルビーレーベル<br class="pc-only">シリーズ</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.items-block -->
  </section>
  <section>
    <div id="wedding" class="wedding-block">
      <div class="content-box without-limit">
        <h2 class="heading-level2">WEDDING</h2>
        <div class="column-layout has-two-columns is-box-shadow animation-box">
          <div class="column-layout__item animation-box">
            <div class="background-image-box"></div>
          </div>
          <div class="column-layout__item">
            <div class="text-wrap">
              <div class="text-box">
                <p>人生最高の感動で、お二人が結ばれる特別大切な日…。プロのテクニック、センス、キャリア…。そのすべてを注いで、美しいだけでなくクオリティの高い記念日をサポートいたします。</p>
              </div>
              <p><a href="https://www.tony-tanaka.co.jp/wedding/" class="basic-button has-blank-icon" target="_blank">WEDDING</a></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.wedding-block -->
  </section>
  <div class="horizontal-slide-block">
    <div class="infinity-slide">
      <figure class="infinity-slide__image pc-only">
        <img src="/assets/img/home/pict_scroll_word-pc.png" alt="ETERNAL BEAUTY PHILOSOPHY">
      </figure>
      <figure class="infinity-slide__image pc-only">
        <img src="/assets/img/home/pict_scroll_word-pc.png" alt="ETERNAL BEAUTY PHILOSOPHY">
      </figure>
      <div class="infinity-slide__background-image sp-only"></div>
    </div>
  </div>
  <section>
    <div id="salon" class="salon-block">
      <div class="content-box">
        <h2 class="heading-level2 text-center">SALON</h2>
        <div class="float-layout has-two-columns">
          <div class="float-layout__item is-box-shadow animation-box">
            <figure class="image-box"><img src="/assets/img/home/pict_salon_1.jpg" alt=""></figure>
            <div class="salon-box">
              <h3 class="salon__name">トニータナカ ビューティーメゾン 恵比寿店</h3>
              <div class="salon__address">
                <p>〒153-0062 東京都目黒区三田1-12-27<br>トニーズパワービューティガーデン1F</p>
                <a href="https://bit.ly/2tMzjYL" class="basic-button has-blank-icon" target="_blank">Google MAP</a>
              </div>
              <dl class="def-list">
                <dt>電話番号</dt>
                <dd><span class="tel-link">03-3716-6255</span></dd>
                <dt>営業時間</dt>
                <dd>平日/11:00～20:00　<br class="sp-only">土日祝/10:00～19:00</dd>
                <dt>定休日</dt>
                <dd>火曜日</dd>
              </dl>
              <a href="https://tony-tanaka-ebisu.com/" class="basic-button has-blank-icon is-website" target="_blank">Webサイト</a>
            </div>
          </div>
          <div class="float-layout__item is-box-shadow animation-box">
            <figure class="image-box"><img src="/assets/img/home/pict_salon_2.jpg" alt=""></figure>
            <div class="salon-box no-website">
              <h3 class="salon__name">トニータナカ ビューティーメゾン 芝公園</h3>
              <div class="salon__address">
                <p>〒105-8563 東京都港区芝公園4-8-1<br>ザ・プリンスパークタワー東京 内B2</p>
                <a href="https://bit.ly/2RT7d68" class="basic-button has-blank-icon" target="_blank">Google MAP</a>
              </div>
              <div class="column-layout has-two-columns">
                <dl class="def-list">
                  <dt>電話番号</dt>
                  <dd><span class="tel-link">03-5400-0715</span></dd>
                  <dt>営業時間</dt>
                  <dd>10:00～19:00</dd>
                </dl>
                <dl class="def-list">
                  <dt>FAX番号</dt>
                  <dd>03-5400-0713</dd>
                </dl>
              </div>
              <dl class="def-list">
                <dt>定休日</dt>
                <dd>年中無休（予約のみ受付）</dd>
              </dl>
            </div>
          </div>
          <div class="float-layout__item is-box-shadow animation-box">
            <figure class="image-box"><img src="/assets/img/home/pict_salon_3.jpg" alt=""></figure>
            <div class="salon-box">
              <h3 class="salon__name">TONY TANAKA STUDIO SHIBUYA</h3>
              <div class="salon__address">
                <p>〒150-0042 東京都渋谷区宇田川町3-7<br>ヒューリック渋谷公園通りビル5階</p>
                <a href="https://bit.ly/2GsrABH" class="basic-button has-blank-icon" target="_blank">Google MAP</a>
              </div>
              <div class="column-layout has-two-columns">
                <dl class="def-list">
                  <dt>電話番号</dt>
                  <dd><span class="tel-link">03-6455-2820</span></dd>
                  <dt>営業時間</dt>
                  <dd>11:00～19:00</dd>
                </dl>
                <dl class="def-list">
                  <dt>FAX番号</dt>
                  <dd>03-6455-2810</dd>
                </dl>
              </div>
              <dl class="def-list">
                <dt>定休日</dt>
                <dd>火曜日</dd>
              </dl>
              <a href="https://tony-tanaka-studio.com/" class="basic-button has-blank-icon is-website" target="_blank">Webサイト</a>
            </div>
          </div>
          <div class="float-layout__item is-box-shadow animation-box">
            <figure class="image-box"><img src="/assets/img/home/pict_salon_4.jpg" alt=""></figure>
            <div class="salon-box no-website">
              <h3 class="salon__name">TONY TANAKA STUDIO SHINAGAWA</h3>
              <div class="salon__address">
                <p>〒108-0074 東京都港区高輪4-10-30<br>品川プリンスホテルアネックスタワー2F</p>
                <a href="https://bit.ly/2vvFJvT" class="basic-button has-blank-icon" target="_blank">Google MAP</a>
              </div>
              <dl class="def-list">
                <dt>電話番号</dt>
                <dd><span class="tel-link">0120-065-577</span></dd>
                <dt>営業時間</dt>
                <dd>10:00～19:00</dd>
                <dt>定休日</dt>
                <dd>年中無休（予約のみ受付）</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.salon-block -->
  </section>
  <section>
    <div id="company" class="company-block">
      <div class="content-box without-limit">
        <h2 class="heading-level2 text-center">COMPANY</h2>
        <div>
          <div class="image-box-wrap animation-box"><figure class="image-box"><img src="/assets/img/home/pict_company_main.jpg" alt=""></figure></div>
          <div class="table-wrap animation-box">
            <table class="basic-table">
              <tr>
                <th>社名</th>
                <td>株式会社トニーズコレクション</td>
              </tr>
              <tr>
                <th>役員</th>
                <td>代表取締役社長 トニータナカ<br>代表取締役副社長 たなか涼子<br>取締役 小暮正明</td>
              </tr>
              <tr>
                <th>設立</th>
                <td>1984年（昭和59年6月）</td>
              </tr>
              <tr>
                <th>事務所</th>
                <td>
                  <p>【本社】<br>〒153-0062 東京都目黒区三田1-12-27　トニーズパワービューティガーデン4F<br>TEL <span class="tel-link">03-3716-6363</span>　<br class="sp-only">FAX 03-3716-6665</p>
                  <p>【福岡支店】<br>〒810-0021 福岡県福岡市中央区今泉1-10-21 マックビル802<br>TEL <span class="tel-link">092-714-6664</span>　<br class="sp-only">FAX 092-737-7796</p>
                  <p>【名古屋オフィス】<br>〒450-0002 愛知県名古屋市中村区名駅3-25-9 堀内ビル8F<br>TEL <span class="tel-link">052-485-8863</span>　<br class="sp-only">FAX 052-586-8087</p>
                  <p>【立川pit】物流センター<br>〒190-0023 東京都立川市柴崎町3-17-17<br>TEL <span class="tel-link">042-528-6484</span>　<br class="sp-only">FAX 042-528-6485</p>
                </td>
              </tr>
              <tr>
                <th>資本金</th>
                <td>1000万円</td>
              </tr>
              <tr>
                <th>事業<br class="sp-only">内容</th>
                <td>美容室経営、オリジナル化粧品の企画・製造・販売、ブライダルヘアメイク、CM・雑誌等媒体撮影向けヘアメイク、メイクアップスクール運営</td>
              </tr>
              <tr>
                <th>取引<br class="sp-only">銀行</th>
                <td>みずほ銀行　恵比寿支店　/　<br class="sp-only">三井住友銀行　恵比寿支店　/　<br>三菱UFJ銀行　渋谷支店　/　<br class="sp-only">多摩中央信用金庫　東立川支店</td>
              </tr>
              <tr>
                <th>協会<br class="sp-only">運営</th>
                <td>日本美容療法家協会（BTA：BEAUTY THERAPIST ASSOCIATION)<br>事務局 東京都目黒区三田1-12-27トニーズパワービューティガーデン<br>TEL <span class="tel-link">03-3716-6152</span></td>
              </tr>
              <tr>
                <th>沿革</th>
                <td><a href="javascript:void(0);" class="has-arrow-icon modal__open" data-modal="modal1">沿革を見る</a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="content-box is-box-shadow animation-box"><span id="access"></span>
        <div class="column-layout has-two-columns is-box-shadow">
          <div class="column-layout__item">
            <div class="map-box"><iframe src="https://www.google.com/maps?output=embed&z=15&ll=35.644891,139.7003022&q=トニータナカ+ビューティメゾン+恵比寿店" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
          </div>
          <div class="column-layout__item">
            <div class="text-box">
              <h3 class="heading-level3">ACCESS</h3>
              <p>〒 153-0062<br>東京都目黒区三田1-12-27 トニーズパワービューティガーデン</p>
              <p>JR恵比寿駅スカイウォーク出口より徒歩3分</p>
              <p>TEL <span class="tel-link">03-3716-6363</span></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.company-block -->
  </section>
  <section>
    <div class="link-block">
      <div class="content-box animation-box">
        <div class="column-layout has-two-columns">
          <div class="column-layout__item text-center">
            <h4 class="heading-level2">CONTACT</h4>
            <a href="/contact/" class="more-link">MORE</a>
          </div>
          <div class="column-layout__item text-center">
            <h4 class="heading-level2">RECRUIT</h4>
            <a href="/recruit/" class="more-link">MORE</a>
          </div>
        </div>
      </div>
    </div><!-- /.link-block -->
  </section>
  <section>
    <div id="news" class="news-block">
      <div class="content-box without-limit is-box-shadow animation-box">
        <h3 class="heading-level3 text-center">NEWS</h3>
        <?php  //NEWS
          $args = array(
            'post_type'  => 'post',
            'posts_per_page' => 10,
            'post_status' => 'publish',
          );
          $the_query = new WP_Query($args);

          $news = new Info();
          if($the_query->have_posts()):
        ?>
          <div class="table-wrap">
            <table class="basic-table">
            <?php
              while($the_query->have_posts()): $the_query->the_post();
              $id = $the_query->post->ID;
              $d = $news->get_data($id);
            ?>        
              <tr>
                <th><span class="th-wrap"><?=$d['date']?></span></th>
                <td><a href="<?=$d['permalink']?>"><?=$d['title']?><?=$d['new'] ? '<span class="icon-news">NEW</span>' : '';?></a></td>
              </tr>
            <?php 
              endwhile;
            ?>
            </table>
          </div>
        <?php
          endif;
        ?>
      </div>
    </div>
    <?php  //NEWS
      $args = array(
        'post_type'  => 'post',
        'posts_per_page' => 1,
        'post_status' => 'publish',
      );
      $the_query = new WP_Query($args);

      $news = new Info();
      if($the_query->have_posts()):
        while($the_query->have_posts()): $the_query->the_post();
          $id = $the_query->post->ID;
          $d = $news->get_data($id);
          if ($d['new']):?>
            <div class="news-follow">
              <a href="<?=$d['permalink']?>" class="news-follow-wrap">
                <div class="new">
                  <span class="icon">NEW</span>
                </div>
                <div class="text-wrap">
                  <div class="date"><?=$d['date']?></div>
                  <div class="title"><?=$d['title']?></div>
                </div>
              </a>
            </div>
          <?php
          endif;
        endwhile;
      endif;
    ?>
    <!-- /.news-block -->
  </section>
  
  
  <div class="banner-block">
    <div class="content-box">
      <ul class="column-layout has-three-columns banner-list">
        <li class="column-layout__item"><a href="https://www.msoj.jp/" target="_blank" class="image-box"><img src="/assets/img/home/pict_banner_1.jpg" alt="MSOJ 一般社団法人 日本メイクアップ連盟"></a></li>
        <li class="column-layout__item"><a href="https://www.msoj-mc.info/" target="_blank" class="image-box"><img src="/assets/img/home/pict_banner_2.jpg" alt="「kawaii」選手権大会 特設サイト"></a></li>
        <li class="column-layout__item"><a href="https://r-plus-tokyo.com/" target="_blank" class="image-box"><img src="/assets/img/home/pict_banner_3.jpg" alt="R+（リープラス）スカルプヘアシリーズ"></a></li>
      </ul>
    </div>
  </div><!-- /.banner-block -->
</main>
<!--footer-->
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/_include/footer.html");
?>
<!--//footer-->
<!--history-->
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/_include/history-modal.html");
  wp_footer();
?>
<!--//history-->
</body>
</html>