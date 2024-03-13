<div>
    {{-- The whole world belongs to you. --}}
    <div class="py-10 mt-16">

        <div class="">
            <form wire:submit.prevent="subscribe">
                <div class="flex flex-col max-w-5">
                    <label for="email">Email address</label>
                    <input type="email" wire:model="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    <label for="first_name">First Name</label>
                    <input type="text" wire:model="first_name" class="form-control" id="first_name" aria-describedby="first_name" placeholder="Enter first name">
                    @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                    <label for="last_name">Last Name</label>
                    <input type="text" wire:model="last_name" class="form-control" id="last_name" aria-describedby="last_name" placeholder="Enter last name">
                    @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                    <button>Subscribe</button>
                </div>
            </form>
        </div>

    </div>
</div>
