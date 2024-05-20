
@extends('frontLayouts.main')
@section('title', 'Home - DentCare')

{{--@section('content)--}}
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


<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($banner as $key => $bannerItem)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img class="w-100" src="{{ asset('storage/' . $bannerItem->image) }}" alt="Banner Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            {{--                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $bannerItem->title }}</h5>--}}
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{$bannerItem->sub_title}}</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{$bannerItem->title}}</h1>
                            <a href="{{route('appointment')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="{{route('contact')}}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Banner Start -->
<div class="container-fluid banner mb-5">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Opening Hours</h3>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Mon - Fri</h6>
                        <p class="mb-0"> 8:00am - 9:00pm</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Saturday</h6>
                        <p class="mb-0"> 8:00am - 7:00pm</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Sunday</h6>
                        <p class="mb-0"> 8:00am - 5:00pm</p>
                    </div>
                    <a class="btn btn-light" href="">Appointment</a>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Search A Doctor</h3>
                    <div class="date mb-3" id="date" data-target-input="nearest">
                        <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                               placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                    </div>
                    <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                        <option selected>Select A Service</option>
                        <option value="1">Service 1</option>
                        <option value="2">Service 2</option>
                        <option value="3">Service 3</option>
                    </select>
                    <a class="btn btn-light" href="">Search Doctor</a>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Make Appointment</h3>
                    <p class="text-white">Ipsum erat ipsum dolor clita rebum no rebum dolores labore, ipsum magna at eos et eos amet.</p>
                    <h2 class="text-white mb-0">+012 345 6789</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Start -->


<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">

    @foreach($about as $abouts)


        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{$abouts->title}}</h5>
                        <h1 class="display-5 mb-0">{{$abouts->heading}}</h1>
                    </div>
                    {{--                <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4>--}}
                    <p class="mb-4">{!! $abouts->description !!}</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="{{route('appointment')}}" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('storage/'.$abouts->image)}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>
<!-- About End -->


<!-- Appointment Start -->
<div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can Trust</h1>
                    <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Make Appointment</h1>
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('appointment.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="dental">Dental Clean</option>
                                    <option value="dentist">Service 2</option>
                                    <option value="demo">Service 3</option>
                                </select>
                                @error('service')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <select name="doctor" class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select Doctor</option>
                                    <option value="chandan">Chandan 1</option>
                                    <option value="tabrej">Tabrej 2</option>
                                    <option value="kajal">Kajal 3</option>
                                </select>
                                @error('doctor')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="date" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Date" name="date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                                @error('date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="time" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Time" name="time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                                @error('time')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <input type="number" class="form-control bg-light border-0" placeholder="Your Number" name="number" style="height: 55px;">
                                @error('number')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


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


<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                <div class="offer-text text-center rounded p-5">
                    <h1 class="display-5 text-white">Save 30% On Your First Dental Checkup</h1>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod diam duo lorem magna sit dolore sed et.</p>
                    <a href="{{route('appointment')}}" class="btn btn-dark py-3 px-5 me-3">Appointment</a>
{{--                    <a href="" class="btn btn-light py-3 px-5">Read More</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Pricing Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Pricing Plan</h5>
                    <h1 class="display-5 mb-0">We Offer Fair Prices for Dental Treatment</h1>
                </div>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo eirmod magna dolore erat amet</p>
                <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Appointment</h5>
                <h1 class="wow fadeInUp" data-wow-delay="0.6s">+012 345 6789</h1>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">

                    @foreach($plans as $plan)
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="{{ asset('storage/' . $plan->image) }}" alt="{{ $plan->title }}">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">${{ $plan->price }}</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>{{ $plan->title }}</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                @if($plan->fe_1)<div class="d-flex justify-content-between mb-3"><span>{{ $plan->fe_1 }}</span><i class="fa fa-check text-primary pt-1"></i></div>@endif
                                @if($plan->fe_2)<div class="d-flex justify-content-between mb-3"><span>{{ $plan->fe_2 }}</span><i class="fa fa-check text-primary pt-1"></i></div>@endif
                                @if($plan->fe_3)<div class="d-flex justify-content-between mb-2"><span>{{ $plan->fe_3 }}</span><i class="fa fa-check text-primary pt-1"></i></div>@endif
                                <a href="{{ route('appointment') }}" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="{{asset('storage/'.$testimonial->image)}}" alt="">
                            <p class="fs-5">{{$testimonial->msg}}</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">{{$testimonial->name}}</h4>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title bg-light rounded h-100 p-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Dentist</h5>
                    <h1 class="display-6 mb-4">Meet Our Certified & Experienced Dentist</h1>
                    <a href="{{route('appointment')}}" class="btn btn-primary py-3 px-5">Appointment</a>
                </div>
            </div>
            @foreach($teams as $team)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="{{asset('storage/'.$team->image)}}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
{{--                                <a class="btn btn-primary btn-square m-1" href="{{$team->}}"><i class="fab fa-twitter fw-normal"></i></a>--}}
                                <a class="btn btn-primary btn-square m-1" href="{{$team->fab_url}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="{{$team->wat_url}}"><i class="fab fa-whatsapp fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="{{$team->in_url}}"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">{{$team->name}}</h4>
                            <p class="text-primary mb-0">{{$team->title}}</p>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>
</div>
<!-- Team End -->


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
