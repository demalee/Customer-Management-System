@extends('layouts.admin-app')
@section('content')

    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('welcome')}}">Go home</a></li>
            </ol>
        </div>
        @include('message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        <img class="img-fluid" src="https://zed.business/assets/img/logo-01.svg" alt="" style="width: 100px; height: 100px">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="second">
                                        <img class="img-fluid" src="https://zed.business/assets/img/logo-01.svg" alt="" style="width: 100px; height: 100px">
                                    </div>

                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">
                                        <li role="presentation" class="show">
                                            <a href="#first" role="tab" data-bs-toggle="tab">
                                                <img class="img-fluid" src="https://zed.business/assets/img/logo-01.svg" alt="" width="10">
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="https://kurasa.org/images/undraw_researching_23gp.svg" alt="" width="50"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                    <div class="new-arrival-content pr">
                                        <h4>{{$customer->firstname}} {{$customer->lastname }} </h4>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                        </div>

                                        <p class="text-content"> <i
                                                class="fa fa-map me-2"></i><h4>Address: {{$customer->address}}. </h4></p>
                                        <p class="text-content"> <i
                                                class="fa fa-map me-2"></i><h4>Email: {{$customer->email}}. </h4></p>
                                        <p class="text-content"> <i
                                                class="fa fa-map me-2"></i><h4>Date Registered: {{$customer->created_at}}. </h4></p>
                                        <p class="text-content"> <i
                                                class="fa fa-map me-2"></i><h4>Address: {{$customer->address}}. </h4></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
@endsection
