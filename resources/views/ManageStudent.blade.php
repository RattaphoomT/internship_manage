@extends('layout')



@section('title')
    จัดการบัญชีนักศึกษา
@endsection


@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="{{ route('personnel.index') }}">หน้าหลัก</a>
        </li>
        <li class="breadcrumb-item">บุคลากร
        </li>
            <li class="breadcrumb-item active">จัดการบัญชีนักศึกษา</li>
        </ol>
    </nav>
@endsection



@section('Content')

    <!-- Hoverable Table rows -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">บัญชีนักศึกษาทั้งหมด</h5>
            <div>
                <a href="" type="button" class="btn btn-outline-success"><i class='bx bx-plus'></i> เพิ่มนักศึกษาด้วย Excel</a>
                <a href="{{ route('personnel.CreateStudent') }}" type="button" class="btn btn-primary"><i class='bx bx-plus'></i> เพิ่มนักศึกษา</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap p-5">
            <table class="table table-hover" id="basic-datatable">
              <thead>
                <tr>
                  <th>รหัสนักศึกษา</th>
                  <th>ชื่อ-นามสกุล</th>
                  <th>ชั้นปี</th>
                  <th>อีเมล</th>
                  <th>สถาณะฝึกงาน</th>
                  <th>ลงทะเบียนเมื่อ</th>
                  <th>เเก้ไขล่าสุด</th>
                  <th>จัดการ</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  @foreach ($users as $user)
                      @if ($user->user_role_iduser_role == '2')
                          <tr>
  
                              <td>{{ $user->User_name }}</td>
                              <td>{{ $user->First_name }} {{ $user->Last_name }}</td>
                              <td class="align-items-center">{{ $user->Year }}</td>
                              <td>{{ $user->Email }}</td>
                              <td><span class="badge bg-label-primary me-1">{{ $user->Grade }}</span></td>
  
                              <td>{{ $user->created_at }}</td>
                              <td>{{ $user->updated_at }}</td>
                              <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> เเก้ไข</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> ลบบัญชี</a
                                      >
                                      </div>
                                  </div>
                              </td>
                          </tr>
                      @endif
                  @endforeach
              </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->

@endsection
