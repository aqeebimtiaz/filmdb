@extends('layouts.layout')
@section('home_content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">A Simple Film Database built using Laravel and Bootstrap with basic Laravel Auth.</p>
        <p class="lead text-muted"> Click on the top right corner of this webpage to Login or Register.</p>
        <p>
            <a href="/film/create" class="btn btn-primary my-2">Post a new film</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
    </div>
</section>
@endsection

@section('content')
<div class="container">
    <div class="row">

        @foreach ($films as $film)

            @include('films.film')

        @endforeach

    </div>
</div>
</div>
@endsection