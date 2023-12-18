<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Popups') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <form id="myForm" action="{{ route('popups.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf            
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="flex flex-col items-center">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Add Popups</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">No edit available</p>
                            </div>
                            
                            <div class="sm:col-span-3">
                                <label for="thumbnail" class="block text-sm font-medium leading-6 text-gray-900">Popup Image</label>
                                <div class="mt-2">
                                    <input type="file" name="popup" id="popup_id" autocomplete="popup" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                                <div class="mt-2">
                                    <select id="status_id" name="status" autocomplete="status" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value="active">Active</option>
                                        <option value="inactive">In-Active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="rounded-md  bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" onclick="resetForm()">Cancel</button>
                                <div class="pull-right">
                                    <a class="btn btn-primary rounded-md  bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="{{ route('popups.index2') }}"> View</a>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary rounded-md  bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="{{ route('sites.index') }}"> Back</a>
                                </div>
                                <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                            </div>
                        </div>     
                    </form>
                    <script>
                        function resetForm() {
                            document.getElementById('myForm').reset();
                        }
                    </script>
                </div>
            </div>
        </div>
</x-app-layout>
