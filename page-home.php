<?php
/**
 * Template Name: ホーム
 */

get_header();
?>

	<!-- mainvisual -->

  <section id="mainvisual">
        <div class="container text">
        <h1>今はまだ<br class="sp">WEBサイト制作の<br class="sp">ひよっ子</h1>
        <p>
          『 でも、<!-- <br class="sp"> -->「 創りたい・現したい・価値を届けたい。」常にそんな思いで<br class="sp">WEBサイトを制作しています 』
        </p>
        </div>
        <a href="#section-about" class="mainvisual-arrow">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/mainvisual-arrow.svg" alt="次のコンテンツへ">
        </a>
      </section>

      <!-- about -->

      <section id="section-about">
        <div class="container">
          <h2>できる限りのご要望に<br class="sp">お応えします</h2>
          <p>WEB制作のプロフェッショナルを目指し、動画教材を活用してサイト制作、主にコーディングからプログラミングのスキルやphotoshop・illustlatorによるワイヤーフレーム作成、画像加工、簡単なポスター作成等のスキルを習得してきました。経験値は低いですが、クライアントの背景・ご要望に添ったWEBサイトを、クライアントと共に作り上げるという意識のもと取り組んでおります。</p>
          <a class="button" href="#section-services">サービス</a>
        </div>
      </section>

      <section id="section-services">
        <div class="container">
          <h2>サービス</h2>
          <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
              <div class="inner">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-html5.svg" alt="HTML5">
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
              <div class="inner">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-css3.svg" alt="CSS3">
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
              <div class="inner">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-jquery.svg" alt="jQuery">
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
              <div class="inner">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-wordpress.svg" alt="WordPress">
              </div>
            </div>
          </div>
          <p>WEBサイト制作の最新技術を用いて、<br class="sp">クライアントのご要望を実現します。</p>
        </div>
      </section>

      <!-- portfolio -->

      <section id="section-portfolio">
        <section id="section-portfolio-result">
          <div class="container-fluid">
            <div class="row gallery">
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio1.jpg" class="portfolio-box" title="テキストロゴをスマートオブジェクトにて別ファイルから木目の背景に配置。その後ロゴのスマートオブジェクトレイヤーにレイヤー効果(ベベルとエンボス・シャドウ・サテン・グラデーションオーバーレイ・ドロップシャドウ)をかけてロゴが木目の上で凹んで立体的に見えるように加工しました。">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio1.jpg" alt="ポートフォリオ1 木目、凹みアレンジ" />
                  <div class="portfolio-box-caption">
                    <div class="category">
                      ポートフォリオ1
                    </div>
                    <div class="name">
                      木目、凹みアレンジ
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio2.jpg" class="portfolio-box" title="バニシングポイントで壁面の3D形状に合わせロゴを設置。ロゴレイヤーを乗算・不透明度・さらにぼかし(ガウス)をかけ壁になじむようにアレンジしました。">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio2.jpg" alt="ポートフォリオ２ 壁面ロゴアレンジ" />
                  <div class="portfolio-box-caption">
                    <div class="category">
                      ポートフォリオ２
                    </div>
                    <div class="name">
                      壁面ロゴアレンジ
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio3.jpg" class="portfolio-box" title="ビル群のみの背景レイヤーからカンバスサイズを下方2倍にして反転レイヤーを作成。自由変形により上方の画像を反転。水面のさざ波を表現したテクスチャファイルを作成し、それを反転レイヤーに読み込ませビルの水面への反射を表現しました。">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio3.jpg" alt="ポートフォリオ３ 水面に反射" />
                  <div class="portfolio-box-caption">
                    <div class="category">
                      ポートフォリオ３
                    </div>
                    <div class="name">
                      水面に反射
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio4.jpg" class="portfolio-box" title="コピースタンプツールを用いて森の背後にあった赤色の建物と砂浜の目立った小石を消去し、さらにトーンカーブを用いて画像全体の明るさを調整しました。">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio4.jpg" alt="ポートフォリオ４ 消去とトーンアレンジ" />
                  <div class="portfolio-box-caption">
                    <div class="category">
                      ポートフォリオ４
                    </div>
                    <div class="name">
                      消去とトーンアレンジ
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio5.jpg" class="portfolio-box" title="机・ガンダム・公園の3つの画像を用意。まずはガンダムを公園の上に立たせるような処理をします。その後、ガンダム画像に対し選択範囲の変形を行い影をつけ、自由変形やワープモードを用いることで机の上で紙が垂れている表現や机の上でガンダムが立っているような処理を加えます。そして、ガンダム画像と公園画像のコピーを作成してレイヤーマスクをかけ、下の紙からガンダム部分のみをくり抜いて立たせるような表現をしました。">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio5.jpg" alt="ポートフォリオ５ ガンダムアレンジ" />
                  <div class="portfolio-box-caption">
                    <div class="category">
                      ポートフォリオ５
                    </div>
                    <div class="name">
                      ガンダムアレンジ
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio6.jpg" class="portfolio-box" title="パズルのマスの入ったテクスチャーファイルをillustlatorで作成しておき、それをもとに散らばっているパズル１つ１つのレイヤーを作成。さらに別のレイヤーにてパズルの角度を変えて表示し木目画像・風景画像と合成することで、風景画像のパズルが散らばった表現を加えました。">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio6.jpg" alt="ポートフォリオ６ パズル風アレンジ" />
                  <div class="portfolio-box-caption">
                    <div class="category">
                      ポートフォリオ６
                    </div>
                    <div class="name">
                      パズル風アレンジ
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio7.jpg" class="portfolio-box" title="｢NEON｣の文字に対して、テキストをラスタライズし水平パーツと垂直パーツに分けてレイヤーを作成。さらに水平パーツと垂直パーツのレイヤーを3つずつ用意。それぞれにベベルとエンボス・シャドウ・光彩・ドロップシャドウ・輪郭を調整し、ネオン文字風の表現を加えました。">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio7.jpg" alt="ポートフォリオ７ ネオン風アレンジ" />
                  <div class="portfolio-box-caption">
                    <div class="category">
                      ポートフォリオ７
                    </div>
                    <div class="name">
                      ネオン風アレンジ
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio8.jpg" class="portfolio-box" title="花びら画像ファイル(背景黒)とテキストロゴ用のファイルを作成。花びら画像にレイヤーマスクをかけ花びらのみのマスクレイヤーを作成します。別で用意したテキストロゴ用のポスターファイルに花びらマスクレイヤーを複製。花びらマスクレイヤー、その上にテキストロゴレイヤーを設置。その後テキストロゴを入力し、さらにテキストロゴレイヤーの上に花びらマスクレイヤーのコピーを置きます。最後に最上の花びらマスクレイヤー(レイヤーマスク)に対しブラシをかけ、一部のテキストロゴを浮き立たせたような表現を加え完成です。">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio8.jpg" alt="ポートフォリオ８ ポスター作成" />
                  <div class="portfolio-box-caption">
                    <div class="category">
                      ポートフォリオ８
                    </div>
                    <div class="name">
                      ポスター作成
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>

        <section id="section-portfolio-pdf">
          <h3>実績ダウンロード</h3>

          <a class="button" href="<?php echo get_template_directory_uri(); ?>/assets/files/sample.pdf" download="SWINDLER実績.pdf">PDFダウンロード</a>
        </section>
      </section>


<!-- news -->

<section id="section-news" >
  <div class="container">
    <h2>お知らせ</h2>

    <?php
    $arg = array(
      'posts_per_page' => 5, // 表示する件数
      'orderby' => 'date', // 日付でソート
      'order' => 'DESC', // DESCで最新から表示、ASCで古いものから表示
      'category_name' => 'news', // 表示したいカテゴリーのスラッグを指定
      'post_status' => 'publish'
    );
    $posts = get_posts( $arg );

    // echo '<pre>';
    // var_dump($posts);
    // echo '<pre>';
    ?>

    <?php if( $posts ): ?>
      <table class="table table-borderless">
        <?php
        foreach ($posts as $post):
          // var_dump($post);
          setup_postdata( $post );
        ?>
          <tr>
            <td><?php the_time( 'Y/n/j' ); ?></td>
            <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
          </tr>

        <?php endforeach; ?>

        <?php wp_reset_postdata(); ?>
      </table>
    <?php endif; ?>


    <?php
    // お知らせ一覧のURIを取得
    $category_id = get_cat_ID('お知らせ');
    $category_link = get_category_link($category_id);
    // var_dump($category_link);
    ?>

    <!-- <a class="button" href="/category/news/">お知らせ一覧</a> *修正しやすいのはこっち！ -->
    <a class="button" href="<?php echo $category_link; ?>">お知らせ一覧</a>
  </div>
</section>


      <!-- contact -->

      <section id="section-contact" >
        <div class="container">
          <h2>お問い合わせはお気軽に</h2>
          <p>どのようなご相談もお気軽にご連絡ください。</p>
          <div class="row">
            <div class="col-6 tel">
              <a href="tel:05000000000">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-tel.svg" alt="お電話でのお問い合わせ">
                <span class="en">050(0000)0000</span>
              </a>
            </div>
            <div class="col-6 email">
              <a href="mailto:contact@email.com">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-email.svg" alt="emailでのお問い合わせ">
                <span class="en">contact@email.com</span>
              </a>
            </div>
          </div>
        </div>
      </section>

<?php
get_footer();
