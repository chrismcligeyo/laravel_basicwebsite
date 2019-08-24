@extends('layouts.app')

@section('content')
    <h1>Contact</h1>

    {!! Form::open([ 'url'=>'contact/submit']) !!} <!--files true enables you to add file, upload. equivalent of enctype=multiform/data-->

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}{{--null or empty string '' stands for value--}}
    </div>
        <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter Mail']) !!}
        </div>
            <div class="form-group">

                    {!! Form::label('message', 'Message') !!}
                    {!! Form::textarea('message', null, ['class'=>'form-control']) !!}


                </div>




    <div class="form-group">

        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}


    @include('includes.errorMsg')

@stop