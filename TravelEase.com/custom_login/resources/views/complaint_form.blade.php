@extends('layouts.app')

@section('content')
<style>
    body {
        background: url('https://img.freepik.com/premium-photo/blue-christmas-composition-with-stars-trendy-xmas-background-mockup-modern-design-free-space-text-copy-space-flat-lay-top-view_429124-738.jpg?semt=ais_hybrid') 
                    no-repeat center center fixed;
        background-size: cover;
        color: black;
    }

    .card {
        background-color: rgba(0, 0, 0, 0.85);
        color: white;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
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

   
    .form-control{
         border-radius: 25px;
    color: black; /* Text color inside the input and textarea */
    background-color: white; /* Ensures white background */
}
.custom-textarea {
     border-radius: 25px;
    color: black; /* Text color inside the input and textarea */
    background-color: white; /* Ensures white background */
}
   

.form-control::placeholder,
.custom-textarea::placeholder {
    color: #666; /* Optional: makes placeholder text slightly gray */
}
    }

    .custom-textarea {
        border-radius: 25px;
    }

    .btn-primary {
        border-radius: 25px;
    }

    .container {
        max-width: 100%;
    }
</style>

<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">

                <div class="heading-block mb-4">File Complaints</div>

                <div class="card-body p-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('complaint.store') }}" method="POST">
                        @csrf
                        <div class="mb-4 text-center">
                            <label for="email" class="fw-bold">Email Address</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                value="{{ old('email') }}" 
                                class="form-control rounded-pill shadow-sm p-3 w-75 mx-auto" 
                                placeholder="Enter your email" 
                                required>
                        </div>

                        <div class="mb-4 text-center">
                            <label for="complaint" class="fw-bold">Your Complaint</label>
                            <textarea 
                                name="complaint" 
                                id="complaint" 
                                rows="5" 
                                class="form-control shadow-sm p-3 w-75 mx-auto custom-textarea" 
                                placeholder="Write your complaint here..." 
                                required>{{ old('complaint') }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm">
                                Submit
                            </button>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('complaint.index') }}" class="btn btn-primary text-white btn-lg px-5 rounded-pill shadow-sm">
                                Read Complaints
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


