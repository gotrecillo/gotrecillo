<a href="{{route('portfolio.show', ['portfolio' => $project->slug])}}" class="portfolio">
    <div class="card column is-full-mobile is-half-tablet is-one-quarter-desktop">
        <div class="card-image portfolio-image"
             style="background-image: url('/{{$project->image}}'); height: 200px">
        </div>
        <div class="card-content">
            <div class="media">
                <div class="media-content">
                    <p class="title is-4">{{$project->name}}</p>
                    <p class="subtitle is-6">{{$project->title}}</p>
                </div>
            </div>
        </div>
    </div>
</a>