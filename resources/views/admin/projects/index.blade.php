@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-2">
            <h1 class="text-center">PROJECT LIST</h1>
            <div class="text-center m-5">
                <a href="{{ route('admin.projects.create')}}" class="btn btn-primary">Add project!</a>
            </div>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">CONTENT</th>
                        <th scope="col">SLUG</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->content }}</td>
                        <td>{{ $project->slug }}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection