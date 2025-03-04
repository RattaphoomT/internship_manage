<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('image/CPlogo-sm.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

      
    <!-- Thai Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  </head>

  <body style="font-family: 'IBM Plex Sans Thai', serif;">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <img src="{{ asset('image/CPlogo.png') }}" alt="CPlogo" style="width: 90%">
            {{-- <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">sneat</span>
            </a> --}}

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->

            <!-- Apps & Pages -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">พนักงาน &amp; บุคลากร</span>
            </li>

            {{-- เอาไว้ทำเมนูเเจ้งเตือน --}}
            {{-- <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div class="text-truncate" data-i18n="Email">Email</div>
                <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
              </a>
            </li> --}}

            {{-- staff menu --}}
            <li class="menu-item {{ request()->routeIs('personnel.index') ? 'active' : '' }} ">
                <a
                  href="{{ route('personnel.index') }}"
                  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-tachometer"></i>
                  <div class="text-truncate" data-i18n="ภาพรวมของระบบ">ภาพรวมของระบบ</div>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('ManageStudent') ? 'active' : '' }} ">
              <a
                href="{{ route('ManageStudent') }}"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="Chat">จัดการบัญชีนักศึกษา</div>
              </a>
            </li>

            <!-- จัดการสถาณะเอกสารนักศึกษา -->
            <li class="menu-item open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div class="text-truncate" data-i18n="Account Settings">จัดการเอกสาร</div>
              </a>

                <ul class="menu-sub">

                    <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Account">รออัพโหลดเอกสาร</div>
                    </a>
                    </li>

                    <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Notifications">อัพโหลดเอกสารเเล้ว</div>
                    </a>
                    </li>

                    <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">ตรวจเอกสารเรียบร้อย</div>
                    </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">เอกสารตรวจสอบไม่ผ่าน</div>
                        </a>
                    </li>

                    <li class="menu-item">
                      <a href="pages-account-settings-connections.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Connections">เเก้ไขเอกสารเเล้วรอตรวจสอบ</div>
                      </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">เอกสารตรวจสอบผ่าน</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">นักศึกษารับเอกสารเตรียมส่ง</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">เจ้าหน้าที่เตรียมส่งเอกสาร</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">บริษัทตอบรับ</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">บริษัทปฏิเสธ</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">กำลังฝึกงาน</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">จบการฝึกงาน</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">ผ่านการฝึกงาน</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a
                  href="#"
                  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-buildings"></i>
                  <div class="text-truncate" data-i18n="Chat">เพิ่มบริษัทฝึกงาน</div>
                </a>
            </li>
            {{-- End staff menu --}}

            
            <!-- นักศึกษา -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">นักศึกษา</span></li>
            <!-- Cards -->
            <li class="menu-item {{ request()->routeIs('student.index') ? 'active' : '' }}">
              <a href="{{ route('student.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time-five"></i>
                <div class="text-truncate" data-i18n="Basic">ประวัติการสมัคร</div>
              </a>
            </li>
        
            <li class="menu-item">
              <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div class="text-truncate" data-i18n="Boxicons">รายชื่อบริษัทที่เปิดรับ</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
                <div class="text-truncate" data-i18n="Boxicons">ข้อปฏิบัติในการฝึกงาน</div>
              </a>
            </li>

            <!-- Admin menu -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">ผู้ดูเเลเเละพัฒนาระบบ</span></li>
            

            
            <li class="menu-item">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-tachometer"></i>
                <div class="text-truncate" data-i18n="Tables">รายงานภาพรวม</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="Tables">จัดการบัญชีผู้ใช้</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time-five"></i>
                <div class="text-truncate" data-i18n="Tables">ประวัติการทำรายการ</div>
              </a>
            </li>

            <!-- End Admin menu -->

            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">เเจ้งปัญหาการใช้งาน</span></li>

            <li class="menu-item">
              <a
                href="#"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div class="text-truncate" data-i18n="Support">ติดต่อเจ้าหน้าที่</div>
              </a>
            </li>

            <li class="menu-item">
              <a
                href="#"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div class="text-truncate" data-i18n="Documentation">ข้อเสนอเเนะ</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="bx bx-menu bx-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search bx-md"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="ค้นหา..."
                    aria-label="ค้นหา..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <li class="nav-item lh-1 me-4">
                    <div class="flex-grow-1 divider text-end">
                        <h6 class="mb-0">{{ Auth::user()->First_name }} {{ Auth::user()->Last_name }}</h6>
                        <small class="text-muted text-end">{{ Auth::user()->userRole->user_role_name }}</small>
                    </div>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>

                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">นายรัฐภูมิ ธนาโชติอัครโภคิน</h6>
                            <small class="text-muted">พนักงาน</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user bx-md me-3"></i><span>ข้อมูลส่วนตัว</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> <i class="bx bx-cog bx-md me-3"></i><span>เเก้ไขข้อมูล</span> </a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card bx-md me-3"></i
                          ><span class="flex-grow-1 align-middle">Billing Plan</span>
                          <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                        </span>
                      </a>
                    </li>

                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>

                    <li>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>

                      <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="bx bx-power-off bx-md me-3 text-danger"></i><span class="text-danger">ออกจากระบบ</span>
                      </a>

                    </li>

                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
              <!-- Layout Demo -->

              @yield('breadcrumb')

              <div class="content-wrapper">
                  @yield('Content')
              </div>
              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-fluid">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , Made with ❤️ by RTP
                  </div>
                  <div class="d-none d-lg-inline-block">
                    
                    {{-- <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                    <a
                      href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link"
                      >Support</a
                    > --}}
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

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


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Include jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <!-- DataTables Bootstrap 5 Integration -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ!',
                    text: '{{ session("success") }}',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'ตกลง',
                    customClass: {
                        popup: 'swal2-custom',
                        backdrop: 'swal2-backdrop-custom'
                    },
                    didOpen: () => {
                        document.querySelector('.swal2-container').style.zIndex = '9999';
                    }
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: '{{ session("error") }}',
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'ตกลง',
                    customClass: {
                        popup: 'swal2-custom',
                        backdrop: 'swal2-backdrop-custom'
                    },
                    didOpen: () => {
                        document.querySelector('.swal2-container').style.zIndex = '9999';
                    }
                });
            @endif

            @if($errors->any())
                Swal.fire({
                    icon: 'warning',
                    title: 'ผิดพลาด!',
                    text: '{{ $errors->first() }}',
                    confirmButtonColor: '#f39c12',
                    confirmButtonText: 'ตกลง',
                    customClass: {
                        popup: 'swal2-custom',
                        backdrop: 'swal2-backdrop-custom'
                    },
                    didOpen: () => {
                        document.querySelector('.swal2-container').style.zIndex = '9999';
                    }
                });
            @endif
        });

    </script>
    
    

    <script>
      $(document).ready(function() {
            $.fn.dataTable.ext.errMode = 'none';
            let table = $('#basic-datatable').DataTable({
                "lengthMenu": [
                    [10, 20, 50, -1],
                    [10, 20, 50, "ทั้งหมด"]
                ],
                "language": {
                    "lengthMenu": "แสดง _MENU_ รายการ",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                    "infoEmpty": "ไม่มีรายการที่แสดง",
                    "infoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
                    "search": "ค้นหา:",
                    "paginate": {
                        "first": "หน้าแรก",
                        "last": "หน้าสุดท้าย",
                        "next": "ถัดไป",
                        "previous": "ก่อนหน้า"
                    }
                },
            });
        });
    </script>

  @yield('scripts')

  </body>
</html>
