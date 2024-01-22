<div>
    <form wire:submit.prevent="createPoll">
        <label for="title">Poll Title</label>
        <input type="text" wire:model.live="title" />
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="my-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div>
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <label>Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" class="input" wire:model.live="options.{{ $index }}" />
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                    @error("options.{$index}")
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn">Create Poll</button>
    </form>
</div>
