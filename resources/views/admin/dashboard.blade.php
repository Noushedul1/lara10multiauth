@extends('layouts.app')
@section('title','admin Dashboard')
@section('userMain')
<h2>admin dashboard welcome</h2>
<p>{{ Auth::guard('admin')->user()->name }}</p>
<p>{{ Auth::guard('admin')->user()->email }}</p>
@endsection
