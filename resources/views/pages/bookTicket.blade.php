@extends('layout.app')

@section('content')
    <div class="container mt-3">
       <div class="row">
           <div class="col-md-6">
               <div class="card p-3">
               <h3>Book a Ticket</h3>
        <form action="{{route('bookTicket.store')}}" method="post" enctype="multipart/form-data">
            @csrf   
            <div class="form-group">
                <label for="seat_number">Select Seat:</label>
                <select name="seat_number" class="form-control" required>
                    @for($i = 1; $i <= 36; $i++)
                        <option value="{{ $i }}">Seat {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label for="location">Select Seat:</label>
                <select name="location" class="form-control" required>
                   @foreach ($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>  
                   @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Book Ticket</button>
        </form>
                </div>
           </div>
       </div>
    </div>
@endsection
