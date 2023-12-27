<x-app-layout>
    <x-slot name="header">
    <div class="mt-6 flex items-center justify-end gap-x-6">
            <div class="pull-right">
                <a class="btn btn-primary rounded-md  bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="{{ route('sites.index') }}"> Home</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary rounded-md  bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="/dashboard"> Add Site</a>
            </div>
        </div>        
    </x-slot>
            <div class="flex flex-row"> 
                <div class="w-8/12 m-2 p-2 shadow-lg shadow-red-700">
                    @php $chunkedSites = $sites->toArray(); @endphp
                        @foreach(array_chunk($chunkedSites, 6) as $chunk)
                            <div class="flex ">
                                @foreach($chunk as $site)
                                    @if(isset($site['category']) && $site['category'] === 'one')
                                        <div class="shadow-red-700 m-1 p-1 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="{{ $site['thumbnail'] }}" style="width: 75px; height: 75px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
                                            <a class="btn absolute top-0 left-0 bg-orange-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-blue-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base"
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
                <div class="w-4/12 m-2 p-2 shadow-lg shadow-blue-700">
                    @php $chunkedSites = $sites->toArray(); @endphp
                        @foreach(array_chunk($chunkedSites, 4) as $chunk)
                            <div class="flex">
                                @foreach($chunk as $site)
                                    @if(isset($site['category']) && $site['category'] === 'two')
                                        <div class="shadow-blue-700 m-1 p-1 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="{{ $site['thumbnail'] }}" style="width: 45px; height: 45px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
                                            <a class="btn absolute top-0 left-0 bg-orange-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-blue-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base"
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
                <div class="w-4/12 m-2 p-2 shadow-lg shadow-green-700">
                    @php $chunkedSites = $sites->toArray(); @endphp
                        @foreach(array_chunk($chunkedSites, 4) as $chunk)
                            <div class="flex">
                                @foreach($chunk as $site)
                                    @if(isset($site['category']) && $site['category'] === 'three')
                                        <div class="shadow-green-700 m-1 p-1 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="{{ $site['thumbnail'] }}" style="width: 45px; height: 45px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
                                            <a class="btn absolute top-0 left-0 bg-orange-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-blue-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base"
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