@extends('layouts.app')

@section('content')
<h1>Home</h1>

@if(Session::has("success"))
    <div class="alert alert-danger">
        {{session('success')}}
    </div>
@endif
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque beatae distinctio est eveniet incidunt itaque magnam nulla odit, omnis possimus provident quam sapiente suscipit ut vel voluptatem voluptatibus voluptatum!</p>


    @stop

@section('sidebar')
    @parent {{--will displlay what is at section sidebar in layout/app.connected to @show--}}
    <p>This is appendend to the sidebar</p>
    @stop