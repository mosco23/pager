
@extends('voyager::master')
@section('head')
@livewireStyles
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/cv1/style.css')}}" type="text/css" >
<link rel="stylesheet" href="/css/profile_css/style.css">
<script src="{{ asset('js/alpine.js') }}" defer></script>
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

<style>
    .grille {
    max-width: 1400px;
    width: 90%;
    height: auto;
    margin: 15px auto;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    justify-content: center;
    grid-gap: 10px;
    }
    .w-100{
        width: 100%;
    }
    .rounded-circle {
    border-radius: 50% !important;
    }
    .img-fluid {
    max-width: 100%;
    height: auto;
    }
    img {
    vertical-align: middle;
    border-style: none;
    }
    img {
    vertical-align: middle;
    }
    img {
    border: 0;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    }
</style>

@stop
@section('content')
{{$slot}}
@endsection

@section('javascript')
@livewireScripts
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> --}}
@stops