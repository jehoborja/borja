@extends('layout.app')

@section('content')
<div class="card my-4">
    <form action="{{route('saveUpdatedStudent')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="p_name" class="form-label">Event</label>
                    <input type="text" class="form-control" name="update_name" value="{{$products->name}}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="description" class="form-label">Event Participants</label>
                    <input type="text" class="form-control" name="update_student_id" value="{{$products->student_id}}" required>
                </div>
                <div>
                    <input type="hidden" name="id" value="{{$products->id}}">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection