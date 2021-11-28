@extends('layouts.layout')

@section('content')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile border-bottom">
                <a href="#" class="nav-link flex-column">
                    <div class="nav-profile-image">
                        <img src="{{asset('assets')}}/images/antardata/logo.png" alt="profile" width="70%" />
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                        <span class="font-weight-bold text-success mb-1 mt-2 text-center"><img src="{{asset('assets')}}/images/antardata/logo_text.png" alt="logo-text" width="90%" /></span>
                    </div>
                </a>
            </li>

            <li class=""></li>
            <li class="mt-3">
                <div class="card" style="background: #ffffff;">
                    <h4 class="display-4">
                        <center>
                            <font color="#2486c4">SISA ANTRIAN</font>
                        </center>
                    </h4>
                    <span class="font-weight-bold head-count display-1 text-center mt-0" style="-webkit-text-stroke: 1px white;">
                        <font color="#2486c4">25</font>
                    </span>
                </div>
            </li>
            <li class="mt-3">
                <div class="card" style="background: #ffffff;">
                    <h4 class="display-4">
                        <center>
                            <font color="#2486c4">TERLAYANI</font>
                        </center>
                    </h4>
                    <span class="font-weight-bold head-count display-1 text-center mt-0" style="-webkit-text-stroke: 1px white;">
                        <font color="#2486c4">1</font>
                    </span>
                </div>
            </li>
            <li>
                <hr>
            </li>
            <li class="nav-item active">
                <a class="nav-link">
                    <h1 class="display-3 font-weight-bold text-white pl-5">A001</h1>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <h1 class="display-3 font-weight-bold text-primary pl-5">A002</h1>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <h1 class="display-3 font-weight-bold text-primary pl-5">A003</h1>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <h1 class="display-3 font-weight-bold text-primary pl-5">A004</h1>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <h1 class="display-3 font-weight-bold text-primary pl-5">A005</h1>
                </a>
            </li>
            <li>
                <hr>
            </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-chevron-double-left"></span>
                </button>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets')}}/images/antardata/logo_mini.png" alt="logo" /></a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown ml-3">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            <h3 class=""><strong>
                                    Minggu,
                                </strong>,
                                27 November 2021
                            </h3>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-logout d-none d-md-block">
                        <button class="btn btn-sm btn-primary">
                            <h3 id="time" class="clock">-</h3>
                        </button>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper pb-0">

                <!-- first row starts here -->
                <div class="row">
                    <div class="col-xl-6 stretch-card grid-margin">
                        <div class="card" style="background: #f8f9fb">
                            <input type="hidden" value="false" id="onSound" />

                            <audio id="sound_A" src="{{asset('assets')}}/sounds/A.mp3"></audio>
                            <audio id="sound_B" src="{{asset('assets')}}/sounds/B.mp3"></audio>
                            <audio id="sound_kosong" src="{{asset('assets')}}/sounds/kosong.mp3"></audio>
                            <audio id="sound_menuju" src="{{asset('assets')}}/sounds/menuju.mp3"></audio>
                            <audio id="sound_keloket" src="{{asset('assets')}}/sounds/keloket.mp3"></audio>
                            <audio id="sound_satu" src="{{asset('assets')}}/sounds/satu.mp3"></audio>
                            <audio id="sound_dua" src="{{asset('assets')}}/sounds/dua.mp3"></audio>
                            <audio id="sound_sepuluh" src="{{asset('assets')}}/sounds/sepuluh.mp3"></audio>
                            <audio id="sound_sembilan" src="{{asset('assets')}}/sounds/sembilan.mp3"></audio>
                            <audio id="sound_nomorantrian" src="{{asset('assets')}}/sounds/nomorantrian.mp3"></audio>
                            <video id="display-video" height="auto" controls muted loop></video>
                        </div>
                    </div>
                    @php
                    $linkAssets = asset('assets');
                    @endphp
                    <div class="col-sm-6 col-xl-6 stretch-card grid-margin">
                        <div class="card p-0 m-0" style="background: #ffffff;background-image: url('{{$linkAssets}}/images/antardata/poli_jantung.png');background-repeat: no-repeat, repeat;background-size: cover;">
                            <div class="card-body">
                                <h3 class="text-primary font-weight-bold display-3 text-center">POLI MATA</h3><br /><br />
                                <h5 class="text-primary text-center mb-0 pb-0" style="font-size: 2vw;">Nomor Antrian</h5>
                                <h1 class="text-primary font-weight-bold text-center mt-0 pt-0" style="font-size: 8vw;margin-top: -20px !important;">A010</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- chart row starts here -->
                <div class="row">
                    <div class="col-sm-4 col-xl-3 col-lg-3 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body p-0">
                                <img class="img-fluid text-center rounded mx-auto d-block img-thumbnail" src="{{asset('assets')}}/images/antardata/default_male.png" width="90%" />
                            </div>
                            <div class="card-body text-dark">
                                <h5 class="font-weight-bold text-primary display-5 text-truncate"> Dr. Wisnu Jatmiko</h5>
                                <!-- <div class="d-flex justify-content-between">
                            <p class="text-primary">Spesialis Keuangan</p>
                        </div> -->
                                <div><span class="badge badge-secondary badge-lg">
                                        <h4>LIBUR</h4>
                                    </span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-3 col-lg-3 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body p-0">
                                <img class="img-fluid text-center rounded mx-auto d-block img-thumbnail" src="{{asset('assets')}}/images/antardata/default_male.png" width="90%" />
                            </div>
                            <div class="card-body text-dark">
                                <h5 class="font-weight-bold text-primary display-5 text-truncate"> Dr. Wisnu Jatmiko</h5>
                                <!-- <div class="d-flex justify-content-between">
                            <p class="text-primary">Spesialis Keuangan</p>
                        </div> -->
                                <div><span class="badge badge-warning badge-lg">
                                        <h4>PULANG</h4>
                                    </span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-3 col-lg-3 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body p-0">
                                <img class="img-fluid text-center rounded mx-auto d-block img-thumbnail" src="{{asset('assets')}}/images/antardata/default_female.png" width="90%" />
                            </div>
                            <div class="card-body text-dark">
                                <h5 class="font-weight-bold text-primary display-5 text-truncate"> Dr. Wisnu Jatmiko</h5>
                                <!-- <div class="d-flex justify-content-between">
                            <p class="text-primary">Spesialis Keuangan</p>
                        </div> -->
                                <div><span class="badge badge-primary badge-lg">
                                        <h4>PRAKTEK</h4>
                                    </span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-3 col-lg-3 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body p-0">
                                <img class="img-fluid text-center rounded mx-auto d-block img-thumbnail" src="{{asset('assets')}}/images/antardata/default_male.png" width="90%" />
                            </div>
                            <div class="card-body text-dark">
                                <h5 class="font-weight-bold text-primary display-5 text-truncate"> Dr. Wisnu Jatmiko</h5>
                                <!-- <div class="d-flex justify-content-between">
                            <p class="text-primary">Spesialis Keuangan</p>
                        </div> -->
                                <div><span class="badge badge-primary badge-lg">
                                        <h4>PRAKTEK</h4>
                                    </span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <!-- <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div> -->
                    <marquee direction="left" class="font-weight-bold display-4" style="margin-left: -20px;">
                        <font color="#2486c4">RS Soebandi Jember adalah</font>
                    </marquee>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @endsection

    @push('js')
    <!-- scriptnya bisa ditambahkan dari assets -->
    <script src="{{asset('assets/test.js')}}"></script>

    <!-- atau bisa langsung dari sini -->
    <script>
        $("document").ready(function() {
            document.getElementById('display-video').setAttribute('src', "{{ asset('assets/video/subandi.mp4')}}");
            document.getElementById('display-video').load();
            document.getElementById('display-video').play();

            //clock;
            showTime();

            var server = 'http://antardata-api.localhost:3409/antardata';
            var socket = io.connect(server);
            var queue = 0;

            socket.on('callAntrian', function(noantri) {
                var onSound = $("#onSound").val();
                queue += 1;

                $.ajax({
                    type: 'POST',
                    url: '/antrian/generate-antrian',
                    data: {
                        noantri: noantri[0]
                    },
                    success: function(resp) {
                        var obj = JSON.parse(resp);

                        if (onSound == "false") {
                            playQueue(obj);
                        } else {
                            setInterval(() => {
                                var onSound = $("#onSound").val();

                                if (onSound == "false" && queue > 0) {
                                    console.log("queue before check: " + queue);
                                    playQueue(obj, onSound);
                                }
                            }, 500);
                        }
                    }
                })
            });

            function playQueue(obj, onSound) {
                var delay = 0;
                var dtop = 0;
                var onSound = $("#onSound");
                this.onSound = onSound;

                onSound.val("true");
                queue -= 1;

                $.each(obj, function(i, v) {
                    var duration = document.getElementById('sound_' + obj[i]).duration * 1000;
                    setTimeout(function() {
                        document.getElementById('sound_' + obj[i]).pause();
                        document.getElementById('sound_' + obj[i]).currentTime = 0;
                        document.getElementById('sound_' + obj[i]).play();
                    }, delay);

                    dtop += duration;
                    delay += duration;
                });

                setTimeout(function() {
                    onSound.val("false");
                    console.log("dah selesai", onSound.val());
                }, dtop);
            }

            function showTime() {
                var date = new Date();
                var h = date.getHours(); // 0 - 23
                var m = date.getMinutes(); // 0 - 59
                var s = date.getSeconds(); // 0 - 59
                var session = "WIB";

                if (h == 0) {
                    h = 12;
                }

                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                s = (s < 10) ? "0" + s : s;

                var time = h + ":" + m + ":" + s + " " + session;
                document.getElementById("time").innerText = time;
                document.getElementById("time").textContent = time;

                setTimeout(showTime, 1000);
            }
        })
    </script>
    @endpush