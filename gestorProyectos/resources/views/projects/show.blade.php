@extends('layouts.app')

@section('title', 'Show Project')

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
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-search"></i> Show Project</li>
                </ol>
                </nav>
            <div class="card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-search"></i> 
 						Show Project
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Category:</th>
                            <td>{{$project->category->name}}</td>
                        </tr>
                        <tr>
                            <th>Id Tracing:</th>
                            <td>{{$project->tracing->id}}</td>
                        </tr>
                        <tr>
                            <th>Code</td>
                            <td>{{$project->code}}</td>
                        </tr>
                        <tr>
                            <th>Name</td>
                            <td>{{$project->name}}</td>
                        </tr>
                        <tr>
                            <th>Area</td>
                            <td>{{$project->area}}</td>
                        </tr>
                        <tr>
                            <th>Class</td>
                            <td>{{$project->class}}</td>
                        </tr>
                        <tr>
                            <th>Description</td>
                            <td>{{$project->description}}</td>
                        </tr>
                        <tr>
                            <th>Budget:</th>
                            <td>
                                <i class="fas fa-dollar-sign"></i>
                                {{ $project->budget }}
                            </td>
                        </tr>
                        <tr>
                            <th>State:</th>
                            <td>
                                @if ($project->state == 'Disponible')
                                    <button class="btn btn-success">Disponible</button>
                                @else
                                     <button class="btn btn-danger">No Disponible</button>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection