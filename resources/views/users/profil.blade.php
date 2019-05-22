@extends('layouts.default')

@section('contenu')
<br><br>
<center><h3> Bienvenue, {{ Auth::user()->username }}</h3></center>
<p class="posted">Inscrit depuis le {{ Auth::user()->created_at }}	<span>Role de : {{ Auth::user()->role }}</span>
					</p>

<br>
<br>
<hr>


{!! $chart->html() !!}

{!! Charts::scripts() !!}
{!! $chart->script() !!}
@stop