<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Site List') }}
        </h2>
    </x-slot>
            <div class="flex flex-row"> 
                <div class="w-8/12 m-2 p-4 shadow-md">
                    @php $chunkedSites = $sites->toArray(); @endphp
                        @foreach(array_chunk($chunkedSites, 6) as $chunk)
                            <div class="flex ">
                                @foreach($chunk as $site)
                                    @if(isset($site['category']) && $site['category'] === 'one')
                                        <div class="m-2 p-4 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="/images/{{ $site['thumbnail'] }}" style="width: 75px; height: 75px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
                                            <a class="btn absolute top-0 left-0 bg-blue-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-blue-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base"
                                            href="{{ route('sites.edit', ['site' => $site['id']]) }}">
                                                Edit
                                            </a>
                                            
                                            <form action="{{ route('sites.delete', ['site' => $site['id']]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <!-- Other form fields or content here -->
                                                <button class="btn absolute bottom-0 right-0 bg-red-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-red-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    @endif    
                                @endforeach
                            </div>
                        @endforeach
                </div>
                <div class="w-4/12 m-2 p-4 shadow-md">
                    @php $chunkedSites = $sites->toArray(); @endphp
                        @foreach(array_chunk($chunkedSites, 4) as $chunk)
                            <div class="flex">
                                @foreach($chunk as $site)
                                    @if(isset($site['category']) && $site['category'] === 'two')
                                        <div class="m-2 p-4 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="/images/{{ $site['thumbnail'] }}" style="width: 45px; height: 45px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
                                            <a class="btn absolute top-0 left-0 bg-blue-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-blue-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base"
                                            href="{{ route('sites.edit', ['site' => $site['id']]) }}">
                                                Edit
                                            </a>
                                            <form action="{{ route('sites.delete', ['site' => $site['id']]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <!-- Other form fields or content here -->
                                                <button class="btn absolute bottom-0 right-0 bg-red-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-red-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    @endif    
                                @endforeach
                            </div>
                        @endforeach
                </div>
                <div class="w-4/12 m-2 p-4 shadow-md">
                    @php $chunkedSites = $sites->toArray(); @endphp
                        @foreach(array_chunk($chunkedSites, 4) as $chunk)
                            <div class="flex">
                                @foreach($chunk as $site)
                                    @if(isset($site['category']) && $site['category'] === 'three')
                                        <div class="m-2 p-4 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="/images/{{ $site['thumbnail'] }}" style="width: 45px; height: 45px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
                                            <a class="btn absolute top-0 left-0 bg-blue-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-blue-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base"
                                            href="{{ route('sites.edit', ['site' => $site['id']]) }}">
                                                Edit
                                            </a>
                                            <form action="{{ route('sites.delete', ['site' => $site['id']]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <!-- Other form fields or content here -->
                                                <button class="btn absolute bottom-0 right-0 bg-red-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-red-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    @endif    
                                @endforeach
                            </div>
                        @endforeach
                </div>
            </div>
</x-app-layout>