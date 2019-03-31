@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @if(count($photographers) >= 1)
                @foreach($photographers as $photographer)
                <div class="card">
                <div class="card-body">
                {{$photographer->name}}
                </a>
                </div>
                 </div>
                @endforeach
                @else
                <p>No photographers found</p>
                @endif
                </div>
    </div>
</div>
@endsection
