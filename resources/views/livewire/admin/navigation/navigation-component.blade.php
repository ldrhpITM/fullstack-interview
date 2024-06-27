
<header class="bg-gray-900 sticky  top-0" x-data="" style="z-index: 900">
    <div class="container flex items-center h-16 justify-between md:justify-start">

       <a href="/" class="mx-6">
          <x-application-mark class="block h-9 w-auto"/>
       </a>

       <div class="flex-1 hidden md:block">
        <h1 class="text-white">Fullstack interview main</h1>
        </div>
       <div class="mx-6 relative hidden md:block">
          @auth
             <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                         <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                         </button>

                </x-slot>

                <x-slot name="content">
                   <!-- Account Management -->
                   <div class="block px-4 py-2 text-xs text-gray-400">
                         {{ __('Manage Account') }}
                   </div>

                   <x-dropdown-link href="{{ route('profile.show') }}">
                         {{ __('Profile') }}
                   </x-dropdown-link>
                   <x-dropdown-link href="{{ route('orders.index') }}">
                      {{ __('My orders') }}
                   </x-dropdown-link>
                   @role('admin')
                   <x-dropdown-link href="{{ route('admin.index') }}">
                      {{ __('Administrator') }}
                   </x-dropdown-link>
                   @endrole
                   <div class="border-t border-gray-100"></div>

                   <!-- Authentication -->
                   <form method="POST" action="{{ route('logout') }}">
                         @csrf

                         <x-dropdown-link href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                         </x-dropdown-link>
                   </form>
                </x-slot>
             </x-dropdown>
          @else
             <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                   <i class="fas fa-user-circle text-white text-3xl cursor-pointer"></i>
                </x-slot>
                <x-slot name="content">
                   <x-dropdown-link href="{{ route('login') }}">
                      {{ __('Login') }}
                   </x-dropdown-link>
                   <x-dropdown-link href="{{ route('register') }}">
                      {{ __('Register') }}
                   </x-dropdown-link>
                </x-slot>
             </x-dropdown>
          @endauth
      </div>
      <div class="hidden md:block">
         @livewire('admin.cart.cart-component')
      </div>

    </div>

 </header>
