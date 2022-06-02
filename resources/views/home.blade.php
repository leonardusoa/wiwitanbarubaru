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
                    <li><a href="#works" class="">Tentang</a></li>
                    <li><a href="#program" class="">Program</a></li>
                    <li><a href="#message" class="">Kontak</a></li>
                    <!--<li><a href="https://goo.gl/forms/OV15IF1z4sinfmkj1" class="">Registrasi</a></li>-->
                    <li><a href="{{ route('register_index') }}" class="" target="_blank">Registrasi</a></li>
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
                    <img src="{{ asset('template/main/images/skybuild.png') }}" height="400px" height="400px" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>Tentang Wiwitan Baru</h1>
                    <p>Kami merupakan lembaga pelatihan bahasa Jepang khusus bagi pemagang ahli keperawatan/caregiver sebelum berangkat ke Jepang.</p>

                    <p>Kami berdiri pada 17 April 2017.</p>

                    <p>Kami memiliki filosofi bahwa pemagang harus dibentuk agar tidak hanya kompeten dalam keahliannya, akan tetapi juga memiliki karakter yang baik dan dapat berkompetisi secara global.</p>
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
                        <h1 style="text-align: center">Visi dan Misi</h1>
                    </div>

                    <div class="right_desc_bottom_text">
                        <div class="right_single_bottom_text">
                            <i class="fa fa-shield"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>Visi</h6>
                                <p>Memberikan pelatihan berlandaskan asas kemanusiaan, untuk menghasilkan tenaga pemagang yang sejahtera dan kompetitif sehingga dapat memberikan kontribusi terhadap personal, keluarga dan negara.</p>
                            </div>
                        </div>

                        <div class="right_single_bottom_text">
                            <i class="fa fa-css3"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>Misi</h6>
                                <ul>
                                    <li>
                                        <p>• Mendidik tenaga kerja yang ahli dan kompeten serta memiliki mental yang kuat.</p>
                                    </li>
                                    <li>
                                        <p>• Memastikan para pemagang mendapatkan perlakuan yang layak selama bertugas.</p>
                                    </li>
                                    <li>
                                        <p>• Mempersiapkan peserta untuk kegiatan setelah permagangan usai saat kembali ke Indonesia.</p>
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
                    <h1>Layanan</h1>
                </div>
                <div class="right_desc_bottom_text">
                    <div class="right_single_bottom_text">
                        <div style="text-align: left;" class="right_bottom_description">
                            <ul>
                                <li>
                                    <p>• Pelatihan Bahasa Jepang N4 dan N3 bagi Pemagang Ahli Keperawatan dan Caregiving Indonesia.</p>
                                </li>
                                <li>
                                    <p>• Pengiriman Pemagang Ahli Keperawatan dan Caregiving Indonesia.</p>
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
            <h2>Program</h2>
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
                    <h1>Mengenai Program</h1>
                </div>
                <div class="right_desc_bottom_text">
                    <p>Program Pelatihan Bahasa Jepang kami terdiri atas Bahasa Jepang untuk percakapan dasar sehari-hari, dan kosakata Bahasa Jepang dasar mengenai keperawatan/caregiving.</p>

                    <p>Program akan berlangsung selama antara 3 sampai 6 bulan, dengan memfokuskan pada materi Bahasa Jepang dasar sehari-hari selama 2 bulan pertama. Apabila calon pemagang telah memiliki sertifikat JLPT N3, maka lini masa program untuk calon pemagang tersebut akan dipersingkat.</p>

                    <p>Setelah tiba di Jepang, akan ada pelatihan pasca kedatangan selama sekitar satu bulan atau lebih yang diadakan oleh organisasi penerima (AO). Setelah itu, kontrak akan diberlakukan dan program pemagangan di institusi tujuan akan dimulai.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="works_2" style="background: white">
    <div class="container">
        <div class="row">
            <div class="pricing_heading_text center-content">
                <h1>Alur Program (Pra-Keberangkatan)</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/fopprei.png') }}" alt=""></a>
            </div>

            <div class="pricing_heading_text center-content">
                <h1>Alur Program (Pasca-Kedatangan)</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/fopproi.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section id="works_2">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 90%; height: 90%;" src="{{ asset('template/main/images/takingtest.jpg') }}" width="800px" height="531px" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div style="margin:0 auto;" class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>Apa itu JLPT?</h1>
                    <p>JLPT merupakan singkatan dari Japanese Language Proficiency Test (Ujian Kemampuan Bahasa Jepang). Ujian ini diadakan oleh Japan Foundation di seluruh dunia dan merupakan salah satu sertifikasi kemampuan Bahasa Jepang yang diakui di hampir semua lembaga dan perusahaan Jepang.</p>

                    <p>JLPT memiliki 5 tingkatan yang dimulai dari N5 sebagai yang paling rendah, dan diakhiri dengan N1 sebagai yang paling tinggi.</p>

                    <p>Untuk dapat mengikuti progran pemagangan caregiving di Jepang, calon pemagang harus memiliki sertifikat JLPT N4 atau N3 (lebih diutamakan) yang setara dengan tingkat Bahasa Jepang dasar sehari-hari.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="business-talking2"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>Kontak</h2>
        </div>
    </div>

</section>

<section id="message" class="main-section contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>Kantor Kami</h2>
                        <p>Jl. Goalpara no. 5 RT. 001 RW. 006 , Desa/Kec. Sukaraja, Kab. Sukabumi 43192</div>
                </div>
                <!--<div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>Telepon</h2>
                        <p>+62-821-2991-5819</div>
                </div>-->
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>E-mail</h2>
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


<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>
@endsection