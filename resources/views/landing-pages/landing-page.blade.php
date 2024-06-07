@extends('landing-pages.layout.app')

@section('services')
    @include('landing-pages.components.service')
@endsection

@section('aboutUs')
    @include('landing-pages.components.about-us')
@endsection

@section('contacts')
    @include('landing-pages.components.contact')
@endsection

@section('testimonials')
    @include('landing-pages.components.testimonial')
@endsection
