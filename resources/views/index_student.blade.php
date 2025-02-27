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

            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">บริษัท ชิบหายการช่าง จำกัด</h5>
                    <div class="card-body">
                        <h5>asjkghdjkhasjk</h5>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
@endsection
