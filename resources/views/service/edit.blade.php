@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>Create Service</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $service->title }}">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" name="heading" class="form-control" id="heading" value="{{ $service->heading }}">
                @error('heading')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control-file" id="image">
                @if($service->image)
                    <img src="{{asset('storage/'.$service->image)}}" alt="" width="200px">
                @else
                    no image
                @endif
                @error('image')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="service_title">Service Title</label>
                <input type="text" name="service_title" class="form-control" id="service_title" value="{{ $service->service_title }}">
                @error('service_title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="service_appointment_title">Service Appointment Title</label>
                <input type="text" name="service_appointment_title" class="form-control" id="service_appointment_title" value="{{ $service->service_appointment_title }}">
                @error('service_appointment_title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="service_appointment_text">Service Appointment Text</label>
                <input type="text" name="service_appointment_text" class="form-control" id="service_appointment_text" value="{{ $service->service_appointment_text }}">
                @error('service_appointment_text')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="service_appointment_number">Service Appointment Number</label>
                <input type="text" name="service_appointment_number" class="form-control" id="service_appointment_number" value="{{$service->service_appointment_number}}">
                @error('service_appointment_number')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Service</button>
        </form>
    </div>


@endsection
