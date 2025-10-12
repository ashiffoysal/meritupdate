
@extends('layouts.frontend')
@section('title', 'All Video Tutorial')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
    .page-banner-area {
    padding-top: 60px;
    padding-bottom: 50px;
}
.main-navbar .navbar .navbar-nav .nav-item a i {
  
    top: 0px !important; 
 
}
span.btn {
    font-size: 9px !important;
}
</style>
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Dashboard</h2>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Video Tutorial</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    aside#layout-menu {
    margin: 15px 0px 0px 50px;
     height: 800px;
}



<style>
        .video-container {
            text-align: center;
            margin: 20px auto;
        }
        video {
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .controls {
            margin-top: 10px;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>

</style>

   @include('frontend.student.include.tutorcss')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar" style="padding-top:20px">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="position: relative;">
          <div class="app-brand demo">
            <a href="{{ url('/') }}" class="app-brand-link">
              
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
           @include('frontend.student.include.sidebar')
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
             
               
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  
                @include('frontend.student.include.headernotify')
                
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                
                @include('frontend.student.include.dasboardheader')
                
              </ul>
            </div>
          </nav>
          
         

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
               <!--start-->
                <!---->
                 <div class="card mt-1">
                    <h5 class="card-header">Watch Video</h5>
                             
                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12">
                                
                                
                                <div class="video-container">
        <video id="myVideo" src="{{ asset('/'.$view->video_path) }}"></video>
        <div class="controls">
            <button id="playBtn">Play</button>
            <button id="pauseBtn">Pause</button>
        </div>
        <p id="watchTime">Watched Time: 0 seconds</p>
    </div>

    <script>
        const video = document.getElementById('myVideo');
        const playBtn = document.getElementById('playBtn');
        const pauseBtn = document.getElementById('pauseBtn');
        const watchTime = document.getElementById('watchTime');
        
        let totalWatched = 0;
        let watchTracker;

        // Play video
        playBtn.addEventListener('click', () => {
            video.play();
            watchTracker = setInterval(() => {
                totalWatched = Math.round(video.currentTime);
                watchTime.textContent = `Watched Time: ${totalWatched} seconds`;
            }, 1000); // Updates every second
        });

        // Pause video
        pauseBtn.addEventListener('click', () => {
            video.pause();
            clearInterval(watchTracker);
        });

        // Stop tracking when video ends
        video.addEventListener('ended', () => {
            clearInterval(watchTracker);
            alert(`You watched a total of ${totalWatched} seconds.`);
        });
    </script>
                                
                                <!--<video width="100%" height="100%">-->
                                <!--  <source src="{{ asset('/'.$view->video_path) }}" type="video/mp4">-->
                                
                                <!--</video>-->
                                
                          
                                                    
                            </div>
                        </div>
                    </div>
                </div>
               <!--end-->
                </div>
            <!-- / Content -->
      

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

@include('frontend.student.include.tutorjs')

<script>
        CKEDITOR.replace( 'editor1' );
</script>


<script>
    $(document).ready(function () {
        const $video = $('#myVideo');
        const $playBtn = $('#playBtn');
        const $pauseBtn = $('#pauseBtn');
        const $watchTime = $('#watchTime');
        const videoId = "{{ $view->id }}";
        const totalvideolength ="{{ $view->total_time }}";
        
        let totalWatched = 0;
        let watchTracker;

        // Play video
        $playBtn.on('click', function () {
            $video[0].play();
            watchTracker = setInterval(() => {
                totalWatched = Math.round($video[0].currentTime);
                $watchTime.text(`Watched Time: ${totalWatched} seconds`);

                // Send data to the server every 10 seconds
                if (totalWatched % 10 === 0) {
                    $.ajax({
                        url: '/get/video/tutorial/watch',
                        method: 'POST',
                        headers: {
                            
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        contentType: 'application/json',
                        data: JSON.stringify({
                            video_id: videoId,
                            watched_time: totalWatched,
                            totalvideolength:totalvideolength,
                        }),
                        success: function (response) {
                            console.log(response);
                        },
                        error: function (error) {
                            console.error(error);
                        }
                    });
                }
            }, 1000); // Updates every second
        });

        // Pause video
        $pauseBtn.on('click', function () {
            $video[0].pause();
            clearInterval(watchTracker);
        });

        // Stop tracking when the video ends
        $video.on('ended', function () {
            clearInterval(watchTracker);
            alert(`You watched a total of ${totalWatched} seconds.`);
        });
    });
</script>


@endsection

