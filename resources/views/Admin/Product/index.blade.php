<x-app-layout>
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="{{ route('home') }}" class="mr-2 text-sm font-medium text-gray-900">Product</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                                class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page"
                            class="font-medium text-gray-500 hover:text-gray-600">{{ $product->name }}</a>
                    </li>
                </ol>
            </nav>



            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-4 md:col-span-2">
                    {{-- imagenes producto --}}

                    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">

                        <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                            <img src="{{ $product->images->first()->url }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                            <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                                <img src="{{ $product->images->first()->url }}" alt="{{ $product->name }}"
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                                <img src="{{ $product->images->first()->url }}" alt="{{ $product->name }}"
                                    class="h-full w-full object-cover object-center">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-span-4 md:col-span-2">
                    {{-- detalle producto --}}
                    <div
                        class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}
                            </h1>
                        </div>
                        <div class="mt-4 lg:row-span-3 lg:mt-0">
                            <h2 class="sr-only">Information del producto</h2>
                            <p class="text-3xl tracking-tight text-gray-900">${{ $product->price }}</p>
                            @livewire('admin.cart.add-cart-item-component',['product'=>$product])
                        </div>
                        <div
                            class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                            <!-- Description and details -->
                            <div>
                                <h3 class="sr-only">Descripcion</h3>

                                <div class="space-y-6">
                                    <p class="text-base text-gray-900">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Dicta laudantium at aliquid, quam consequuntur nostrum
                                        necessitatibus. Molestiae assumenda delectus repellat natus provident dolorem
                                        expedita facere velit tenetur! Deserunt, hic tempore?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
