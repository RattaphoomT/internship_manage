@extends('layout')



@section('title')
    เพิ่มบัญชีนักศึกษา
@endsection


@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="{{ route('personnel.index') }}">หน้าหลัก</a>
        </li>
        <li class="breadcrumb-item">บุคลากร
        </li>
            <li class="breadcrumb-item active">เพิ่มบัญชีนักศึกษา</li>
        </ol>
    </nav>
@endsection



@section('Content')

<div class="card mb-6">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">เพิ่มบัญชีนักศึกษา</h5>
      <small class="text-muted float-end">กรุณากรอบข้อมูลให้ครบ</small>
    </div>
    <div class="card-body container">
      <form action="{{ route('CreateStudent') }}" method="POST">
        @csrf

        <div class="mb-6">
            <div class="row">

              <!-- Input ชื่อจริง -->
              <div class="col-md-6">
                <label class="form-label" for="basic-icon-default-firstname">ชื่อจริง<code>*</code></label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="First_name"
                    placeholder="ชื่อจริง" aria-label="ชื่อจริง" name="First_name" required>
                </div>
              </div>
          
              <!-- Input นามสกุล -->
              <div class="col-md-6">
                <label class="form-label" for="basic-icon-default-lastname">นามสกุล<code>*</code></label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="Last_name"
                    placeholder="นามสกุล" aria-label="นามสกุล" name="Last_name" required>
                </div>
              </div>
              
            </div>
        </div>

        <div class="mb-6">
            <div class="row" >

                <div class="col-md-6">
                    <label class="form-label" for="basic-icon-default-company">รหัสนักศึกษา<code>*</code></label>
                    <div class="input-group input-group-merge">
                        <span id="User_name" class="input-group-text"
                        ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="รหัสนักศึกษา"
                        aria-label="รหัสนักศึกษา"
                        name="User_name"
                        aria-describedby="basic-icon-default-company2" required/>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="basic-icon-default-company">วันเกิด</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-party"></i
                        ></span>
                        <input
                        type="date"
                        id="html5-date-input"
                        class="form-control"
                        name="Birthday"
                        placeholder="ดด/วว/ปปป"
                        aria-label="ดด/วว/ปปป"
                        aria-describedby="basic-icon-default-company2" />
                    </div>
                </div>

            </div>
        </div>


        <div class="mb-6">

            <div class="row" >

                <div class="col-md-4">
                    <label class="form-label" for="basic-icon-default-firstname">เชื้อชาติ</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-world"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-firstname"
                        placeholder="เชื้อชาติ" aria-label="เชื้อชาติ" name="Ethnicity">
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label" for="basic-icon-default-firstname">สัญชาติ</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-world"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-firstname"
                        placeholder="สัญชาติ" aria-label="สัญชาติ" name="Nationality">
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label" for="basic-icon-default-firstname">ศาสนา</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-church"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-firstname"
                        placeholder="ศาสนา" aria-label="ศาสนา" name="Religion">
                    </div>
                </div>

            </div>

        </div>

        <div class="mb-6">

            <div class="row" >

                <div class="col-md-4">
                    <label class="form-label" for="basic-icon-default-firstname">สิทธิการรักษา<code>*</code></label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-home-heart"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-firstname"
                        placeholder="สิทธิการรักษา" aria-label="สิทธิการรักษา" name="Treatment" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label" for="basic-icon-default-firstname">เกรดเฉลี่ย<code>*</code></label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-spreadsheet"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-firstname"
                        placeholder="เกรดเฉลี่ย" aria-label="เกรดเฉลี่ย" name="Grade" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label" for="basic-icon-default-firstname">ชั้นปี<code>*</code></label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-building-house"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-firstname"
                        placeholder="ชั้นปี" aria-label="ชั้นปี" name="Year" required>
                    </div>
                </div>

            </div>

        </div>

        <div class="mb-6">
          <label class="form-label" for="basic-icon-default-email">อีเมล<code>*</code></label>
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
            <input
              type="text"
              id="basic-icon-default-email"
              class="form-control"
              placeholder="กรุณากรอกอีเมล"
              name="Email"
              aria-label="john.doe"
              aria-describedby="basic-icon-default-email2" required/>
            
          </div>
          <div class="form-text">กรุณาใช้ KKUMAIL</div>
        </div>

        <div class="mb-6">
          <label class="form-label" for="basic-icon-default-phone">เบอร์มือถือ<code>*</code></label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-phone2" class="input-group-text"
              ><i class="bx bx-phone"></i
            ></span>
            <input
              type="text"
              id="basic-icon-default-phone"
              class="form-control phone-mask"
              placeholder="เบอร์ที่สามารถติดต่อได้"
              name="phone"
              aria-label="658 799 8941"
              aria-describedby="basic-icon-default-phone2" required/>
          </div>
        </div>

        <div class="mb-6">
          <label class="form-label" for="basic-icon-default-message">ที่อยู่นักศึกษา</label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-message2" class="input-group-text"
              ><i class="bx bx-map"></i
            ></span>
            <textarea
              id="basic-icon-default-message"
              class="form-control"
              placeholder="ที่อยู่นักศึกษา"
              name="Address"
              aria-label="ที่อยู่นักศึกษา"
              aria-describedby="basic-icon-default-message2"></textarea>
          </div>
        </div>

        <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password">รหัสผ่าน<code>*</code></label>
            <div class="input-group input-group-merge">
                <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="กรุณาตั้งรหัสผ่าน"
                    required
                    />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">บันทึก</button>
      </form>
    </div>
</div>

@endsection
