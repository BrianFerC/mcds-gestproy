@extends('layouts.app')

@section('title', 'Edit Project')

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
                        <a href="{{ url('projects') }}"><i class="fas fa-globe"></i> Module Projects</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-pen"></i> Edit Project</li>
                </ol>
                </nav>
            <div class="card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-pen"></i> 
 						Edit project
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
                    <form method="POST" action="{{ url('projects/'.$project->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">Select Category...</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if(old('category_id', $project->category_id) == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <select name="tracing_id" id="tracing_id" class="form-control @error('tracing_id') is-invalid @enderror">
                                    <option value="">Select tracing...</option>
                                    @foreach ($tracings as $tracing)
                                        <option value="{{ $tracing->id }}" @if(old('tracing_id', $project->tracing_id) == $tracing->id) selected @endif>{{ $tracing->id }}</option>
                                    @endforeach
                                </select>

                                @error('tracing_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="code" type="number" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code', $project->code) }}" placeholder="Code">

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $project->name) }}" placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="area" type="area" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area', $project->area) }}" placeholder="Area">

                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="class" type="class" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class', $project->class) }}" placeholder="Class">

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{ old('description', $project->description) }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="budget" type="number" class="form-control @error('budget') is-invalid @enderror" name="budget" value="{{ old('budget', $project->budget) }}" placeholder="Budget">

                                @error('budget')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <select name="state" id="state" class="form-control @error('state') is-invalid @enderror">
                                <option value="">Select State...</option>
                                <option value="Disponible" @if(old('state', $project->state) == 'Disponible') selected @endif>Disponible</option>
                                <option value="No Disponible" @if(old('state', $project->state) == 'No Disponible') selected @endif>No Disponible</option>
                            </select>

                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    	</div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block text-uppercase">
                                    <i class="fas fa-pen"></i> 
                   				Edit
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