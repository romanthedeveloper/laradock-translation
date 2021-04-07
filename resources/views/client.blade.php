@extends('layouts.index')

@section('content')
    <p>{{ __('client.hello') . ' ' . $name }}</p>
@endsection
