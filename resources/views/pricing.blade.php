<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favcicon.png">
  <title>
    Jasmine
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />
  {{-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    /> --}}
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            {{-- <a class="navbar-brand font-weight-bolder ms-sm-3" href="#" rel="tooltip" data-placement="bottom" target="_blank">
              Jasmine
            </a> --}}
            <a href={{url('/')}}><img src="../assets/img/615c1d123404b3d35c6fb81e_Jasmine.png" width="182" height="42" alt="Jasmine Logo" class="navbar-brand font-weight-bolder ms-sm-3"></a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0">

              <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a href={{url('/')}} class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                    Home
                  </a>           
                </li>
  
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a href={{url('/pricing')}} class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                    Pricing
                  </a>
                </li>
  
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a href={{url('/contact_us')}} class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    <i class="material-icons opacity-6 me-2 text-md">article</i>
                    About Us
                  </a>
                </li>

                <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0">
                  <a target="_blank" href="https://calendly.com/flowyteam/Jasmine?month=2022-04" class="btn btn-sm bg-gradient-primary mb-0 me-1 mt-2 mt-md-0" style="background:#F4454F">Schedule a Demo</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>  
  <!-- -------- START HEADER with text ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-50" style="background-image: url('../assets/img/business-situation-job-interview-concept-job-seeker-present-resume-managers.jpeg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center text-sans-serif">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">
                Start for free.<br>
                Cancel any time.
            </h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER with text ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!--- START CONTENT -->
    <div class="container">
        <div class="justify-center text-center flex flex-wrap mt-24">
            <div class="lg:w-6/12 md:w-6/12 md:px-4 mb-5">
                {{-- <h6 class="lead text-xl leading-relaxed mt-4 mb-5 text-slate-500">
                    Billing is monthly and you don’t need a credit card to sign up. You'll only be
                    charged once you've paid your new team member.
                </h6> --}}
        <h5 class="text-center mt-5">Hire employees</h5>
        <p class="text-center text-gray-800">Hire employees overseas without opening an 
            entity or worrying about payroll, taxes or local laws.
        </p>
            </div>
        </div>
    <div class="row mr-auto" style="justify-content: center !important;">

        <div class="col-md-4 mb-4">
          <div class="card shadow-lg">
            <span class="badge rounded-pill bg-light text-dark w-30 mt-n2 mx-auto">Monthly</span>
            <div class="card-header text-center pt-4 pb-3">
              <h1 class="font-weight-bold mt-2">
                <small class="text-lg mb-auto">$</small>499<small class="text-lg">/per employee</small>
              </h1>
            </div>
            <div class="card-body text-lg-start text-center pt-0">
              <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                Speak to us
                <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>         
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card bg-gradient-dark shadow-lg">
            <span class="badge rounded-pill bg-primary w-30 mt-n2 mx-auto" style="background:#F4454F !important">Yearly</span>
            <div class="card-header text-center pt-4 pb-3 bg-transparent">
              <h1 class="font-weight-bold mt-2 text-white">
                <small class="text-lg mb-auto">$</small>4999<small class="text-lg">/per employee</small>
              </h1>
            </div>
            <div class="card-body text-lg-start text-center pt-0">
              <a href="javascript:;" class="btn btn-icon bg-gradient-primary d-lg-block mt-3 mb-0" style="background:#F4454F">
                Speak to us
                <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
        <div class="justify-center text-center flex flex-wrap mt-24">
            <div class="lg:w-6/12 md:w-6/12 md:px-4 mb-5">
                {{-- <h6 class="lead text-xl leading-relaxed mt-4 mb-5 text-slate-500">
                    Billing is monthly and you don’t need a credit card to sign up. You'll only be
                    charged once you've paid your new team member.
                </h6> --}}
        <h5 class="text-center mt-5">Hire contractors</h5>
        <p class="text-center text-gray-800">
            Stay compliant with local laws and reduce the time it takes
            to hire, pay and take care of your team.
        </p>
            </div>
        </div>
    <div class="row mr-auto" style="justify-content: center !important;">

        <div class="col-md-4 mb-4">
          <div class="card shadow-lg">
            <span class="badge rounded-pill bg-light text-dark w-30 mt-n2 mx-auto">Monthly</span>
            <div class="card-header text-center pt-4 pb-3">
              <h1 class="font-weight-bold mt-2">
                <small class="text-lg mb-auto">$</small>49<small class="text-lg">/per employee</small>
              </h1>
            </div>
            <div class="card-body text-lg-start text-center pt-0">
              <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                Speak to us
                <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>         
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card bg-gradient-dark shadow-lg">
            <span class="badge rounded-pill bg-primary w-30 mt-n2 mx-auto" style="background:#F4454F !important">Yearly</span>
            <div class="card-header text-center pt-4 pb-3 bg-transparent">
              <h1 class="font-weight-bold mt-2 text-white">
                <small class="text-lg mb-auto">$</small>499<small class="text-lg">/per employee</small>
              </h1>
            </div>
            <div class="card-body text-lg-start text-center pt-0">
              <a href="javascript:;" class="btn btn-icon bg-gradient-primary d-lg-block mt-3 mb-0" style="background:#F4454F">
                Speak to us
                <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--- END CONTENT -->
  </div>
  <!-- -------- START FOOTER ------- -->
  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            {{-- <a href="#">
              <img src="https://uploads-ssl.webflow.com/615c1a090c4d2f60e01faad3/615c1d123404b3d35c6fb81e_Jasmine.png" class="mb-3 footer-logo" alt="main_logo">
            </a> --}}
            <h6 class="font-weight-bolder mb-4">Jasmine</h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/#" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/#" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/#" target="_blank">
                  <i class="fab fa-instagram text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/#" target="_blank">
                  <i class="fab fa-linkedin text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/#" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-3">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                  Pricing
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-3">
          <div>
            <h6 class="text-sm">Help & Support</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                  Knowledge Center
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-3 me-auto">
          <div>
            <h6 class="text-sm">Legal</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                  Terms & Conditions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                  Privacy Policy
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                .write(new Date().getFullYear())
              </script><a href="#" target="_blank">Jasmine</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="../assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.2" type="text/javascript"></script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
</body>

</html>