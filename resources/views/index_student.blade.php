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
            <a href="javascript:void(0);">หน้าหลัก</a>
        </li>
        <li class="breadcrumb-item active">ประวัติการสมัครฝึกงาน</li>
        </ol>
    </nav>
@endsection


@section('Content')

    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="m-0">ประวัติการสมัครฝึกงาน</h4>
            <a href="{{ route('student.internshipform') }}" type="button" class="btn btn-primary"><span class="tf-icons bx bx-paper-plane bx-flashing bx-18px me-2"></span>ส่งเอกสารฝึกงาน</a>
        </div>

        <div class="row mt-6 d-flex justify-content-center">


        <div id="internship-list">
            
            @foreach($internships as $internship)
                <div class="col-md-12 internship-card mb-4" id="internship-{{ $internship->id }}">
                    <div class="card">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-header"><span class="bx bx-buildings"></span> {{ $internship->company->Company_Name }}</h5>
                            <p class="card-header text-secondary">{{ $internship->created_at }}</p>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1">รายละเอียดบริษัท</h5>
                            <p class="w-75 break-words" style="text-align: justify">{{ $internship->company->Company_detail }}</p>
                            <div class="d-flex justify-content-between">
                                <h6>ตำเเหน่ง : {{ $internship->Position }}</h6>
                                <h6 class="text-success"><span class="bx bx-bullseye bx-flashing "></span>{{ $internship->internshipStatus->StatusName }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


        </div>

    </div>
    
@endsection

@section('scripts')
    
    <script>
        
            // subscribe channel
            window.Echo.channel('internships')
                .listen('.internship.updated', (e) => { // ต้องมี dot (.) ข้างหน้า event name
                    console.log("Realtime data:", e); // ตรวจสอบข้อมูลที่ได้รับ

                    const data = e.internship;

                    const cardHtml = `
                        <div class="col-md-12 internship-card mb-4" id="internship-${data.id}">
                            <div class="card">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-header"><span class="bx bx-buildings"></span> ${data.company.Company_Name}</h5>
                                    <p class="card-header text-secondary">${data.created_at}</p>
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">รายละเอียดบริษัท</h5>
                                    <p class="w-75 break-words" style="text-align: justify">${data.company.Company_detail}</p>
                                    <div class="d-flex justify-content-between">
                                        <h6>ตำเเหน่ง : ${data.Position}</h6>
                                        <h6 class="text-success"><span class="bx bx-bullseye bx-flashing"></span>${data.internship_status.StatusName}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    // อัปเดตหรือเพิ่ม card
                    const existing = document.getElementById(`internship-${data.id}`);
                    if (existing) {
                        existing.outerHTML = cardHtml;
                    } else {
                        document.getElementById('internship-list').insertAdjacentHTML('afterbegin', cardHtml);
                    }
                });
        
    </script>


@endsection