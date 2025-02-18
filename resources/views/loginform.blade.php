<!doctype html>
<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Login Page</title>
    <meta name="description" content="" />

    {{-- <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" /> --}}

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('image/CPlogo-sm.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

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
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>
  <body style="font-family: 'IBM Plex Sans Thai', serif;">
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card px-sm-6 px-0">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <img src="{{ asset('image/CPlogo.png') }}" alt="logoCP" style="height: 80px">
              </div>
              
              <div class="app-brand justify-content-center">
                  <span class="app-brand-text demo text-heading fw-bold">ระบบส่งเอกสารฝึกงาน</span>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1">ยินดีต้อนรับ 👋</h4>
              <p class="mb-6">สามารถใส่รหัสนักศึกษาเเละ รหัสผ่านเป็นเลขบัตรประชาชนเพื่อเข้าสู่ระบบ </p>

              <form id="formAuthentication" class="mb-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="usernumber" class="form-label">รหัสนักศึกษา</label>
                    <input
                        type="text"
                        class="form-control"
                        id="usernumber"
                        name="usernumber"
                        placeholder="กรุณาใส่รหัสนักศึกษา"
                        required
                        autofocus
                    />
                </div>
            
                <div class="mb-6 form-password-toggle">
                    <label class="form-label" for="password">รหัสผ่าน</label>
                    <div class="input-group input-group-merge">
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            name="password"
                            placeholder="กรุณาใส่รหัสผ่าน"
                            required
                        />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                </div>
            
                <div class="mb-8">
                    <div class="d-flex justify-content-between mt-8">
                        <div class="form-check mb-0 ms-2">
                            <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                            <label class="form-check-label" for="remember-me"> บันทึกการเข้าสู่ระบบ </label>
                        </div>
                        <a href="#">
                            <span>ลืมรหัสผ่าน ?</span>
                        </a>
                    </div>
                </div>
                
                <div class="mb-6">
                    <button class="btn btn-primary d-grid w-100" type="submit">เข้าสู่ระบบ</button>
                </div>
              </form>
            

              <p class="text-center">
                <span>ยังไม่มีบัญชีใช่ไหม ?</span>
                <a href="auth-register-basic.html">
                  <span>ติดต่อเจ้าหน้าที่</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/extended-ui-perfect-scrollbar.js') }}"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ!',
                    text: '{{ session("success") }}',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'ตกลง'
                });
            @endif
    
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: '{{ session("error") }}',
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'ตกลง'
                });
            @endif
    
            @if($errors->any())
                Swal.fire({
                    icon: 'warning',
                    title: 'ไม่พบข้อมูล!',
                    text: '{{ $errors->first() }}',
                    confirmButtonColor: '#f39c12',
                    confirmButtonText: 'ตกลง'
                });
            @endif
        });
    </script>
  

  </body>
</html>
