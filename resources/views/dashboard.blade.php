@extends('app')
@section('name')
Dashboard
@endsection
@section('content')

@foreach ($results as $result)
<a class="startnew" href="{{URL::to($result['link']) }}"><h2 class="startnew">{{ $result['message']}}</h2></a>
@endforeach
@endsection
