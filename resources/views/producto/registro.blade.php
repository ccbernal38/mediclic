@extends('layouts.app')
@section('content')
    <header-home-component></header-home-component>
    <producto-registro-component :labs="'{{ $labs }}'"></producto-registro-component>
    <footer-color-component></footer-color-component>
@endsection
