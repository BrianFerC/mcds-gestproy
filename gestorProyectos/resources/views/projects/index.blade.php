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
                <a href="" class="btn btn-larapp"> 
                    <i class="fas fa-file-pdf"></i> Export PDF 
                </a>
                <br><br>
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Area</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->code }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->area }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-larapp">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-larapp">
                                        <i class="fas fa-pen"></i>
                                    </a>                               
                                    <a href="" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>   
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