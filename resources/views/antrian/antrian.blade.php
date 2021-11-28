@extends('layouts.layout')

@section('content')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile border-bottom">
                <a href="#" class="nav-link flex-column">
                    <div class="nav-profile-image">
                        <img src="{{ asset('assets/images/antardata/logo.png') }}" alt="profile" width="70%" />
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                        <span class="font-weight-bold text-success mb-1 mt-2 text-center"><img src="{{ asset('assets/images/antardata/logo_text.png') }}" alt="logo-text" width="90%" /></span>
                    </div>
                </a>
            </li>

            <li class="mt-4">
                <div class="card">
                    <div class="card-body p-0">
                        <img class="img-fluid img-thumbnail d-block w-100" src="{{ asset('assets/images/antardata/default_petugas.png') }}" alt="" width="50%" />
                    </div>
                    <div class="card-body px-3" style="background-color: #f7fdf5">
                        <p class="text-success display-3 text-center text-truncate mb-2 mt-0">Nurul Huda, A.Md</p>
                        <p class="text-success display-5 text-center mt-4">PETUGAS</p>
                        <p class="text-success font-weight-semibold display-4 text-center" style="margin-top: -20px;">LOKET 1</p>
                    </div>
                </div>
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
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/images/antardata/logo_mini.png') }}" alt="logo" /></a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown ml-3">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            <h3 class=""><strong>
                                    MINGGU
                                </strong>,
                                27 NOVEMBER 2021
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

                            <audio id="sound_A" src="{{ asset('assets/sounds/A.mp3') }}"></audio>
                            <audio id="sound_B" src="{{ asset('assets/sounds/B.mp3') }}"></audio>
                            <audio id="sound_kosong" src="{{ asset('assets/sounds/kosong.mp3') }}"></audio>
                            <audio id="sound_menuju" src="{{ asset('assets/sounds/menuju.mp3') }}"></audio>
                            <audio id="sound_keloket" src="{{ asset('assets/sounds/keloket.mp3') }}"></audio>
                            <audio id="sound_satu" src="{{ asset('assets/sounds/satu.mp3') }}"></audio>
                            <audio id="sound_dua" src="{{ asset('assets/sounds/dua.mp3') }}"></audio>
                            <audio id="sound_sepuluh" src="{{ asset('assets/sounds/sepuluh.mp3') }}"></audio>
                            <audio id="sound_sembilan" src="{{ asset('assets/sounds/sembilan.mp3') }}"></audio>
                            <audio id="sound_nomorantrian" src="{{ asset('assets/sounds/nomorantrian.mp3') }}"></audio>
                            <video id="display-video" height="auto" controls muted loop></video>
                        </div>
                    </div>

                    @php
                    $linkAssets = asset('assets');
                    @endphp

                    <div class="col-sm-6 col-xl-6 stretch-card grid-margin">
                        <div class="card" style="background: #ffffff;background-image: url({{$linkAssets}}/images/antardata/bingkai_antrian.png);background-repeat: no-repeat, repeat;background-size: cover;">
                            <div class="card-body">
                                <h3 class="text-success display-4 text-center">PANGGILAN SAAT INI</h3>
                                <h1 class="text-success text-center mt-5 mb-0" style="font-size: 4vw;margin-bottom: -20px;" id="current_loket">LOKET 1</h1>
                                <h1 class="text-success text-center font-weight-bold mt-0" style="margin-top: -20px;-webkit-text-stroke: 2px white;font-size: 8vw;" id="current_noantri">A010</h1>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- chart row starts here -->
                <div class="row">
                    <div class="col-sm-6 col-lg-3 col-xl-3 stretch-card grid-margin">
                        <div class="card" style="background: #ffffff;background-image: url({{$linkAssets}}/images/antardata/loket.png);background-repeat: no-repeat, repeat;background-size: cover;">
                            <div class="card-body">
                                <h3 class="text-center text-success display-3 font-weight-bold" style="-webkit-text-stroke: 3px white;">LOKET 1</h3><br />
                                <h2 class="text-center font-weight-semibold text-success display-1" style="-webkit-text-stroke: 2px white;">A010</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-3 stretch-card grid-margin">
                        <div class="card" style="background: #ffffff;background-image: url({{$linkAssets}}/images/antardata/loket.png);background-repeat: no-repeat, repeat;background-size: cover;">
                            <div class="card-body">
                                <h3 class="text-center text-success display-3 font-weight-bold" style="-webkit-text-stroke: 3px white;">LOKET 1</h3><br />
                                <h2 class="text-center font-weight-semibold text-success display-1" style="-webkit-text-stroke: 2px white;">A010</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2 col-xl-3 stretch-card grid-margin" id="loket2">
                        <div class="card" style="background: #ffffff;background-image: url({{$linkAssets}}/images/antardata/loket.png);background-repeat: no-repeat, repeat;background-size: cover;">
                            <div class="card-body">
                                <h3 class="text-center text-warning display-3 font-weight-bold" style="-webkit-text-stroke: 3px white;">LOKET 25</h3><br />
                                <h2 class="text-center font-weight-semibold text-warning display-1" style="-webkit-text-stroke: 2px white;">A010</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2 col-xl-3 stretch-card grid-margin">
                        <div class="card" style="background: #ffffff;background-image: url({{$linkAssets}}/images/antardata/loket.png);background-repeat: no-repeat, repeat;background-size: cover;">
                            <div class="card-body">
                                <h3 class="text-center text-success display-3 font-weight-bold" style="-webkit-text-stroke: 3px white;">LOKET 3</h3><br />
                                <h2 class="text-center font-weight-semibold text-success display-1" style="-webkit-text-stroke: 2px white;">A010</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="row">
                    <div class="col-lg-12">
                        <marquee direction="left" class="h3 font-weight-bold display-4" style="-webkit-text-stroke: 2px #67b945;">
                            <font color="#67b945">RS Soebandi Jember adalah</font>
                        </marquee>
                    </div>
                </div>
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
<!-- <script src="##-path-##"></script> -->

<!-- atau bisa langsung dari sini -->
<script>
    alert('Oke');
    $("document").ready(function() {
        document.getElementById('display-video').setAttribute('src', "{{ asset('assets/video/subandi.mp4')}}");
        document.getElementById('display-video').load();
        document.getElementById('display-video').play();

        //clock;
        showTime();

        var server = 'http://antardata-api.localhost:3402/antardata';
        var socket = io.connect(server);
        var queue = 0;

        socket.on('callAntrian', function(data) {
            var onSound = $("#onSound").val();
            queue += 1;

            $.ajax({
                type: 'POST',
                url: '/antrian/generate-antrian',
                data: {
                    noantri: data.noantri,
                    loket: data.loket
                },
                success: function(resp) {
                    var obj = JSON.parse(resp);

                    //Playing Sound
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
            $("#loket2").addClass('shadow p-2');

            //Manipulating DOM;
            $("#current_loket").html("LOKET " + obj.loket);
            $("#current_noantri").html(obj.noantri)

            onSound.val("true");
            queue -= 1;

            setTimeout(function() {
                //remove first;
                $("#loket2").removeClass('animate__animated animate__bounce');
                console.log('gogogogogo');
            }, dtop);

            $.each(obj.sound, function(i, v) {
                var duration = document.getElementById('sound_' + obj.sound[i]).duration * 1000;
                setTimeout(function() {
                    document.getElementById('sound_' + obj.sound[i]).pause();
                    document.getElementById('sound_' + obj.sound[i]).currentTime = 0;
                    document.getElementById('sound_' + obj.sound[i]).play();

                    $("#loket2").addClass('animate__animated animate__bounce');
                    console.log('dududududu')
                }, delay);

                dtop += duration;
                delay += duration;
            });

            setTimeout(function() {
                onSound.val("false");
                $("#loket2").addClass('animate__animated animate__bounce');
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