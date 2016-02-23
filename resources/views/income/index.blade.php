@extends('master')

@section('content')

	@foreach($incomes as $income)
		{{ $income->amount }}
	@endforeach
@stop