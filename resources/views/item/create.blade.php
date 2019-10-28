@extends('layouts.layout')


@section('content')

{{Form::open(['route' => ['items.store']])}}

   {{ Form::text('id','id') }}
   {{ Form::text('name','name') }}
   {{ Form::text('price','price') }}
   {{ Form::text('quantity','quantity') }}

   {{ Form::submit('Click Me!') }}

{{Form::close()}}

@endsection