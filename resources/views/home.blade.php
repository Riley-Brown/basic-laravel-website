@extends('layouts.app')

@section('content')
<h1>Home</h1>
@endsection

@section('sidebar')
@parent
  <p>this is appeneded to the side bar</p>
@endsection