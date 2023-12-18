<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Popup List') }}
        </h2>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <div class="pull-right">
                <a class="btn btn-primary rounded-md  bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="{{ route('sites.index') }}"> Home</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary rounded-md  bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="{{ route('popups.view') }}"> Add Popups</a>
            </div>
        </div>    
    </x-slot>
            <div class="flex flex-row"> 
                <div class="w-8/12 m-2 p-4 shadow-md">
                    @php $chunkedSites = $popups->toArray(); @endphp
                        @foreach(array_chunk($chunkedSites, 6) as $chunk)
                            <div class="flex ">
                                @foreach($chunk as $popup)
                                        <div class="m-2 p-4 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="#"> 
                                                <img src="/images/{{ $popup['popup'] }}" style="width: 75px; height: 75px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
                                            <form action="{{ route('popups.delete', ['popup' => $popup['id']]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn absolute bottom-0 right-0 bg-red-500 text-white font-semibold py-0.25 px-0.25 rounded-full shadow-md hover:bg-red-700 transition duration-300 ease-in-out text-xs md:text-sm lg:text-base" type="submit">Delete</button>
                                            </form>
                                        </div>
                                @endforeach
                            </div>
                        @endforeach
                </div>
            </div>
</x-app-layout>