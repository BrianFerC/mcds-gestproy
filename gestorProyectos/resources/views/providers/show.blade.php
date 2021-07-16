@extends('layouts.app')

@section('title', 'Show Provider')

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
                        <a href="{{ url('providers') }}"><i class="fas fa-globe"></i> Module Providers</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-search"></i>Show Providers</li>
                </ol>
                </nav>
            <div class="card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-search"></i>
 						Show Provider
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td colspan="2" class="text-center">
                                <img src="{{ asset($providers->image_provider) }}"  width="180px" class="img-thumbnail">
                            </td>
                        </tr>
                        <tr>
                            <th>Name provider:</th>
                            <td>{{ $providers->name_provider }}</td>

                        </tr>
                        <tr>
                            <th>Name Contact:</th>
                            <td>{{ $providers->name_contact }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
