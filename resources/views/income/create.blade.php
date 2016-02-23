@extends('master')

@section('content')

<h1>Create New Income</h1>

{!! Form::open([
  'id' => 'income',
  'route' => ['income.store']
]) !!}

<div class="row">
	<div class="form-group">
          {!! Form::label('amount','Amount') !!}
          <div class="col-md-6 input-group addon">
              <span class="input-group-addon">€</span>
              {!! Form::input('number','amount',null,['class' => 'form-control', 'step' => '0.01', 'min' => '0', 'placeholder' => '0']) !!}
          </div>
      </div>

        <div class="col-md-2">
          {!! Form::submit('Speichern',['class' => 'form-control btn btn-primary col-md-2']) !!}
        </div>
      </div> 

{!! Form::close() !!}

@stop