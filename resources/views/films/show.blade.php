@extends('layouts.layout')
@section('content')
<div class="card mb-4 shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <title>Placeholder</title>
            <rect fill="#55595c" width="100%" height="100%"/>
            <text fill="#eceeef" dy=".3em" x="50%" y="50%">{{ $film->film_name }}</text>
        </svg>
    <div class="card-body">
        <p class="card-text"><p>Created by {{$film->user->name}}</p> {{ $film->film_description }}
            <p>Release Date: {{ $film->release_date }}</p>
            Rating: {{ $film->rating }}
            <span class="float-right"> Ticket: ${{ $film->ticket_price }}</span>
            <p>Country: {{ $film->country }}</p>
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
            <small class="text-muted">9 mins</small>
        </div>
    </div>
</div>
<hr>
<div class="comments">
    <ul class="list-group">
        @foreach ($film->comments as $comment)
        <li class="list-group-item">
            <strong> {{$comment->created_at->diffForHumans()}}: &nbsp; </strong>
            <article>
                {{ $comment->body }}
            </article>
        </li>
        @endforeach
    </ul>
</div>
<hr>
<div class="card">
    <div class="card-block">
        <form action="/films/{{$film->id}}/comments" method="post">
            @csrf
            <div class="form-group">
                <textarea name="body" placeholder="Post a comment" id="body" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary" type="submit">Add a Comment</button>
             </div>
        </form>
        @include('layouts.errors')
    </div>
</div>
@endsection