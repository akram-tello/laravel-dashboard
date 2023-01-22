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
            <a href={{url('/')}}><img src="../assets/img/jasmine_logo-1.png" height="42" alt="Jasmine Logo" class="navbar-brand font-weight-bolder ms-sm-3"></a>
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
    <div class="page-header min-vh-75" style="background-image: url('../assets/img/business-situation-job-interview-concept-job-seeker-present-resume-managers.jpeg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center text-sans-serif">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Hire anyone, anywhere in a new country in minutes</h1>
            <p class="lead mb-4 text-white opacity-8">Automate your onboarding, payroll, and compliance for remote teams. Pay easily international employees and contractors worldwide on a secure platform.</p>
            <a target="_blank" href="https://calendly.com/flowyteam/Jasmine?month=2022-04" type="submit" class="btn bg-gradient-primary btn-lg" style="background:#F4454F">Schedule a Demo</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER with text ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <section class="my-5 pt-5">
        <div class="container text-sans-serif">
          <div class="row">
            <div class="col-md-5 ms-auto">
                <div class="position-relative">
                  <img class="max-width-50 w-100 position-relative z-index-2" src="../assets/img/onboarding_image.png" alt="image">
                </div>
            </div>
            <div class="col-md-6 m-auto mt-5">
              <h2>Go from offer letter to onboarded in minutes</h2>
              <p class="mb-4 lead">
                Got a new hire in Malaysia or maybe South Africa? Create a custom
                contract that is compliant with local laws, send it to sign, and they will get onboarded almost instantly.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="my-5 pt-5">
        <div class="container text-sans-serif">
          <div class="row">
            <div class="col-md-6 m-auto">
              <h2>We take care of all compliance</h2>
              <p class="mb-4 lead">
                Being the HR, legal and accounting expert for every country is tough. Our international network of 100+ local
                expert partners ensures all hiring processes follow regional laws and tax rules so your team members can work 
                wherever they want.
              </p>
            </div>
            <div class="col-md-5 ms-auto">
                <div class="position-relative">
                    <img class="max-width-50 w-100 position-relative z-index-2" src="../assets/img/cpmpliance_image.png" alt="image">
                </div>
            </div>
          </div>
        </div>
      </section>

      <section class="my-5 pt-5">
        <div class="container text-sans-serif">
          <div class="row">
            <div class="col-md-5 ms-auto">
                <div class="position-relative">
                  <img class="max-width-50 w-100 position-relative z-index-2" src="../assets/img/payroll_image.png" alt="image">
                </div>
            </div>
            <div class="col-md-6 m-auto">
              <h2>Make your international Payroll easy</h2>
              <p class="mb-4 lead">
                Stop the pain of manually paying employees & contractors, and calculating complicated local taxes for payroll.
                Instead, pay your team members each month with 1 bulk payment, and Jasmine will make sure they get paid on time,
                in their preferred currency.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="my-5 pt-5">
        <div class="container text-sans-serif">
          <div class="row">
            <div class="col-md-6 m-auto">
              <h2>Benefits that work</h2>
              <p class="mb-4 lead">
                Your team members deserve the best, wherever they live. With Jasmine you can
                offer the best available benefits to your employees and contractors.
            </p>
            </div>
            <div class="col-md-5 ms-auto">
                <div class="position-relative">
                    <img class="max-width-50 w-100 position-relative z-index-2" src="../assets/img/image.jpeg" alt="image">
                </div>
            </div>
          </div>
        </div>
      </section>

  </div>
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