@extends('layouts.app')
@section('content')
@foreach($animal as $animals)
    <h1>{{$animals->Name}}</h1>
    <h1>{{$animals->Info}}</h1>
    <h1>{{$animals->Img}}</h1>
@endforeach
@endsection

