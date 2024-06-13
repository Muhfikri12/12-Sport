@extends('landing-pages.layout.app')

@section('services')
    @include('landing-pages.components.main.service')
@endsection

@section('aboutUs')
    @include('landing-pages.components.main.about-us')
@endsection

@section('contacts')
    @include('landing-pages.components.main.contact')
@endsection

@section('testimonials')
    @include('landing-pages.components.main.testimonial')
@endsection

@section('header')
    @include('landing-pages.components.header.header')
@endsection

@section('heroSection')
    @include('landing-pages.components.main.hero-section')
@endsection

@section('statistic')
    @include('landing-pages.components.main.statistic')
@endsection

@section('feature')
    @include('landing-pages.components.main.feature')
@endsection

@section('footer')
    @include('landing-pages.components.footer.footer')
@endsection
