@extends('layouts.app')

@section('content')
    @if($hba1c >= 6.5)
        @include('results.high_hba1c')
    @else
        @include('results.low_hba1c')
    @endif    
@endsection