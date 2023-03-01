@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-2 p-0">
            @if (session('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
            @endif
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
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->content }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-sm btn-info" href="{{ route('admin.projects.show', $project->slug) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-warning ms-2 me-2" href="{{ route('admin.projects.edit', $project->slug) }}">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->slug)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection