<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <a href="/films/{{ $film->id }}">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <title>Placeholder</title>
            <rect fill="#55595c" width="100%" height="100%"/>
            <text fill="#eceeef" dy=".3em" x="50%" y="50%">{{ $film->film_name }}</text>
        </svg> </a>
        <div class="card-body">
            <p class="card-text"> {{ $film->film_description }}
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
</div>