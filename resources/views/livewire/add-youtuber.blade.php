<div class="row">
    <div class="col-md-12 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Add New Youtuber's Details</h1>
            <div>
                <a wire:navigate href="/youtubers/" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>

    <div class="offset-2 col-8">
        <div class="card">
            <div class="card-body">
                <form wire:submit="save">
                    <div class="mb-3">
                        <label for="youtube_name" class="form-label">Youtube Name</label>
                        <input type="text" class="form-control" wire:model="youtube_name" id="youtube_name">
                        @error('youtube_name')
                            <span class="mt-1 mb-1 text-primary text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="channel_link" class="form-label">Channel Link</label>
                        <input type="url" class="form-control" value="https://www.youtube.com/@"
                            wire:model="channel_link" id="channel_link">
                        @error('channel_link')
                            <span class="mt-1 mb-1 text-primary text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="owner_name" class="form-label">Owner Name</label>
                        <input type="text" class="form-control" wire:model="owner_name" id="owner_name">
                        @error('owner_name')
                            <span class="mt-1 mb-1 text-primary text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Region</label>
                        <input type="text" class="form-control" wire:model="country" id="country">
                        @error('country')
                            <span class="mt-1 mb-1 text-primary text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="github" class="form-label">Github Link</label>
                        <input type="url" value="https://github.com/" class="form-control" wire:model="github"
                            id="github">
                        @error('github')
                            <span class="mt-1 mb-1 text-primary text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                            <label for="logo" class="form-label">Channel Logo</label>
                            <input type="file" class="form-control" wire:model="logo" id="logo">
                        </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
