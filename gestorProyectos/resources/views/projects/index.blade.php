@extends('layouts.app')

@section('title', 'Module Projects')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1> <i class="fas fa-globe"></i> Module Projects</h1>
                <hr>
                <a href="{{ route('projects.create') }}" class="btn btn-success"> 
                    <i class="fas fa-plus"></i> Add Projects 
                </a>
                <a href="{{ url('export/projects/pdf') }}" class="btn btn-larapp"> 
                    <i class="fas fa-file-pdf"></i> Export PDF 
                </a>
                <input type="hidden" id="tmodel" value="projects">
                <input type="text" id="qsearch" name="qsearch" class="form-search" autocomplete="off" placeholder="Search">
                <br>
                <div class="loader d-none text-center mt-5">
                    <img src="{{ asset('imgs/rings.svg') }}" width="120px">
                </div>
                <br><br>
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Area</th>
                        <th>Actions</th>
                    </thead>
                    <tbody id="content">
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->code }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->area }}</td>
                                <td>
                                    <a href="{{ url('projects/'.$project->id) }}" class="btn btn-sm btn-larapp">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="{{ url('projects/'.$project->id.'/edit') }}" class="btn btn-sm btn-larapp">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <form action="{{ url('projects/'.$project->id) }}" class="d-inline" method="POST">
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
                {{ $projects->links() }}
            </div>
        </div>
    </div>
@endsection