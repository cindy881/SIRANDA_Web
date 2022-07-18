@extends('dashboard.layouts.app')

@section('content')

<div class="container-lg">
    <div class="row">
    {{-- Kotak --}}
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-primary">
          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                  <svg class="icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                  </svg>)</span></div>
              <div>Users</div>
            </div>
            <div class="dropdown">
              <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
            <canvas class="chart" id="card-chart1" height="70"></canvas>
          </div>
        </div>
      </div>
    </div>
    {{-- Tabel --}}
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-header">Data Pelanggaran</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table border mb-0">
                <thead class="table-light fw-semibold">
                  <tr class="align-middle">
                    <th class="text-center">
                      No.
                    </th>
                    <th>User</th>
                    <th class="text-center">Country</th>
                    <th>Usage</th>
                    <th class="text-center">Payment Method</th>
                    <th>Activity</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="align-middle">
                    <td class="text-center">
                      <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
     </div>
    </div>
</div>





@endsection