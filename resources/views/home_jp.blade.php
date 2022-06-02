@extends('layouts.main_layout')

@section('content')
<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<header href="home" class="header navbar-fixed-top">
    <div class="navbar navbar-default main-menu">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand"><img src="{{ asset('template/main/images/logo3.png') }}" alt="Logo" /></a>
                <!-- <a class="navbar-brand" href="index.html"></a> -->
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#works" class="">機関</a></li>
                    <li><a href="#program" class="">プログラム</a></li>
                    <li><a href="#message" class="">問い合わせ</a></li>
                    <li class="langflag">
                        <div>
                            <a href="{{ route('change_lang', 'id') }}" style="border: 0.3px black solid" class="flag-icon flag-icon-id"></a>&nbsp
                            <a href="{{ route('change_lang', 'en') }}" style="border: 0.3px black solid" class="flag-icon flag-icon-us"></a>&nbsp
                            <a href="{{ route('change_lang', 'jp') }}" style="border: 0.3px black solid" class="flag-icon flag-icon-jp"></a>
                        </div>
                    </li>
                        <!--<select id="selectLanguage" onchange="switchLanguage()">
                            <option value="english"><div class="flag-icon flag-icon-us"></div>English</option>
                            <option value="indonesia" selected><span class="flag-icon flag-icon-id"></span>Indonesia</option>
                            <option value="japanese">Japanese</option>
                        </select>-->
                </ul>
            </div>
        </div>
    </div> <!-- end of navbar -->
</header>

<section id="home" class="bbggimage">
    <div class="header-image homepage2banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 hmheading-text wow zoomIn" data-wow-duration=".5s">
                    <img src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div> <!-- end of row -->
            <div class="scrolldown">
                <a href="#works" class="scroll_btn"></a>
            </div>
        </div> <!-- end of container -->
    </div>
</section>

<section id="works" class="center-content">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>機関について</h1>
                    <p>ウィウィタン・バル・スカブミ職業訓練機関は、熟練しただけでなく、世界的に競争できる優れた特性を持つ技能実習生を生み出すという理念で２０１７年４月１７日に成立され、インドネシアのジャワ島を拠点とする日本介護技能実習生の母国日本語教育センターです。</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="works_2">
    <div class="container">
        <div class="row">
            <div class="main_description_second_contant">
                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="1.5s">
                    <div class="second_heading_text top-margin">
                        <h1 style="text-align: center">ビジョン＆ミッション</h1>
                    </div>

                    <div class="right_desc_bottom_text">
                        <div class="right_single_bottom_text">
                            <i class="fa fa-shield"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>ビジョン</h6>
                                <p>人道主義に基づく日本語トレーニングを行い、個人・家族・国に貢献できるように、豊かで競争力のある技能実習生を造ります。</p>
                            </div>
                        </div>

                        <div class="right_single_bottom_text">
                            <i class="fa fa-css3"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>ミッション</h6>
                                <ul>
                                    <li>
                                        <p>• 精神力・競争力のある熟練した実習生を育成する。</p>
                                    </li>
                                    <li>
                                        <p>• 実習生が適切に待遇されるようにする。</p>
                                    </li>
                                    <li>
                                        <p>• 実習修了後の帰国後に就職をできるよう、実習生を準備させる。</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6 col-sm-6">
                    <div class="right_desc_img center-content wow fadeInRight" data-wow-duration="1.5s">
                        <img src="{{ asset('template/main/images/caregiver.jpg') }}" alt="" />

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="center-content">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 50%; height: 50%;" src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>専門</h1>
                </div>
                <div class="right_desc_bottom_text">

                        <div class="right_single_bottom_text">
                            <div style="text-align: left;" class="right_bottom_description">
                                <ul>
                                    <li>
                                        <p>• インドネシアの日本介護技能実習生向けのＮ４・Ｎ３レベルまでの日本語教育。</p>
                                    </li>
                                    <li>
                                        <p>• インドネシアから日本への介護技能実習生の送り出し。</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section  class="business-talking"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>プログラム</h2>
        </div>
    </div>

</section>

<section id="program">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 50%; height: 50%;" src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>プログラムについて</h1>
                    <p>母国日本語教育プログラムは基本的な日常生活日本語 と基本的な介護用語を中心とするプログラムです。</p>

                    <p><b>ウィウィタン・バル</b>では、３ヵ月～６ヵ月の教育期間の最初の２ヵ月は基本的な日常生活日本語を中心に勉強します。もし、実習生が既に日本語能力試験N3の資格を持っている場合、母国日本語教育期間が短縮されます。</p>

                    <p>入国後には、一ヶ月間以上の監理団体での講習があります。その後、契約が発効し、実習施設での実習期間が始まります。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="works_2" style="background: white">
    <div class="container">
        <div class="row">
            <div class="pricing_heading_text center-content">
                <h1>入国前のプログラムの流れ</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/fopprej.png') }}" alt=""></a>
            </div>

            <div class="pricing_heading_text center-content">
                <h1>入国後のプログラムの流れ</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/fopproj.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section class="business-talking2"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>問い合わせ</h2>
        </div>
    </div>

</section>

<section id="message" class="main-section contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>機関の住所</h2>
                        <p>Jl. Goalpara no. 5 RT. 001 RW. 006 , Desa/Kec. Sukaraja, Kab. Sukabumi 43192</div>
                </div>
                <!--<div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>電話番号</h2>
                        <p>+62-821-2991-5819</div>
                </div>-->
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>メール</h2>
                        <p>hello@wiwitanbaru.com</div>
                </div>
            </div>


        </div>


    </div> <!-- end of container -->
</section>

<footer id="footer" class="center-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="copyright_text">
                    <p class=" wow zoomIn" data-wow-duration="1s">Copyright © 2017. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>
@endsection