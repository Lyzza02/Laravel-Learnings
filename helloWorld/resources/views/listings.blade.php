@extends('layout')

{{-- dpt kamatch niya yun sa layout.balde.php --}}
@section('content')

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    {{--empty listing yun unless parang if statement din cya --}}
    @unless(count($listings) == 0)
        @foreach ($listings as $listing)
        <x-listing-card :listing="$listing"/>
        @endforeach
    @else
        <p>No listings found</p>
    @endunless
</div>
@endsection