<div class="row">
    <div class="col-md-12 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1>{{ $youtuber->owner_name }}'s Details</h1>
            <div>
                <a wire:navigate href="/youtubers/" class="btn btn-warning">Dashboard</a>
            </div>
        </div>
    </div>

    <div class="offset-3 col-md-6">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">

                <ul class="list-group">
                    <li class="list-group-item"><span class="fw-bold text-md">Youtube Name</span> :
                        {{ $youtuber->youtube_name }}</li>
                    <li class="list-group-item"><span class="fw-bold text-md">Channel Name</span> :
                        {{ $youtuber->channel_link }}</li>
                    <li class="list-group-item"><span class="fw-bold text-md">Region</span> : {{ $youtuber->country }}
                    </li>
                    <li class="list-group-item"><span class="fw-bold text-md">Github Link</span> :
                        {{ $youtuber->github }}</li>

                </ul>
            </div>
        </div>
    </div>
</div>
