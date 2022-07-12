@extends('layout')



@section('content')
<!-- Actual Content for Guitars -->
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    

    <!-- Forms -->
    <form class="form bg-white p-6 boder-1" method="POST" action="{{ route('guitars.update', ['guitar' => $guitar->id]) }}">
        <!-- To avoid attackers from destryoing our website or data using modified request. -->
        @csrf
        @method('PUT') 
        <div>
            <label class="text-sm" for="name">Guitar Name</label>
            <input class="text-lg border-1" type="text" id="name" value="{{ $guitar->name }}" name="name">
            @error('name')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label class="text-sm" for="brand">Brand Name</label>
            <input class="text-lg border-1" type="text" id="brand" value="{{ $guitar->brand }}" name="brand">
            @error('brand')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label class="text-sm" for="_made">Year Made</label>
            <input class="text-lg border-1" type="text" id="year_made" value="{{ $guitar->year_made }}" name="year_made">
            @error('year_made')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <button class="border-1"  type="submit">Submit</button>
        </div>
    </form>
       
</div>
@endsection