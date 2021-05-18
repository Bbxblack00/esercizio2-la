@extends('layouts.main-layouts')
@section('name')

    <h1>il mio nome è {{ $name }}</h1>

{{-- @foreach ($collection as $item)
<li>
    <a href="{{ route('elem', $loop->index) }}">
        {{ $d['title'] }}
    </a>
</li>
@endforeach --}}

@endsection