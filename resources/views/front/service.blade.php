@extends('frontLayouts.main')
@section('content')


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{asset('asset/img/before.jpg')}}" style="object-fit: cover;">
                        <img class="position-absolute w-100 h-100" src="{{asset('asset/img/after.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    @php
                        $firstService = $services->first();
                    @endphp
                    @if($firstService)
                        <div class="section-title mb-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">{{$firstService->title}}</h5>
                            <h1 class="display-5 mb-0">{{$firstService->heading}}</h1>
                        </div>
                    @else
                        <p class="text-center">No service appointment details available.</p>
                    @endif

                    <div class="row g-5">

                        @foreach ($services->take(2) as $service)
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('storage/'.$service->image) }}" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">{{ $service->service_title }}</h5>
                                    {{--                                @if ($service->heading)--}}
                                    {{--                                    <p>{{ $service->heading }}</p>--}}
                                    {{--                                @endif--}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        @foreach ($services as $index => $service)
                            @if ($index >= 2)
                                <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                                    <div class="rounded-top overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('storage/'.$service->image) }}" alt="">
                                    </div>
                                    <div class="position-relative bg-light rounded-bottom text-center p-4">
                                        <h5 class="m-0">{{ $service->service_title }}</h5>
                                        {{--                                    @if ($service->heading)--}}
                                        {{--                                        <p>{{ $service->heading }}</p>--}}
                                        {{--                                    @endif--}}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    @php
                        $firstService = $services->first();
                    @endphp
                    @if($firstService)
                        <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <h3 class="text-white mb-3">{{ $firstService->service_appointment_title }}</h3>
                            <p class="text-white mb-3">{{ $firstService->service_appointment_text }}</p>
                            <h2 class="text-white mb-0">{{ $firstService->service_appointment_number }}</h2>
                        </div>
                    @else
                        <p class="text-center">No service appointment details available.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


@endsection
