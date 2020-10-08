@extends('layout')

@section('content')
  <div id="wrapper">
    <div class="container" id="page">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Subscribe to our newsletter</div>

            <div class="card-body">

              <form
                method="POST"
                action="/contact"
              >
                @csrf
                <div class="form-group row">
                  <label
                    for="email"
                    class="block text-xs uppercase font-semibold mb-1"
                  >
                    E-Mail Address
                  </label>

                  <div class="col-md-6">
                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                           name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-outline-primary">
                      Contact Us
                    </button>
                  </div>
                </div>
                @if(session('message'))
                  <p class="text-green">
                    {{ session('message') }}
                  </p>
                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
