<div class="flex flex-col gap-2">
    <form class="flex flex-col gap-2" wire:submit.prevent="upload">
        <div>
            <input class="file-input" type="file" wire:model="image" />
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn m-1">Select Filter</div>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Bleistifft</a></li>
                    <li><a>Manga</a></li>
                </ul>
            </div>
        </div>
        <button class="btn" type="submit">Manipulate Image</button>
    </form>
    @if ($image)
        <img src="{{ $image->temporaryUrl() }}" />
    @endif
</div>
