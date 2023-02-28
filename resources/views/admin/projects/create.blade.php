@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <form>
                <div class="mb-3">
                  <label  class="form-label">Enter Title</label>
                  <input name="title" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Enter Content</label>
                    <textarea name="content"  cols="30" rows="10"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

@endsection