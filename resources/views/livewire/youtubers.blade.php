<div class="row">
    <div class="col-md-12 mb-2">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Dashboard</h1>
        </div>
    </div>
    <div class="col-md-8 mx-auto mt-1 mb-3">

        <div class="input-group">
            <input class="form-control border-end-0 border-2 rounded-pill" wire:model.live.debounce.150ms="search"
                type="search" placeholder="Search Youtubers" id="example-search-input">
            {{-- <span class="input-group-append">
                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5"
                    type="button">
                    <i class="bi bi-search"></i>
                </button>
            </span> --}}
        </div>
    </div>
    <div class="col-md-12">
        <livewire:flash-message />
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
                                <a wire:navigate href="/youtubers/edit/{{ $youtuber->id }}"
                                    class="btn btn-primary">Edit</a>
                                <a type="button" wire:click="deleteYoutuber({{ $youtuber->id }})"
                                    class="btn btn-secondary">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
        <div>
            {{ $youtubers->links() }}
        </div>

    </div>
</div>
