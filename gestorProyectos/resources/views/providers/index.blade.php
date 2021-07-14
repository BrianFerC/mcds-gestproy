@extends('layouts.app')

@section('title', 'Module Providers')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1> <i class="fas fa-list-alt"></i> Module Providers</h1>
                <hr>
                <a href="{{ route('providers.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Add Providers
                </a>
                <a href="{{ url('export/providers/pdf') }}" class="btn btn-larapp">
                    <i class="fas fa-file-pdf"></i> Export PDF
                </a>
                <input type="hidden" id="tmodel" value="providers">
                <input type="text" id="qsearch" name="qsearch" class="form-search" autocomplete="off" placeholder="Search">
                <br>
                <div class="loader d-none text-center mt-5">
                    <img src="{{ asset('imgs/rings.svg') }}" width="120px">
                </div>
                <br><br>
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Name Provider</th>
                        <th>Name Contact</th>
                        <th>Image Provider</th>
                        <th>Actions</th>
                    </thead>
                    <tbody id="content">
                        @foreach ($prov as $provider)
                            <tr>
                                <td>{{ $provider->name_provider }}</td>
                                <td>{{ $provider->name_contact }}</td>
                                <td><img src="{{ asset($provider->image_provider) }}" width="36px" class="img-thumbnail"></td>
                                <td>
                                    <a href="{{ url('providers/'.$provider->id) }}" class="btn btn-sm btn-larapp">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="{{ url('providers/'.$provider->id.'/edit') }}" class="btn btn-sm btn-larapp">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <form action="{{ url('providers/'.$provider->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-sm btn-danger btn-delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $prov->links() }}
            </div>
        </div>
    </div>
@endsection
