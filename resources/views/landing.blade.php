@extends('layouts.homepage')

@section('content')
    @include('layouts.partials.carousel')

    @include('layouts.partials.services-section')

    @include('layouts.partials.mission-vision')

    @include('layouts.partials.gallery')
    {{--    @include('layouts.partials.about-section')--}}
    @include('layouts.partials.booking_process')
    {{--    @include('layouts.partials.team-section')--}}
    {{--    @include('layouts.partials.testimonials-section')--}}
    @include('layouts.partials.contact-section')
@endsection
