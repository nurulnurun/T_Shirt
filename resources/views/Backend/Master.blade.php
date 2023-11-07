
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> {{ config('app.name') }} | Admin Dashboard </title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/html/dist/assets/images/favicon.ico">

      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href=https://templates.iqonic.design/hope-ui/html/dist/assets/css/core/libs.min.css">

      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="https://templates.iqonic.design/hope-ui/html/dist/assets/vendor/aos/dist/aos.css">

      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="https://templates.iqonic.design/hope-ui/html/dist/assets/css/hope-ui.min.css?v=4.0.0">

      <!-- Custom Css -->
      <link rel="stylesheet" href="https://templates.iqonic.design/hope-ui/html/dist/assets/css/custom.min.css?v=4.0.0">

      <!-- Dark Css -->
      <link rel="stylesheet" href="https://templates.iqonic.design/hope-ui/html/dist/assets/css/dark.min.css">

      <!-- Customizer Css -->
      <link rel="stylesheet" href="https://templates.iqonic.design/hope-ui/html/dist/assets/css/customizer.min.css">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- RTL Css -->
      <link rel="stylesheet" href="https://templates.iqonic.design/hope-ui/html/dist/assets/css/rtl.min.css">
      @notifyCss
      <style>
        .notify{
            z-index:1000000;
        }
      </style>

  </head>
  <body class="  ">
    <x-notify::notify />
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
          </div>
      </div>    </div>
    <!-- loader END -->

    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            @include('Partials.Side-Bar-Icon-Toggle')
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            @include('Partials.Side-Navigation-MenuBar')
        </div>

    </aside>
    <main class="main-content">
      <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
          @include('Partials.Header-Top-Navigation-MenuBar')
        </nav>          <!-- Nav Header Component Start -->
          <div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>

                                  <h1>Welcome to my Admin Panel E-commerce Website.</h1>
                              </div>
                              <div>
                                  <a href="" class="btn btn-link btn-soft-light">
                                      <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z" fill="currentColor"></path>
                                          <path opacity="0.4" d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z" fill="currentColor"></path>
                                      </svg>
                                      T-SHIRT
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="iq-header-img">
                  <img src="https://templates.iqonic.design/hope-ui/html/dist/assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="https://templates.iqonic.design/hope-ui/html/dist/assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="https://templates.iqonic.design/hope-ui/html/dist/assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="https://templates.iqonic.design/hope-ui/html/dist/assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="https://templates.iqonic.design/hope-ui/html/dist/assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="https://templates.iqonic.design/hope-ui/html/dist/assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      <div>
        @yield('Master Main Content')
      </div>
    </main>
    <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <svg width="24" viewBox="0 0 24 24" class="animated-rotate icon-24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
      </svg>
    </a>
     <a class="btn btn-fixed-end btn-secondary btn-icon btn-dashboard" href="../landing-pages/index.html">
      Landing Pages
    </a>
    <!-- Wrapper End-->

    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
      @include('Partials.offcanvas-Settings')
    </div>

    <!-- Library Bundle Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/charts/vectore-chart.js"></script>
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/charts/dashboard.js" ></script>

    <!-- fslightbox Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/vendor/aos/dist/aos.js"></script>

    <!-- App Script -->
    <script src="https://templates.iqonic.design/hope-ui/html/dist/assets/js/hope-ui.js" defer></script>
    @notifyJs

  </body>
</html>
