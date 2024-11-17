@extends('layouts.landingpage')

@section('title', 'SIPENDARA - HOME')

@section('content')

    @include('components.landingPage.hero1')
    @include('components.landingPage.about')
    @include('components.landingPage.features')
    {{-- @include('components.landingPage.featuresApp') --}}
    @include('components.landingPage.footer')

@endsection
