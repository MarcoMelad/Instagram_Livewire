<div class="max-w-lg mx-auto">
    {{-- In work, do what you enjoy. --}}


    {{-- header --}}

    <header class="flex items-center gap-3">


        <x-avatar src="https://source.unsplash.com/500x500?face" class="h-9 w-9"/>

        <div class="grid grid-cols-7 w-full gap-2">

            <div class="col-span-5">
                <h5 class="font-semibold truncate text-sm"> {{fake()->name}} </h5>
            </div>

            <div class="col-span-2 flex text-right justify-end">

                <button class="text-gray-500 ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path
                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                </button>
            </div>


        </div>


    </header>

    {{--Main --}}

    <main>
        <div class="my-2">
            <!-- Slider main container -->
            <div x-init="

                new Swiper($el,{

                    modules: [Navigation, Pagination],
                    loop:true,

                    pagination: {
                    el: '.swiper-pagination',
                    },

                    navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    },
                });"
                 class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <x-video/>
                    </div>
                    <div class="swiper-slide">
                        <x-video/>
                    </div>
                    <div class="swiper-slide">
                        <x-video/>
                    </div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev absolute top-1/2 z-10 p-2">
                    <div class=" bg-white/95 border p-1 rounded-full text-gray-900">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.8"
                             stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                        </svg>


                    </div>

                </div>

                {{-- next --}}
                <div class="swiper-button-next absolute right-0 top-1/2 z-10 p-2">
                    <div class=" bg-white/95 border p-1 rounded-full text-gray-900">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.8"
                             stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                        </svg>


                    </div>
                </div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </main>

    <footer>

        {{-- actions --}}
        <div class="flex gap-4 items-center my-2">

            {{-- heart --}}
            <button wire:click='togglePostLike()'>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-6 h-6 text-rose-500">
                    <path
                        d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/>
                </svg>
            </button>

            <button wire:click='togglePostLike()'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                </svg>

            </button>
        </div>
    </footer>
</div>
