@extends('layouts.app')

@section('title', 'Add Projects')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-plus"></i> 
 						Add Project
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
                    <form method="POST" action="{{ route('projects.store') }}">
                        @csrf
                        <div class="form-group">
                                <input id="code" type="number" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" placeholder="Code">

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="area" type="area" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" placeholder="Area">

                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="class" type="class" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" placeholder="Class">

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <select name="state" id="state" class="form-control @error('state') is-invalid @enderror">
                                <option value="">Select State...</option>
                                <option value="Disponible" @if(old('state') == 'Disponible') selected @endif>Disponible</option>
                                <option value="No Disponible" @if(old('state') == 'No Disponible') selected @endif>No Disponible</option>
                            </select>

                            @error('state')
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
                                <a href="{{ route('projects.index') }}" class="btn btn-block btn-secondary text-uppercase">
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