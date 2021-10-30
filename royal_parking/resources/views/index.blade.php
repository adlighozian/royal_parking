<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- TITLE OF SITE -->
    <title>Royal Parking</title>

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css" />

    <!--hover.css-->
    <link rel="stylesheet" href="assets/css/hover-min.css">

    <!--datepicker.css-->
    <link rel="stylesheet" href="assets/css/datepicker.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

    <!-- range css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css" />

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <link href='/img/logo.png' rel='shortcut icon'>

</head>

<body>

    <!-- main-menu Start -->
    <header class="top-area">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="#home">
                                <img src="/img/a.png" alt="package-place">
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="smooth-menu"><a href="#home">Home</a></li>
                                    <li class="smooth-menu"><a href="#gallery">About</a></li>
                                    <li class="smooth-menu"><a href="#pack">Services </a></li>
                                    <li class="smooth-menu"><a href="#spo">Career</a></li>
                                    <li class="smooth-menu"><a href="#blog">Contact</a></li>
                                    <li>
                                        <a href="/login"> <button
                                                class="book-btn border-0">Login</button></a>
                                    </li>

                                    {{-- @guest
                                        <li>
                                            <a href="/login"> <button class="book-btn border-0">Login
                                                </button></a>
                                        </li>
                                    @endguest

                                    @auth
                                        <li>

                                            <a href="/dashboard"> <button class="book-btn border-0">Dashboard
                                                </button></a>

                                            <form action="/logout" method="POST">
                                                @csrf
                                                <button type="submit" class="book-btn border-0"><i
                                                        class="bi bi-box-arrow-left"></i>Logout</button>
                                            </form>
                                        </li>
                                    @endauth --}}

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-border"></div>
            </div>
        </div>

    </header>


    <!--about-us start -->
    <section id="home" class="about-us">
        <div class="container">
            <div class="about-us-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single-about-us">
                            <div class="about-us-txt">
                                <h2>
                                    The most secure and reliable parking
                                </h2>
                                {{-- <div class="about-btn">
                                    <a href="/booking">
                                        <button class="about-view">
                                            Daftar Sekarang
                                        </button>
                                    </a>
                                </div> --}}
                                <!--/.about-btn-->
                            </div>
                            <!--/.about-us-txt-->
                        </div>
                        <!--/.single-about-us-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-0">
                        <div class="single-about-us">

                        </div>
                        <!--/.single-about-us-->
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.about-us-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.about-us-->

    <!--service end-->

    <!--galley start-->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="gallery-details">
                <div class="gallary-header text-center">
                    <h2>LATAR BELAKANG PERUSAHAAN</h2>
                    <p>
                        ROYAL PARKING didirikan di jakarta dan sudah mempunyai infrastruktur yang kuat untuk memberikan
                        jasa pengelolaan perpakiran di Indonesia. Berbekal pengalaman yang ada dan konsep dalam
                        pengelolaan berbagai jenis lokasi parkir, termasuk lokasi parkir yang mempunyai volume kendaraan
                        yang tinggi, ROYAL PARKING saat ini telah bekerjasama dengan beberapa properti yang tersebar di
                        berbagai wilayah Indonesia.
                    </p>
                    <p>Dengan pengelolaan perpakiran yang telah dijalankan oleh ROYAL PARKING di beberapa properti dan
                        rencana kerjasama dengan beberapa properti terbaru dalam waktu dekat ini. ROYAL PARKING saat
                        ini telah merekrut Sumber Daya Manusia kurang lebih 500 orang. Sebagian dari Sumber Daya
                        Manusia tersebut telah ditempatkan di beberapa properti yang dikelola ROYAL PARKING.Keberadaan
                        ROYAL PARKING di setiap properti akan selalu bersinergi dengan managemen properti, dalam bentuk
                        menciptakan pelayanan dan kenyamanan bagi pengguna jasa parkir dan bersinergi dengan para
                        tenant. Dengan “Kemitraan” antara ROYAL PARKING dengan setiap properti dan pengguna jasa lahan
                        parkir saling menguntungkan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="gallary-header text-center">
                    <div class="col-md-6">
                        <h2>VISI PERUSAHAAN PERUSAHAAN</h2>
                        <p>
                            Visi ROYAL PARKING adalah menjadi salah satu Perusahaan Jasa Pengelolaan Parkir terbaik
                            dengan mengedepankan perkembangan teknologi perpakiran di dunia, serta peningkatan mutu
                            pelayanan pelanggan dengan mengedepankan komitmen kepercayaan untuk memberikan hasil
                            maksimal diantara managemen dengan customer.</p>
                    </div>

                    <div class="col-md-6">
                        <h2>MISI PERUSAHAAN PERUSAHAAN</h2>
                        <p> MISI PERUSAHAAN
                            ROYAL PARKING selalu berupaya memberikan pelayanan yang terbaik dengan mengedepankan
                            tanggung
                            jawab dalam jasa pengelolaan perpakiran sesuai peraturan dan pengelaman yang ada, dengan
                            kepercayaan sebagai modal dasar untuk dapat menciptakan sehatnya situasi dan kondisi jasa
                            pengelolaan parkir agar sesuai dengan permintaan pasar dalam mengaplikasikan kemampuan
                            untk
                            pelayanan seiring waktu dan perkembagan dunia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <BR>
    <BR>


    <section class="discount-offer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="dicount-offer-content text-center">

                        <!--/.campaign-timer-->
                        {{-- <div class="about-btn">
                            <a href="#blog"><button class="about-view ">
                                    Daftar Coba
                                </button></a>
                        </div> --}}
                        <!--/.about-btn-->

                    </div><!-- /.dicount-offer-content-->
                </div><!-- /.col-->
            </div><!-- /.row-->
        </div><!-- /.container-->

    </section><!-- /.discount-offer-->
    <!--discount-offer end-->

    <!--packages start-->
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    SERVICE
                </h2>
                <p>
                    Kami hadir menawarkan kualitas dan kepercayaan akan layanan parkir yang lebih baik. Dengan dukungan
                    karyawan terlatih dan sistem manajemen yang transparan, Anda dapat mengakses pendapatan dari layanan
                    parkir dengan menganalisa sistem operasional, manajemen, perpajakan, serta keuangan parkir anda
                    secara langsung dan jelas, serta memastikan para pelanggan Anda mendapatkan kesan pertama yang baik,
                    dan memberikan pelayanan parkir yang aman dan nyaman kepada setiap client atau pengunjung.
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="/img/1.png" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>CAR PARK MANAGEMENT </h3>
                                <div class="packages-para">
                                    <p>
                                        Memiliki Pengalaman pengelolaan parkir dan didukung struktur organisasi yang
                                        solid dan profesional untuk menciptakan keamanan dan kenyamanan yang maksimal
                                        bagi pengunjung dan client.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="/img/2.png" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>TRAFFIC DESIGN CONSULTANT</h3>
                                <div class="packages-para">
                                    <p>
                                        Memberikan solusi kepada setiap properti yang kami kelola untuk mendapatkan flow
                                        kendaraan terbaik.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="/img/3.png" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>MAINTAINANCE PARKING EQUIPMENT</h3>
                                <div class="packages-para">
                                    <p>
                                        Pemeriksaan dan perawatan peralatan parking yang dilakukan secara berkala
                                        merupakan prioritas kami untuk keamanan dan kenyamanan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.packages-->
    <!--packages end-->

    <!-- testemonial Start -->
    {{-- <section class="testemonial" id="testi">
        <div class="container">

            <div class="gallary-header text-center">
                <h2>
                    clients reviews
                </h2>

            </div>
            <!--/.gallery-header-->

            <div class="owl-carousel owl-theme" id="testemonial-carousel">

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="https://source.unsplash.com/85x85?people" alt="img" />
                        </div>
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                isi review
                            </p>
                            <h3>
                                <a href="#">
                                    Nama
                                </a>
                            </h3>
                            <h4>tempat</h4>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="https://source.unsplash.com/85x85?people" alt="img" />
                        </div>
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                isi review
                            </p>
                            <h3>
                                <a href="#">
                                    Nama
                                </a>
                            </h3>
                            <h4>tempat</h4>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="https://source.unsplash.com/85x85?people" alt="img" />
                        </div>
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                isi review
                            </p>
                            <h3>
                                <a href="#">
                                    Nama
                                </a>
                            </h3>
                            <h4>tempat</h4>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="https://source.unsplash.com/85x85?people" alt="img" />
                        </div>
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                isi review
                            </p>
                            <h3>
                                <a href="#">
                                    Nama
                                </a>
                            </h3>
                            <h4>tempat</h4>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="https://source.unsplash.com/85x85?people" alt="img" />
                        </div>
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                isi review
                            </p>
                            <h3>
                                <a href="#">
                                    Nama
                                </a>
                            </h3>
                            <h4>tempat</h4>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="https://source.unsplash.com/85x85?people" alt="img" />
                        </div>
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                isi review
                            </p>
                            <h3>
                                <a href="#">
                                    Nama
                                </a>
                            </h3>
                            <h4>tempat</h4>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="https://source.unsplash.com/85x85?people" alt="img" />
                        </div>
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                isi review
                            </p>
                            <h3>
                                <a href="#">
                                    Nama
                                </a>
                            </h3>
                            <h4>tempat</h4>
                        </div>
                    </div>
                </div>
                <!--/.item-->



            </div>

        </div>


    </section> --}}


    <!--special-offer start-->
    <section id="spo" class="special-offer">
        <div class="container">
            <div class="special-offer-content">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="single-special-offer">
                            <div class="single-special-offer-txt">
                                <h2>CAREER</h2>

                                <div class="packages-para special-offer-para">
                                    <p>
                                        Sumber Daya Manusia yang terampil, cerdas dan mandiri adalah hal yang sangat
                                        penting. Hal
                                        tersebut akan terwujud dengan program pengembangan yang akan dan terus
                                        diterapkan dengan
                                        pembekalan materi dan praktek lapangan yang baik untuk mendapatkan service
                                        excellent.
                                        Seluruh kandidat patut memiliki kemampuan komunikasi dan interpersonal yang
                                        baik. Hanya kandidat
                                        yang terpilih yang akan diundang untuk proses wawancara lebih lanjut.
                                    </p>

                                </div>


                                <!--/.packages-para-->
                                <div class="offer-btn-group2">
                                    <div class="about-btn">
                                        <a href="https://forms.gle/C1R9TjNmu4KkkUWb7">
                                            <button class="about-view">
                                                Daftar Sekarang
                                            </button>
                                        </a>
                                    </div>
                                    <br>

                                    <!--/.about-btn-->
                                </div>
                                <img src="img/pelamar.png" alt="offer-shape"
                                    style="border: black solid 10px;margin-top:30px;">
                                <!--/.offer-btn-group-->
                            </div>
                            <!--/.single-special-offer-txt-->
                        </div>
                        <!--/.single-special-offer-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-4">
                        <div class="single-special-offer">
                            <div class="single-special-offer-bg">
                                <img src="assets/images/offer/offer-shape.png" alt="offer-shape">
                            </div>
                            <!--/.single-special-offer-bg-->
                            <div class="single-special-shape-txt">

                            </div>
                            <!--/.single-special-shape-txt-->
                        </div>
                        <!--/.single-special-offer-->
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.special-offer-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.special-offer end-->
    <!--special-offer end-->

    <!--blog start-->
    {{-- <section id="blog" class="blog">
        <div class="container">
            <div class="blog-details">
                <div class="gallary-header text-center">
                    <h2>
                        CAREER
                    </h2>
                    <p>
                        Sumber Daya Manusia yang terampil, cerdas dan mandiri adalah hal yang sangat penting. Hal
                        tersebut akan terwujud dengan program pengembangan yang akan dan terus diterapkan dengan
                        pembekalan materi dan praktek lapangan yang baik untuk mendapatkan service excellent.
                        Seluruh kandidat patut memiliki kemampuan komunikasi dan interpersonal yang baik. Hanya kandidat
                        yang terpilih yang akan diundang untuk proses wawancara lebih lanjut.
                    </p>
                </div>
                <!--/.gallery-header-->

            </div>
            <!--/.blog-details-->
        </div>
        <!--/.container-->

    </section> --}}
    <!--/.blog-->
    <!--blog end-->


    <!--subscribe start-->
    <section class="blog" id="blog">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    Contact us
                </h2>
                <p>
                    Apabila Anda ingin mengetahui lebih lanjut mengenai informasi apapun yang ada pada website ini,
                    jangan ragu untuk menghubungi kami melalui whatsapp kami.
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="test" style="text-align: center">
                        <a href="https://wa.me/6287716877880"><button class="appsLand-btn subscribe-btn">Kirim</button></a>

                    </div>

                </div>
            </div>

        </div>

    </section>
    <!--subscribe end-->

    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">

                <div class="col-lg-3 col-md-6">
                    <img src="/img/a.png" alt="package-place">
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact us</h4><br>
                    <img src="/img/whatsapp.png" alt="package-place"><span> (+62) 87716877880</span><br>
                    <img src="/img/mail.png" alt="package-place"><span> hrd.royalparking5@gmail.com</span>

                </div>

                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Locate us</h4><br>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.290185259734!2d106.85969291458879!3d-6.225417395493537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38326e17a35%3A0xa0882bd3151f8e0b!2sBlok%20A%2C%20Jl.%20Abdullah%20Syafei%20No.29%2C%20RT.1%2FRW.3%2C%20Kb.%20Baru%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012830!5e0!3m2!1sid!2sid!4v1635403410248!5m2!1sid!2sid"
                        width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <p style="color: white">JL. KH. Abdullah Syafei No.29A Blok A Kebon Baru Tebet Jakarta Selatan</p>
                </div>
            </div>
        </div>
        <p style="text-align: center;margin-top:50px;" class="small text-muted mb-0">&copy; Copyrights. All rights
            reserved. <a class="text-primary" href="#">PT. Badra Abadi Perkasa</a></p>
    </footer>

    <!-- footer-copyright start -->
    {{-- <footer class="footer-copyright">
        <div class="container">
            <hr>
            <div class="foot-icons ">
                <ul class="footer-social-links list-inline list-unstyled">
                    <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <p>&copy; 2021 <a href="#">magang</a>. All Right Reserved</p>

            </div>
            <!--/.foot-icons-->
            <div id="scroll-Top">
                <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip"
                    data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
            <!--/.scroll-Top-->
        </div><!-- /.container-->

    </footer><!-- /.footer-copyright--> --}}
    <!-- footer-copyright end -->

    <!--Boxicons-->
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>

    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="assets/js/jquery.filterizr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="assets/js/jquery-ui.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- jquery.sticky.js -->
    <script src="assets/js/jquery.sticky.js"></script>

    <!--datepicker.js-->
    <script src="assets/js/datepicker.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>


</body>

</html>
