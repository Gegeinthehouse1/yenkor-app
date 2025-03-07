@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Ride History of {{ $rider->name }}</h2>

    <a href="{{ route('admin.riders') }}" class="btn btn-secondary mb-3">Back to Riders</a>

    <table class="table">
        <thead>
            <tr>
                <th>Ride ID</th>
                <th>Pickup Location</th>
                <th>Drop-off Location</th>
                <th>Fare</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rides as $ride)
                <tr>
                    <td>{{ $ride->id }}</td>
                    <td>{{ $ride->pickup_location }}</td>
                    <td>{{ $ride->dropoff_location }}</td>
                    <td>${{ number_format($ride->fare, 2) }}</td>
                    <td>{{ $ride->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
