<div>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="title">
        @error('title') <span class="error">GIB MORE CHARS</span> @enderror  
     
        <input type="text" wire:model="description">
        @error('description') <span class="error">TOO LONGGGG</span> @enderror
        
        <button type="submit">Save Project</button>
    </form>
</div>
