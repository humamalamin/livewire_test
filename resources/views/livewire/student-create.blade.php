<div class="mb-4">
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="addStudent">
        <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" name="name">

            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
