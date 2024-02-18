<div class="w-full">
    {{-- Header --}}
    <header>

    </header>

    {{-- Main --}}
    <main class="grid lg:grid-cols-12 gap-8 md:mt-10 h-[1000px]">
        <aside class="lg:col-span-8 border overflow-hidden">

            {{-- Stories --}}
            <section>
                <ul class="flex overflow-x-auto scrollbar-hide items-center gap-2">

                    @for ($i = 0; $i < 10; $i++)
                        <li class="flex flex-col justify-center w-20 gap-1 p-2">
                            <x-avatar wire:ignore story src="https://source.unsplash.com/500x500?face-{{$i}}"
                                      class="h-14 w-14"/>
                            <p class="text-xs font-medium truncate" wire:ignore> {{fake()->name}} </p>
                        </li>
                    @endfor
                </ul>

            </section>
            {{-- posts --}}
            <section class="mt-5 space-y-4 p-2">


                @if ($posts)

                    @foreach ($posts as $post)

                        <livewire:post.item wire:key="post-{{$post->id}}" :post="$post" />

                    @endforeach

                @else

                    <p class="font-bol flex justify-center">No posts</p>

                @endif

            </section>
        </aside>

        <aside class="lg:col-span-4 border hidden lg:block p-4">

        </aside>
    </main>
</div>
