@props(['imagen'=>'',
        'productName'=>'',
        'precio'=>0,
        'vista'=>'',
        ])
<div class="group relative">
    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
      <img src="{{ $imagen }}">
    </div>
    <div class="mt-4 flex justify-between">
      <div>
        <h3 class="text-sm text-gray-700">
          <a href="{{ $vista }}">
            <span aria-hidden="true" class="absolute inset-0"></span>
            {{ $productName }}
          </a>
        </h3>
      </div>
      <p class="text-sm font-medium text-gray-900">${{ $precio }}</p>
    </div>
</div>
