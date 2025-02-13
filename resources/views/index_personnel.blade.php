@extends('layout')



@section('title')
    ภาพรวมของระบบ
@endsection


@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">หน้าหลัก</a>
        </li>
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">บุคลากร</a>
        </li>
        <li class="breadcrumb-item active">ภาพรวมของระบบ</li>
        </ol>
    </nav>
@endsection


@section('Content')

<div class="row">

    <div class="col-lg-3 col-md-6 col-12 mb-12">
        <div class="card h-100">
    
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between mb-4">
              <div class="avatar flex-shrink-0">
                <img
                  src="../assets/img/icons/unicons/chart-success.png"
                  alt="chart success"
                  class="rounded" />
              </div>
            </div>
            <p class="mb-1">นักศึกษาทั้งหมด</p>
            <h4 class="card-title mb-3">2,628 คน</h4>
            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
          </div>
    
        </div>
      </div>
    
      <div class="col-lg-3 col-md-6 col-12 mb-12">
        <div class="card h-100">
    
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between mb-4">
              <div class="avatar flex-shrink-0">
                <img
                  src="../assets/img/icons/unicons/chart-success.png"
                  alt="chart success"
                  class="rounded" />
              </div>
            </div>
            <p class="mb-1">รออัพโหลดเอกสาร</p>
            <h4 class="card-title mb-3">200 คน</h4>
            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
          </div>
    
        </div>
      </div>
    
      <div class="col-lg-3 col-md-6 col-12 mb-12">
        <div class="card h-100">
    
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between mb-4">
              <div class="avatar flex-shrink-0">
                <img
                  src="../assets/img/icons/unicons/chart-success.png"
                  alt="chart success"
                  class="rounded" />
              </div>
            </div>
            <p class="mb-1">กำลังฝึกงาน</p>
            <h4 class="card-title mb-3">250 คน</h4>
            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
          </div>
    
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12 mb-12">
        <div class="card h-100">
    
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between mb-4">
              <div class="avatar flex-shrink-0">
                <img
                  src="../assets/img/icons/unicons/chart-success.png"
                  alt="chart success"
                  class="rounded" />
              </div>
            </div>
            <p class="mb-1">สำเร็จการฝึกงาน</p>
            <h4 class="card-title mb-3">2,456 คน</h4>
            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
          </div>
    
        </div>
      </div>

</div>
    
@endsection
