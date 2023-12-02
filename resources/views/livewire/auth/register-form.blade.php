<div>
    <form wire:submit="createAccount">
        <div class="mb-4">
            <div class="form-floating mb-4">
                <input wire:model.live="username" class="form-control @error('username') border-danger border-3 @enderror" type="text" placeholder="Username">
                <label for="fl-text">Username</label>
                @error('username') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-floating mb-4">
                <input wire:model.live="password" class="form-control @error('password') border-danger border-3 @enderror" type="password" placeholder="Password">
                <label for="fl-text">Password</label>
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary bg-gradient btn-lg w-100" wire:target="createAccount" wire:loading.remove style="height: 57.09px;">Sign up</button>
        <button type="submit" class="btn btn-secondary btn-lg w-100" disabled wire:target="createAccount" wire:loading style="height: 57.09px;">
            <div class="col" style="display: flex; justify-content: center; align-items: center;">
                <div class="sk-wave">
                    <div class="sk-wave-rect"></div>
                    <div class="sk-wave-rect"></div>
                    <div class="sk-wave-rect"></div>
                    <div class="sk-wave-rect"></div>
                    <div class="sk-wave-rect"></div>
                </div>
            </div>
        </button>
    </form>
</div>
