@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h3>Our Trip</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($trips as $trip)
                <tr>    
                    <th scope="row">{{ $trip->id }}</th>
                    <td>{{$trip->date}}</td>
                    <td>
                        <a href="{{route('bookTicket', $trip->id)}}" class="btn btn-primary">Book</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection