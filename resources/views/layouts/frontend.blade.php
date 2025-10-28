<!DOCTYPE html>
<html lang="en">
    <head>
          @yield('meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>@yield('title') | {{ $companyInformation->company_name }}  </title>
        <meta name="robots" content="index, follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="website" />
        <meta name="description" content="@yield('meta_description') {{ $seo->meta_description }}" />
        <meta name="keywords" content="{{ $seo->meta_keyword }}" />
        <meta name="author" content="{{ $seo->meta_author }}">
        <meta property="og:title" content="Tuition Centre in East London (Forest Gate & Ilford) - Best Tutors in East London - Merit Tutors." />
        <meta property="og:url" content="https://www.merittutors.co.uk/" />
        <meta property="og:site_name" content="Merit Tutors | Tuition Centre in East London" />
        <meta name="google-site-verification" content="8yndOVji6sp5Lka51a7GOCgxbY85LJ2-lgZUp13824s" />

        <link rel="icon" href="{{ asset('frontend/update-design') }}/assets/images/favicon.png">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('frontend/update-design') }}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('frontend/update-design') }}/assets/css/owl.theme.default.min.css">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="{{ asset('frontend/update-design') }}/assets/css/bootstrap.min.css"> -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <!-- Normalize -->
        <link rel="stylesheet" href="{{ asset('frontend/update-design') }}/assets/css/normalize.css">
        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('frontend/update-design') }}/assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('frontend/update-design') }}/assets/css/responsive.css">
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LDKP2DXTYH"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-LDKP2DXTYH');
        </script>
        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "turrdbc906");
        </script>
        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '134063601552703');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=134063601552703&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-581538066">
        </script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'AW-581538066');
        </script>

        <style>
        img {
          opacity: 0;
          transition: opacity 0.5s ease;
        }
        img[src] {
          opacity: 1;
        }
        </style>
    </head>
    <body>
        @include('sweetalert::alert')
        <div class="fixed_overlay"></div>
        <!--================  Start Header Section  ================-->
        @include('frontend.include.header')
        <!--================  End Header Section  ================-->
        @yield('content')

        <!--================  Start Footer Section  ================-->
        @include('frontend.include.footer')
        <!--================  End Footer Section  ================-->

        <!-- ~~~~~~~~~~ JS Files ~~~~~~~~~~-->
        <!-- jQuery -->
        <script src="{{ asset('frontend/update-design') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('frontend/update-design') }}/assets/js/popper.min.js"></script>
        <!-- Bootstrap -->
        <!-- <script src="{{ asset('frontend/update-design') }}/assets/js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <!-- Owl Carousel -->
        <script src="{{ asset('frontend/update-design') }}/assets/js/owl.carousel.min.js"></script>
        <!-- Modernizr -->
        <script src="{{ asset('frontend/update-design') }}/assets/js/modernizr-3.11.2.min.js"></script>
        <!-- Custom JS (Handed)-->
        <script src="{{ asset('frontend/update-design') }}/assets/js/scripts.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(function() {
          function lazyLoad() {
            $('.lazy').each(function() {
              if ($(this).offset().top < $(window).scrollTop() + $(window).height() + 200) {
                var src = $(this).attr('data-src');
                if (src) {
                  $(this).attr('src', src).removeAttr('data-src');
                }
              }
            });
          }

          // Run on scroll and on page load
          $(window).on('scroll', lazyLoad);
          lazyLoad();
        });
        </script>

    </body>
</html>
