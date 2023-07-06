@extends('layouts.admin-app')
@section('content')

    <!--**********************************
        Content body start
    ***********************************-->

    <!-- row -->
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h2 class="mb-3 me-auto">Welcome to Zed Customer Management System</h2>

        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-3 col-sm-3">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="menu">
                                    <span class="font-w500 fs-16 d-block mb-2">Total Customers</span>
                                    <h2>{{$customerCount}}</h2>
                                </div>
                                <div class="d-inline-block position-relative donut-chart-sale">
                                    <span class="donut1"
                                          data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/8</span>
                                    <small class="text-black">
                                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M30.8495 7.03697H22.274V1.75781H28.5565V0H20.511V7.03697H11.9357V12.3132H13.7565L13.919 14.7549H9.2884C5.81084 14.7549 2.93817 17.3859 2.56674 20.7561C1.51859 21.1073 0.761047 22.0953 0.761047 23.2571C0.761047 24.4244 1.5257 25.4164 2.58166 25.7632C2.94436 28.1582 5.02231 30 7.5238 30H27.8522L29.0287 12.3132H30.8495V7.03697ZM9.2884 16.5127H17.0291C19.4851 16.5127 21.5318 18.2881 21.9496 20.6188H4.36785C4.78564 18.2881 6.83214 16.5127 9.2884 16.5127ZM3.40692 22.3766H22.9103C23.3972 22.3766 23.7934 22.7717 23.7934 23.2569C23.7934 23.7424 23.3972 24.1372 22.9103 24.1372H3.40692C2.92003 24.1372 2.52405 23.7424 2.52405 23.2569C2.52405 22.7717 2.92003 22.3766 3.40692 22.3766ZM7.5238 28.2422C6.04545 28.2422 4.79643 27.2479 4.41146 25.8952H21.9058C21.521 27.2479 20.272 28.2422 18.7934 28.2422H7.5238ZM26.2024 28.2422H22.599C23.1888 27.5517 23.5937 26.7002 23.7356 25.7632C24.7915 25.4164 25.5564 24.4244 25.5564 23.2571C25.5564 22.0953 24.7989 21.1073 23.7507 20.7561C23.3793 17.3859 20.5069 14.7549 17.0291 14.7549H15.6859L15.5234 12.3132H27.2618L26.2024 28.2422ZM29.0865 10.5553H13.6987V8.79478H29.0865V10.5553Z"
                                                fill="#624FD1"/>
                                        </svg>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                    <h2 class="mb-3 me-auto">Add Customer</h2>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('add_customer')}}">Add Customer</a></li>

                        </ol>
                    </div>
                </div>
                <div>

                    @include('message')
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">

                            <table
                                class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black"
                                id="example5">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="form-check ms-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                            <label class="form-check-label" for="checkAll">
                                            </label>
                                        </div>
                                    </th>
                                    <th>Customer ID</th>
                                    <th>Date Registered</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Action</th>


                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)

                                    <tr>
                                        <td class="tbl-bx">
                                            <div class="form-check ms-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="customCheckBox10">
                                                <label class="form-check-label" for="customCheckBox10">
                                                </label>
                                            </div>
                                        </td>
                                        <td>{{ $customer->id }}</td>
                                        <td class="wspace-no">{{ $customer->created_at }}</td>
                                        <td>{{ $customer->firstname }}</td>
                                        <td class="text-ov">{{ $customer->lastname }}</td>
                                        <td class="text-ov">{{ $customer->email }}</td>
                                        <td class="text-ov">{{ $customer->phonenumber }}</td>
                                        <td class="text-ov">{{ $customer->address }}</td>
                                        <td>
                                            <div class="dropdown ml-auto">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z"
                                                            stroke="#3E4954" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z"
                                                            stroke="#3E4954" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z"
                                                            stroke="#3E4954" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-black"><i
                                                            class="far fa-check-circle me-1 text-success"></i>
                                                        <form method="post" action="{{ route('delete_customer',$customer->id) }}">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="btn btn-warning waves-effect" value="submit"
                                                                    type="submit">
                                                                Delete Customer
                                                            </button>

                                                        </form>
                                                    </a>
                                                    <a class="dropdown-item text-black"
                                                       href="{{ route('update_customer', ['id'=> $customer->id]) }}"><i
                                                            class="far fa-times-circle me-1 text-success"></i>Update
                                                        Customer</a>
                                                    <a class="dropdown-item text-black"
                                                       href="{{ route('zed_customer', ['email' => $customer->email]) }}">
                                                        <i class="far fa-eye me-1 text-success"></i>View Customer
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->

@endsection

