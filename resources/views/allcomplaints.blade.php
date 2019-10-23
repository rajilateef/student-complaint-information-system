@extends('layouts.app')

@section('content')
@include('inc.sidebar')

<div class="col-lg-10">
    <div class="text-center my-4">
        <h1>My complaints</h1>
    </div>

    <div class="col-lg-12">
        <ul class="list-group">
            @foreach ($complaints as $complaint)
            <li class="list-group-item {{$complaint->reviewed ? 'bg-success text-white' : ''}}"><a
                    href="/complaints/{{$complaint->id}}"
                    class="{{$complaint->reviewed ? 'text-decoration-none text-white h5' : ''}}">{{$complaint->title}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection