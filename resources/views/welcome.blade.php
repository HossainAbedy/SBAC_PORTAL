<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SBAC PORTAL</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="flex">
            <div class="flex flex-row">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            @foreach($popups as $popup)
                @if($popup['status'] === 'active')
                    <div id="popupModal" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
                        <div class="bg-white p-6 rounded shadow-xl w-1/2">
                            <h2 class="text-xl font-semibold mb-4">Welcome to SBAC WEB PORTAL!</h2>
                            <p class="text-gray-700">Explore the latest from SBACBL...</p>
                            <img src="/images/{{ $popup['popup'] }}" style="width: 100%; height: 300px;" class="bg-cover bg-center bg-no-repeat object-cover object-center">
                            <button id="closeModal" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Close</button>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="flex flex-row"> 
                <div class="w-8/12 m-2 p-4 shadow-md">
                    @php $chunkedSites = $sites->toArray(); @endphp
                        @foreach(array_chunk($chunkedSites, 6) as $chunk)
                            <div class="flex ">
                                @foreach($chunk as $site)
                                    @if(isset($site['catagory']) && $site['catagory'] === 'one')
                                        <div class="m-2 p-4 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="/images/{{ $site['thumbnail'] }}" style="width: 75px; height: 75px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
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
                                    @if(isset($site['catagory']) && $site['catagory'] === 'two')
                                        <div class="m-2 p-4 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="/images/{{ $site['thumbnail'] }}" style="width: 45px; height: 45px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
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
                                    @if(isset($site['catagory']) && $site['catagory'] === 'three')
                                        <div class="m-2 p-4 shadow-md transition duration-300 ease-in-out transform hover:scale-110">
                                            <a class="btn btn-primary" href="{{ $site['link'] }}"> 
                                                <img src="/images/{{ $site['thumbnail'] }}" style="width: 45px; height: 45px;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                                            </a>
                                        </div>
                                    @endif    
                                @endforeach
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </body>
    <script>
            window.onload = function() {
            const modal = document.getElementById('popupModal');
            const closeModal = document.getElementById('closeModal');

            // Function to display the modal
            function showModal() {
                modal.classList.remove('hidden');
            }

            // Function to hide the modal
            function hideModal() {
                modal.classList.add('hidden');
            }

            // Show the modal when the user visits the site
            showModal();

            // Close the modal when the user clicks the close button
            closeModal.addEventListener('click', hideModal);
        };
    </script>
</html>
