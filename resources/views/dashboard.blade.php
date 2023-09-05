@extends('layouts.app')
@section('title','user Dashboard')
@section('userMain')
<h2>dashboard welcome</h2>
<p>{{ Auth::user()->name }}</p>
<p>{{ Auth::user()->email }}</p>
@endsection
