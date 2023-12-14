<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Add New Site</h2>
                                </div>
                            <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('sites.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
           
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
                
                    <form action="{{ route('sites.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf            
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Thumbnail:</strong>
                                    <input type="file" name="thumbnail" class="form-control" placeholder="thumbnail">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Link:</strong>
                                    <textarea class="form-control" style="height:150px" name="link" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Catagory:</strong>
                                    <textarea class="form-control" style="height:150px" name="catagory" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
