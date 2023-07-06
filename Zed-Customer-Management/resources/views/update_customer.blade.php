@extends('layouts.admin-app')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h2 class="mb-3 me-auto">Update Customer</h2>
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
                            <form method="post" action="{{route('customer/update',['id'=> $customer->id])}}">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <input type="text" class="form-control input-default " name="firstname"
                                           value="{{$customer->firstname}}">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="lastname" class="form-control input-rounded"
                                           value="{{$customer->lastname}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update {{$customer->firstname}} </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
