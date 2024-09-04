@extends('layout')

@section('title', 'About')

@section('content')
    <h1>About Us</h1>
    <p>This is the about page content.</p>
    @section('section_name')
        <p>Additional section from About page.</p>
    @endsection
    @yield('section_name')
@endsection
