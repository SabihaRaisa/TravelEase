@extends('layouts.app')

@section('content')
<style>
    body {
        background: url('https://img.freepik.com/premium-photo/blue-christmas-composition-with-stars-trendy-xmas-background-mockup-modern-design-free-space-text-copy-space-flat-lay-top-view_429124-738.jpg?semt=ais_hybrid') 
                    no-repeat center center fixed;
        background-size: cover;
        color: black;
    }

    .card-complaint {
        background-color: rgba(0, 0, 0, 0.85);
        color: white;
        border: none;
        margin-bottom: 1.5rem;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    }

    .card-complaint small {
        color: #ccc;
    }

    .heading-block {
        background-color: rgba(211, 211, 211, 0.95); /* Light grey */
        border-radius: 10px;
        padding: 1rem;
        text-align: center;
        font-weight: bold;
        font-size: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        color: black;
    }
</style>

<div class="container mt-5">
    <div class="heading-block">Submitted Complaints</div>

    @forelse($complaints as $complaint)
        <div class="card-complaint">
            <h5><strong>{{ $complaint->email }}</strong></h5>
            <p>{{ $complaint->complaint }}</p>
            <div class="text-end">
                <small>Submitted {{ $complaint->created_at->diffForHumans() }}</small>
            </div>
        </div>
    @empty
        <div class="alert alert-light text-center">No complaints found.</div>
    @endforelse
</div>
@endsection



