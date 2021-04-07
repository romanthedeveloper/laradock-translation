@extends('layouts.index')

@section('content')
    <p>{{  __('admin.hello') . ' ' . $name }}!</p>
@endsection
