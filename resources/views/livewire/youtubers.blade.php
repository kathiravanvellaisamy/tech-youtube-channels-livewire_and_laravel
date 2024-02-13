<div class="row">
    <div class="col-md-12 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Dashboard</h1>
            <div>
                <a wire:navigate href="/youtubers/store" class="btn btn-primary">Add new</a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Channel Name</th>
                        <th scope="col">Owner Name</th>
                        <th scope="col">Country</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($youtubers as $youtuber)
                        <tr>
                            <th scope="row">{{ $youtuber->id }}</th>
                            <td>
                                <a wire:navigate class="text-decoration-none text-info font-weight-bold"
                                    href="/youtubers/{{ $youtuber->id }}">
                                    {{ $youtuber->youtube_name }}</a>
                            </td>
                            <td>{{ $youtuber->owner_name }}</td>
                            <td>{{ $youtuber->country }}</td>
                            <td class="d-flex gap-3">
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-secondary">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>