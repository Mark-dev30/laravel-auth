@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-5">
            <h2 class="text-center">Edit project</h2>
            @if($errors->any())
            <div class="alert alert-info">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label  class="form-label">Enter Title</label>
                  <input name="title" type="text" class="form-control" value="{{ old('title') ?? $project->title }}">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Enter Content</label>
                    <textarea class="form-control" name="content"  cols="30" rows="10" >{{ old('content') ?? $project->content }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection