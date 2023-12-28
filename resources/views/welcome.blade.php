<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SBAC PORTAL</title>
    <!-- Import CSS file -->
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <div class="flex bg-black">
        <!-- Navigation Links -->
        <div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-2 text-right z-10">
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
    </div>

    <!-- Display Popups -->
    @foreach($popups as $popup)
        @if($popup['status'] === 'active')
            <div id="popupModal" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-6 rounded shadow-xl w-1/2">
                    <h2 class="text-xl font-semibold mb-4">Welcome to SBAC WEB PORTAL!</h2>
                    <p class="text-gray-700">Explore the latest from SBACBL...</p>
                    <img src="/images/{{ $popup['popup'] }}" style="width: 100%; height: 300px;" class="bg-cover bg-center bg-no-repeat object-cover object-center">
                    <button id="closeModal" class="bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 rounded mt-4">Close</button>
                </div>
            </div>
        @endif
    @endforeach

    <!-- Main Content -->
    <div class="shadow-lg bg-black shadow-white flex-vertical h-screen"> <!--main -->
        <div class="shadow-lg bg-black shadow-white flex"> 
            <div class="flex items-center shadow-lg justify-center shadow-white w-full">
                <!-- Logo -->
                <a href="https://www.sbacbank.com/" class="justify-start">
                    <img src="/images/favicon.ico" style="width: 25px; height: 25px;" >
                </a>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('sites.index')" :active="request()->routeIs('dashboard')">
                        {{ __('SBAC WEB PORTAL') }}
                    </x-nav-link>
                </div>
                <!-- Search Box -->
                <div class="m-1 p-1 justify-items-center shadow-lg ">
                    <input type="text" id="searchInput" placeholder="Search by name..." class="text-xs border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-red-500" onkeydown="searchOnEnter(event)">
                    <button onclick="searchFunction()" class="bg-red-700 hover:bg-red-500 text-xs text-black px-4 py-2 rounded-md ml-2">Search</button>
                    <button onclick="refreshSearch()" id="refreshBtn" class="bg-red-700 hover:bg-red-500 text-xs text-black px-4 py-2 rounded-md ml-2 hidden">Refresh</button>
                </div>
            </div> 
        </div>
        <!-- Images -->
        <div class="flex p-7 bg-black"> <!-- Center horizontally and vertically -->
            <div class="flex flex-wrap bg-black" id="imageContainer">
                @foreach($sites as $site)
                    <div class="site-image bg-gray-300 shadow-red-700 m-1 p-1 shadow-md transition duration-300 ease-in-out transform hover:scale-110" style="width: 100px; height: 100px;" data-name="{{ $site['name'] }}">
                        <a class="btn btn-primary" href="{{ $site['link'] }}">
                            <img src="{{ $site['thumbnail'] }}" style="width: 100%; height: 100%;" class="object-cover object-center hover:scale-125 transition duration-300 ease-in-out">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- JavaScript -->
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

        // Function to handle search by pressing Enter
        function searchOnEnter(event) {
            if (event.key === 'Enter') {
                searchFunction();
            }
        }

        // Function to perform search based on input
        function searchFunction() {
            var input = document.getElementById("searchInput").value.toUpperCase();
            var images = document.querySelectorAll("#imageContainer .site-image");

            images.forEach(function(image) {
                var name = image.getAttribute("data-name").toUpperCase();

                if (name.includes(input)) {
                    image.style.display = "";
                } else {
                    image.style.display = "none";
                }
            });

            // Show refresh button after search
            toggleRefreshButton(true);
        }

        // Function to refresh search results
        function refreshSearch() {
            var images = document.querySelectorAll("#imageContainer .site-image");

            images.forEach(function(image) {
                image.style.display = "";
            });

            document.getElementById("searchInput").value = "";
            toggleRefreshButton(false);
        }

        // Function to toggle the visibility of the refresh button
        function toggleRefreshButton(show) {
            var refreshBtn = document.getElementById("refreshBtn");
            if (show) {
                refreshBtn.classList.remove("hidden");
            } else {
                refreshBtn.classList.add("hidden");
            }
        }
    </script>
</body>
</html>
