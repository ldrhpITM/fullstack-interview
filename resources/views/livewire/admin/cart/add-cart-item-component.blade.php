<div x-data>
    <p class="text-gray-700 mb-4">
        <span class="font-semibold text-lg">Stock disponible: </span>{{ $quantity }}
    </p>
    <div class="flex">
        <div class="mr-4">
            <x-secondary-button
             disabled
             x-bind:disabled="$wire.qty<=1"
             wire:loading.attr="disabled"
             wire:target="decrement"
             wire:click="decrement"
            >
                -
            </x-secondary-button>

            <span class="mx-2 text-gray-700">{{ $qty }}</span>

            <x-secondary-button
                x-bind:disabled="$wire.qty >= $wire.quantity"
                wire:loading.attr="disabled"
                wire:target="increment"
                wire:click="increment">
                +
            </x-secondary-button>
        </div>


    </div>
    <div class="">
        <x-button class="w-full mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" color="lightBlue"
            x-bind:disabled="$wire.qty > $wire.quantity"
            wire:click="addItem"
            wire:loading.attr="disabled"
            wire:target="addItem">
            Agregar al carrito
        </x-button>
    </div>
</div>
