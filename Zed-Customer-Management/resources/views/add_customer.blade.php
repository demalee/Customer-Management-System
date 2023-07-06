@extends('layouts.admin-app')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h2 class="mb-3 me-auto">Add Customer to Zed </h2>
            <div>

            </div>
        </div>
        @include('message')
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Enter Details</h4>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">
                            <form method="post" action="{{route('add_zed_customer')}}">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <input type="text" class="form-control input-default " name="firstname"
                                           placeholder="First name">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="lastname" class="form-control input-rounded"
                                           placeholder="last name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control input-rounded"
                                           placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="phonenumber" class="form-control input-rounded"
                                           placeholder="254706244585">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="address" class="form-control input-rounded"
                                           placeholder="Customer Address">
                                </div>
                                <button type="submit" class="btn btn-primary">Save Customer</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
