<!-- Let's use a directive -->
@extends('layout')


@section('title', 'About Us')


@section('content')
<!-- Actual Content -->
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0"> 
        <h1>About Us</h1>
    </div>

    <div class="mt-8 dark:bg-white-800 overflow-hidden ">
        <p>This is the about page.</p>
    </div>
</div>
@endsection

        