@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang, {{ Auth::user()->name }}</h1>
</div>
  

<!-- ============================================================== -->
<!-- Table -->
<!-- ============================================================== -->
{{-- <div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex">
                    <div>
                        <h4 class="card-title">Top Selling Products</h4>
                        <h5 class="card-subtitle">Overview of Top Selling Items</h5>
                    </div>
                    <div class="ms-auto">
                        <div class="dl">
                            <select class="form-select shadow-none">
                                <option value="0" selected>Monthly</option>
                                <option value="1">Daily</option>
                                <option value="2">Weekly</option>
                                <option value="3">Yearly</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- title -->
            </div>
            <div class="table-responsive">
                <table class="table v-middle">
                    <thead>
                        <tr class="bg-light">
                            <th class="border-top-0">Products</th>
                            <th class="border-top-0">License</th>
                            <th class="border-top-0">Support Agent</th>
                            <th class="border-top-0">Technology</th>
                            <th class="border-top-0">Tickets</th>
                            <th class="border-top-0">Sales</th>
                            <th class="border-top-0">Earnings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><a
                                            class="btn btn-circle d-flex btn-info text-white">EA</a>
                                    </div>
                                    <div class="">
                                        <h4 class="m-b-0 font-16">Elite Admin</h4>
                                    </div>
                                </div>
                            </td>
                            <td>Single Use</td>
                            <td>John Doe</td>
                            <td>
                                <label class="label label-danger">Angular</label>
                            </td>
                            <td>46</td>
                            <td>356</td>
                            <td>
                                <h5 class="m-b-0">$2850.06</h5>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}
<!-- ============================================================== -->
<!-- Table -->
<!-- ============================================================== -->


@endsection