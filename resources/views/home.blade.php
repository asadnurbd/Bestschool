@extends('layouts.app')

@section('content')

<div >
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

@include('user.profile')
@endsection
