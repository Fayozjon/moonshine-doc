@extends('layouts.app')

@section('title', $title)

@if(isset($sectionMenu))
@section('right-sidebar')
    <x-menu :data="$sectionMenu"></x-menu>
@endsection
@endif

@section('content')
    <x-title>{{ $title }}</x-title>

    <div class="prose text-white">
        {{ $slot }}
    </div>
@endsection
