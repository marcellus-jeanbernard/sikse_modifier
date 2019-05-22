@extends('layouts.default')

@section('contenu')
<center><h3> Bienvenue, {{ Auth::user()->username }}</h3></center>
 

@stop