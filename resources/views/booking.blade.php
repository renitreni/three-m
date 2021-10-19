@extends('layouts.homepage')

@section('header')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection

@section('content')
    <div class="site-section" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                    <div class="block-heading-1">
                        <span>Get your reservation now!</span>
                        <h2>Booking Section</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <form action="{{ route('reserve') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 mb-lg-0">
                                <label>Choose date of Appointment</label>
                                <input type="text" name="appoint_date" class="form-control">

                                @error('appoint_date')
                                <p class="fst-normal bg-danger text-white ps-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-lg-0">
                                <label>Car Model</label>
                                <input type="text" name="car_model" class="form-control"
                                       placeholder="Type in Car Model">

                                @error('car_model')
                                    <p class="fst-normal bg-danger text-white ps-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mb-lg-0">
                                <label>Choose a Branch</label>
                                <select type="text" class="form-control" name="branch">
                                    <option value="riyadh" selected>Riyadh</option>
                                    <option value="jeddah">Jeddah</option>
                                </select>
                                @error('branch')
                                <p class="fst-normal bg-danger text-white ps-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Choose a Service</label>
                                <select type="text" class="form-control" name="service">
                                    @foreach(\App\Models\Service::all() as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('service')
                                <p class="fst-normal bg-danger text-white ps-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label>Email Address</label>
                            <div class="col-md-12">
                                <input type="email" name="email" class="form-control"
                                       placeholder="Type in Email address">

                                @error('email')
                                <p class="fst-normal bg-danger text-white ps-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label>Contact No</label>
                            <div class="col-md-12">
                                <input type="text" name="contact_no" class="form-control"
                                       placeholder="Type in Contact Number">
                                @error('contact_no')
                                <p class="fst-normal bg-danger text-white ps-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Remarks</label>
                                <textarea name="remarks" class="form-control" placeholder="Write your message."
                                          cols="30"
                                          rows="10"></textarea>
                                @error('remarks')
                                <p class="fst-normal bg-danger text-white ps-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 ml-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                       value="Reserve Now">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex flex-column">
                        <div class="block-heading-1">
                            <h3>Price List</h3>
                        </div>
                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto p-2 bd-highlight">Service</div>
                            <div class="p-2 bd-highlight">Price</div>
                        </div>
                        @foreach(\App\Models\Service::all() as $item)
                            <div class="d-flex bd-highlight mb-3 border-bottom">
                                @if(!$item['is_promo'])
                                    <div class="me-auto p-2 bd-highlight fs-5">
                                        {{ $item['name'] }}
                                    </div>
                                    <div class="p-2 bd-highlight fs-5 fw-bold">{{ $item['price'] }}</div>
                                @else
                                    <div class="me-auto p-2 bd-highlight fs-5">{{ $item['name'] }}
                                        <span class="badge rounded-pill bg-success ms-2">Promo</span>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <span class="fs-5 fw-bold">{{ $item['promo_price'] }}</span>
                                        <span class="text-decoration-line-through fs-5 fw-bold text-danger">
                                            {{ $item['price'] }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    @include('sweetalert::alert')
    <script>
        $('input[name="appoint_date"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: parseInt(moment().format('YYYY'), 10),
            maxYear: parseInt(moment().add(1, 'Y').format('YYYY'))
        }, function (start, end, label) {
        });
    </script>
@endsection
