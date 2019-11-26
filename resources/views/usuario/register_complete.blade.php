@extends('layouts.app')

@section('content')
    <header-home-component></header-home-component>
    <paciente-registro-component :user="{{ auth()->user()->persona }}"></paciente-registro-component>
    <footer-color-component></footer-color-component>
@endsection
