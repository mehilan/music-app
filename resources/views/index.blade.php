@extends('layouts.main')

@section('content')
{{-- Popular movie section start --}}
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">New Releases</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                @foreach ($newRelease as $new)
                    <div class="mt-8">
                        <a href="{{ route('show', $new['id']) }}">
                            <img src="{{ $new['images'][0]['url'] }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">{{ $new['name'] }}</a>
                            <div class="flex items-center text-sm  mt-1 text-gray-400">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg>
                                <span class="ml-1">Artist</span>
                                <span class="mx-2">|</span>
                                <span>{{ \Carbon\Carbon::parse($new['release_date'])->format('M D, Y') }}</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                {{ $new['type'] }}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="mt-8">
                    <a href="">
                        <img src="/img/wolverine.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">wolverine</a>
                        <div class="flex items-center text-sm  mt-1 text-gray-400">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2024</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thiller, Comedy
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- Popular movie section end --}}

    {{-- Now playing section start --}}
    <div class="container mx-auto px-4 py-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="/img/wolverine.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">wolverine</a>
                        <div class="flex items-center text-sm  mt-1 text-gray-400">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2024</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thiller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/wolverine.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">wolverine</a>
                        <div class="flex items-center text-sm  mt-1 text-gray-400">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2024</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thiller, Comedy
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Now playing section end --}}
@endsection

