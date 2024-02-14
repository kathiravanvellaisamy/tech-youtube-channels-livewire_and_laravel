<div class="row">
    <div class="col-md-12 mb-4">

        <h1 class="fs-2 fw-semibold text-center">Sign Up</h1>

    </div>
    <div class="offset-2 col-8">

        <form class="mt-8" wire:submit="storeUser">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" wire:model="name" class="form-control" id="name" aria-describedby="emailHelp">
                @error('name')
                    <span class="mt-1 mb-1 text-primary text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" wire:model="email" class="form-control" id="email"
                    aria-describedby="emailHelp">
                @error('email')
                    <span class="mt-1 mb-1 text-primary text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" wire:model="password" class="form-control" id="password">
                @error('password')
                    <span class="mt-1 mb-1 text-primary text-xs">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="my-2">
            <span>Already have an account? <a wire:navigate href="/login">Login</a></span>
        </div>
    </div>
</div>
