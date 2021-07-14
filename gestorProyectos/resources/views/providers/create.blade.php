@extends('layouts.app')

@section('title', 'Add Provider')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('home') }}"><i class="fas fa-clipboard-list"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('providers') }}"><i class="fas fa-list-alt"></i> Module Providers</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-plus"></i> Add Provider</li>
            </ol>
            </nav>
            <div class="card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-plus"></i>
                        Add Provider
                    </h5>
                </div>

                {{-- <div class="row mt-4">
                    <div class="col-md-8 offset-md-2">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              @foreach ($errors->all() as $message)
                                    <li>{{ $message }}</li>
                            @endforeach
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endif
                    </div>
                </div> --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('providers.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <input id="name_provider" type="text" class="form-control @error('name_provider') is-invalid @enderror" name="name_provider" value="{{ old('name_provider') }}" placeholder="Name Provider" autofocus>

                                @error('name_provider')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <div class="text-center my-3">
                                    <img src="{{ asset('imgs/no-provider.png') }}" width="120px" id="preview" class="img-thumbnail">
                                </div>
                                <button type="button" class="btn btn-block btn-secondary btn-upload">
                                    <i class="fas fa-upload"></i>
                                    Upload Provider Image
                                </button>
                                <input id="photo" type="file" class="form-control d-none @error('image_provider') is-invalid @enderror" name="image_provider" accept="image/*">
                            @error('image_provider')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        @csrf
                        <div class="form-group">
                            <input id="name_contact" type="text" class="form-control @error('name_contact') is-invalid @enderror" name="name_contact" value="{{ old('name_contact') }}" placeholder="Name Contact" autofocus>

                            @error('name_contact')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block text-uppercase">
                                    <i class="fas fa-save"></i>
                                    Add
                                </button>
                                <a href="{{ route('providers.index') }}" class="btn btn-block btn-secondary text-uppercase">
                                    <i class="fas fa-arrow-left"></i>
                                    Cancel
                                </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
