@extends('layouts.app')

@section('content')

<section class="vh-100 bg-white"> <!-- Set background color to white -->
  <div class="mask d-flex align-items-center h-100">
    <div class="container d-flex justify-content-center align-items-center"> <!-- Adjusted container to center content -->
      <div class="row d-flex justify-content-center align-items-center w-100">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6"> <!-- Adjusted container size for smaller width -->
          <div class="card bg-orange text-dark" style="border-radius: 15px; max-height: 80vh; overflow-y: auto;"> <!-- Orange background for card -->
            <div class="card-body p-4"> <!-- Adjusted padding -->
              <h2 class="text-uppercase text-center mb-4">Create an account</h2> <!-- Adjusted margin bottom -->
              
              
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group mb-3">
                  <label class="form-label" for="form3Example3cg">Email</label>
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" value="{{ old('email') }}" required />
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="form3Example1cg">Name</label>
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" value="{{ old('name') }}" required autofocus />
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="form3Example2cg">Address</label>
                  <input type="text" id="form3Example2cg" name="address" class="form-control form-control-lg" value="{{ old('address') }}" required />
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="form3Example3cg">Phone</label>
                  <input type="text" id="form3Example3cg" name="phone" class="form-control form-control-lg" value="{{ old('phone') }}" required />
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" required />
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="form3Example4cdg">Confirm Password</label>
                  <input type="password" id="form3Example4cdg" name="password_confirmation" class="form-control form-control-lg" required />
                </div>

                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required />
                  <label class="form-check-label" for="form2Example3cg">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-custom btn-lg">Register</button>
                </div>

                <p class="text-center text-muted mt-4 mb-0">Have already an account? <a href="{{ route('login') }}" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

<style>
  .vh-100 {
    height: 100vh; /* Full viewport height */
  }
  .bg-white {
    background-color: white; /* White background for the section */
  }
  .bg-orange {
    background-color: orange; /* Orange background for the card */
  }
  .text-dark {
    color: black !important; /* Ensures text is black */
  }
  .btn-custom {
    background-color: skyblue; /* Sky blue background */
    color: orange; /* Orange text */
    border: none; /* Remove border */
  }
  .btn-custom:hover {
    background-color: #87ceeb; /* Slightly darker sky blue for hover effect */
    color: orange; /* Maintain orange text on hover */
  }
  .form-label {
    display: block; /* Ensure label is displayed as a block element */
    margin-bottom: 0.5rem; /* Space between label and input field */
  }
  .form-check {
    position: relative;
    padding-left: 1.5rem; /* Add padding to the left for checkbox */
  }
  .form-check-input {
    position: absolute;
    left: 0; /* Align checkbox to the left */
    top: 50%;
    transform: translateY(-50%); /* Center checkbox vertically */
  }
  .form-check-label {
    padding-left: 1.5rem; /* Space between checkbox and label */
  }
  .card {
    max-height: 80vh; /* Ensure card height is constrained */
    overflow-y: auto; /* Allow scrolling if necessary */
  }
  .card-body {
    padding: 2rem; /* Adjust padding for better spacing */
  }
  .form-control-lg {
    font-size: 1rem; /* Font size adjustment for input fields */
    padding: 0.75rem; /* Padding adjustment for input fields */
  }
</style>
