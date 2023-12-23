@extends('layout.app')

@section('content')
<div class="container mt-3">
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <h2>Create a Trip</h2>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="date">Trip Date:</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="location_id">Destination:</label>
                        <select name="location_id" class="form-control" required>
                            @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Create Trip</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection