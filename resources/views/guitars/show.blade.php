@extends('layout')



@section('content')
<!-- Actual Content for Guitars -->
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    

<!-- Print an individual resource or data from a data set. -->
<div>
    <h3>
        {{$guitar['name']}}
        <ul>
            <li>
                Made by: {{$guitar['brand']}} 
            </li>
        </ul>
    </h3>
</div>
       



</div>
@endsection