@extends('layout')



@section('title')
    ภาพรวมของระบบ
@endsection


@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">นักศึกษา</a>
        </li>
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">ส่งเอกสารฝึกงาน</a>
        </li>
        <li class="breadcrumb-item active">เเบบฟอร์มส่งเอกสารฝึกงาน</li>
        </ol>
    </nav>
@endsection


@section('Content')

    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="m-0">เเบบฟอร์มส่งเอกสารฝึกงาน</h4>
        </div>

        <form action="{{ route('CreateInternship') }}" method="POST">
            @csrf
            <div class="row mt-6">

                <div class="col-md-12">
    
                    <div class="card">
                        <h5 class="card-header"><i class='bx bx-user-circle' style="font-size: 130%;"></i> ประวัตินักศึกษา</h5>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4">
        
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">ชื่อนักศึกษา :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->First_name }} {{ Auth::user()->Last_name }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">วันเกิด :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Birthday }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">เชื้อชาติ :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Ethnicity }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">สัญชาติ :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Nationality }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">ศาสนา :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Religion }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">อีเมล :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Email }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">เบอร์มือถือ :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->phone }}</b></h6></div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">ที่อยู่ :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Address }}</b></h6></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                       <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">รหัสนักศึกษา :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->User_name }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">เกรดเฉลี่ย :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Grade }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">ชั้นปีที่ :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Year }}</b></h6></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-4 col-lg-4"><h6 class="mt-3 mt-sm-2 mb-0 mb-sm-3">สิทธิการรักษา :</h6></div>
                                            <div class="col-12 col-sm-9 col-md-8 col-lg-8"><h6 class="mt-0 mt-sm-2 mb-0 mb-sm-3"><b>{{ Auth::user()->Treatment }}</b></h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <hr>

                            <input class="form-control" type="file" id="formFileMultiple" name="user_user_id"   value="{{ Auth::user()->user_id }}" hidden multiple required/>
                            <input class="form-control" type="file" id="formFileMultiple" name="internshipstatus_Internship_Status_id"   value="2" hidden multiple required/>
    
                            <h5 class="mt-6">อัพโหลดเอกสารต่อไปนี้</h5>
                            <div class="container">
                                    <div class="mb-4 col-12 col-lg-6">
                                        <label for="formFileMultiple1" class="form-label"><h6 class="m-0">CP-Intern02 - ประวัตินักศึกษา<code>*</code></h6></label>
                                        <input class="form-control" type="file" id="formFileMultiple1" name="Doc_CP_intern02" multiple required/>
                                        <div class="form-text">ต้องเป็นไฟล์ PDF เท่านั้น</div>
                                    </div>
                                    <div class="mb-4 col-12 col-lg-6">
                                        <label for="formFileMultiple2" class="form-label"><h6 class="m-0">CP-Intern03 - หนังสือยินยอมผู้ปกครอง<code>*</code></h6></label>
                                        <input class="form-control" type="file" id="formFileMultiple2" name="Doc_CP_intern03" multiple required/>
                                        <div class="form-text">ต้องเป็นไฟล์ PDF เท่านั้น</div>
                                    </div>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="card mt-6">
                        <h5 class="card-header"><i class='bx bx-buildings' style="font-size: 130%;"></i> รายละเอียดบริษัท</h5>
                        <hr class="m-0">
                        <div class="card-body">
                            
                                <div class="container">
                                    <div class="mb-6">
                                        <div class="row">
                            
                                          <div class="col-md-6">
                                            <label class="form-label" for="basic-icon-default-firstname"><h6 class="m-0">ชื่อบริษัท<code>*</code></h6></label>
                                            <div class="input-group input-group-merge">
                                              <span class="input-group-text"><i class="bx bx-buildings"></i></span>
                                              <input type="text" class="form-control" id="First_name"
                                                placeholder="ชื่อบริษัท" aria-label="ชื่อบริษัท" name="Company_Name" required>
                                            </div>
                                          </div>
                                      
                                          <div class="col-md-6">
                                            <label class="form-label" for="basic-icon-default-lastname"><h6 class="m-0">ลิ้งของบริษัท</h6></label>
                                            <div class="input-group input-group-merge">
                                              <span class="input-group-text"><i class="bx bx-link"></i></span>
                                              <input type="text" class="form-control" id="Last_name"
                                                placeholder="ลิ้งของบริษัท" aria-label="ลิ้งของบริษัท" name="Comlink">
                                            </div>
                                          </div>
                                          
                                        </div>
                                    </div>
        
                                    <div class="row mb-6">
                                        <div class="col-md-4">
                                            <label class="form-label" for="basic-icon-default-lastname"><h6 class="m-0">ตำเเหน่งที่สมัคร<code>*</code></h6></label>
                                            <div class="input-group input-group-merge">
                                              <span class="input-group-text"><i class="bx bx-coffee"></i></span>
                                              <input type="text" class="form-control" id="Last_name"
                                                placeholder="ตำเเหน่งที่สมัคร" aria-label="ตำเเหน่งที่สมัคร" name="Position">
                                            </div>
                                        </div>
        
                                        <div class="col-md-4">
                                            <label class="form-label" for="basic-icon-default-lastname"><h6 class="m-0">ชื่อผู้ประสานงาน/พี่เลี้ยง<code>*</code></h6></label>
                                            <div class="input-group input-group-merge">
                                              <span class="input-group-text"><i class="bx bx-user"></i></span>
                                              <input type="text" class="form-control" id="Last_name"
                                                placeholder="ชื่อผู้ประสานงาน/พี่เลี้ยง " aria-label="ชื่อผู้ประสานงาน/พี่เลี้ยง " name="HRname">
                                            </div>
                                        </div>
        
                                        <div class="col-md-4">
                                            <label class="form-label" for="basic-icon-default-lastname"><h6 class="m-0">เบอร์ผู้ประสานงาน/พี่เลี้ยง<code>*</code></h6></label>
                                            <div class="input-group input-group-merge">
                                              <span class="input-group-text"><i class="bx bx-phone-call"></i></span>
                                              <input type="text" class="form-control" id="Last_name"
                                                placeholder="เบอร์ผู้ประสานงาน/พี่เลี้ยง" aria-label="เบอร์ผู้ประสานงาน/พี่เลี้ยง" name="HR_contact">
                                            </div>
                                            <div class="form-text">หากไม่ทราบเบอร์พี่เลี้ยงให้ใส่เบอร์บริษัทเเทน</div>
                                        </div>
                                    </div>
        
                                    <div class="row md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="basic-icon-default-message"><h6 class="m-0">รายละเอียดอื่น ๆ (ลักษณะงาน, บริษัท/หน่วยงานเกี่ยวข้องกับด้านใด)</h6></label>
                                            <div class="input-group input-group-merge">
                                              <span id="basic-icon-default-message2" class="input-group-text"
                                                ><i class="bx bx-comment-detail"></i
                                              ></span>
                                              <textarea
                                                id="basic-icon-default-message"
                                                class="form-control"
                                                placeholder="รายละเอียดบริษัท"
                                                name="Company_detail"
                                                aria-label="รายละเอียดบริษัท"
                                                aria-describedby="basic-icon-default-message2"></textarea>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="row md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="basic-icon-default-message"><h6 class="m-0">ที่อยู่บริษัท/หน่วยงาน<code>*</code></h6></label>
                                            <div class="input-group input-group-merge">
                                              <span id="basic-icon-default-message2" class="input-group-text"
                                                ><i class="bx bx-map-pin"></i
                                              ></span>
                                              <textarea
                                                id="basic-icon-default-message"
                                                class="form-control"
                                                placeholder="ที่อยู่บริษัท/หน่วยงาน"
                                                name="Company_Adress"
                                                aria-label="ที่อยู่บริษัท/หน่วยงาน"
                                                aria-describedby="basic-icon-default-message2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <h5 class="mt-6 mb-6">กำหนดการเเละเอกสาร</h5>
    
                                <div class="container">
    
                                    <div class="row mb-6">
                                        <div class="col-md-6">
                                            <label class="form-label" for="basic-icon-default-company"><h6 class="m-0">วันที่เริ่มฝึกงาน<code>*</code></h6></label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-company2" class="input-group-text"
                                                ></span>
                                                <input
                                                type="date"
                                                id="html5-date-input"
                                                class="form-control"
                                                name="StartDate"
                                                placeholder="ดด/วว/ปปป"
                                                aria-label="ดด/วว/ปปป"
                                                aria-describedby="basic-icon-default-company2" />
                                            </div>
                                            <div class="form-text">หากบริษัทไม่ได้กำหนด ให้ใส่ตามกำหนดการมหาลัย</div>
                                        </div>
                                          
                                        <div class="col-md-6">
                                            <label class="form-label" for="basic-icon-default-company"><h6 class="m-0">วันที่สิ้นสุดฝึกงาน<code>*</code></h6></label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-company2" class="input-group-text"
                                                ></span>
                                                <input
                                                type="date"
                                                id="html5-date-input"
                                                class="form-control"
                                                name="EndDate"
                                                placeholder="ดด/วว/ปปป"
                                                aria-label="ดด/วว/ปปป"
                                                aria-describedby="basic-icon-default-company2" />
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="row mb-6">
                                        <div class="col-md-6">
                                            <label class="form-label" for="basic-icon-default-company"><h6 class="m-0">กำหนดการส่งเอกสารของทางบริษัท/หน่วยงาน (หากมี)</h6></label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-company2" class="input-group-text"
                                                ></span>
                                                <input
                                                type="date"
                                                id="html5-date-input"
                                                class="form-control"
                                                name="Delivery_Date"
                                                placeholder="ดด/วว/ปปป"
                                                aria-label="ดด/วว/ปปป"
                                                aria-describedby="basic-icon-default-company2" />
                                            </div>
                                            <div class="form-text">หากบริษัทไม่ได้กำหนด เอกสารจะถูกส่งตามกำหนดการมหาลัย</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleFormControlSelect1" class="form-label"><h6 class="m-0">การส่งเอกสาร<code>*</code></h6></label>
                                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="DeliveryOption">
                                                <option selected>รูปเเบบการส่งเอกสาร..</option>
                                                <option value="รับไปส่งเอง">รับไปส่งเอง</option>
                                                <option value="วิทยาลัยฯ ส่งให้ตามที่อยู่บริษัท/หน่วยงาน ตามที่แจ้ง">วิทยาลัยฯ ส่งให้ตามที่อยู่บริษัท/หน่วยงาน ตามที่แจ้ง</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="mb-4 col-12 col-lg-6">
                                        <label for="formFileMultiple3" class="form-label"><h6 class="m-0">CP-Intern01 - รายละเอียดบริษัท<code>*</code></h6></label>
                                        <input class="form-control" type="file" id="formFileMultiple3" name="Doc_CP_intern01" multiple required/>
                                        <div class="form-text">ต้องเป็นไฟล์ PDF เท่านั้น</div>
                                    </div>
                                    <div class="mb-4 col-12 col-lg-6">
                                        <label for="formFileMultiple4" class="form-label"><h6 class="m-0">Resume<code>*</code></h6></label>
                                        <input class="form-control" type="file" id="formFileMultiple4" name="Doc_CP_intern04" multiple required/>
                                        <div class="form-text">ต้องเป็นไฟล์ PDF เท่านั้น</div>
                                    </div>
                                    <div class="mb-4 col-12 col-lg-6">
                                        <label for="formFileMultiple5" class="form-label"><h6 class="m-0">เอกสารเพิ่มเติมที่บริษัทขอ-01</h6></label>
                                        <input class="form-control" type="file" id="formFileMultiple5" name="Doc_5" multiple />
                                        <div class="form-text">ต้องเป็นไฟล์ PDF เท่านั้น</div>
                                    </div>
                                    <div class="mb-4 col-12 col-lg-6">
                                        <label for="formFileMultiple6" class="form-label"><h6 class="m-0">เอกสารเพิ่มเติมที่บริษัทขอ-01</h6></label>
                                        <input class="form-control" type="file" id="formFileMultiple6" name="Doc_6" multiple />
                                        <div class="form-text">ต้องเป็นไฟล์ PDF เท่านั้น</div>
                                    </div>
                                    <div class="mb-4 col-12 col-lg-6">
                                        <label for="formFileMultiple7" class="form-label"><h6 class="m-0">เอกสารเพิ่มเติมที่บริษัทขอ-01</h6></label>
                                        <input class="form-control" type="file" id="formFileMultiple7" name="Doc_7" multiple />
                                        <div class="form-text">ต้องเป็นไฟล์ PDF เท่านั้น</div>
                                    </div>
                                    
                                </div>
    
                        </div>
                    </div>
    
                </div>
    
                <div class="d-flex justify-content-center mt-6 mb-6">
                    <button type="submit" class="btn btn-primary w-50">ยืนยันการส่งเอกสารฝึกงาน</button>
                </div>
            </div>
        </form>
        
    </div>
    
@endsection
