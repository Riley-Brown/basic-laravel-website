@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quo delectus adipisci eos ipsam odit autem,
    praesentium accusamus ipsa eligendi?</p>
@endsection

@section('sidebar')
@parent
<p>this is appeneded to the side bar</p>
@endsection
