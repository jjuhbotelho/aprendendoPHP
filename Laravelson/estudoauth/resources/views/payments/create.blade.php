@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="/payments">

            @csrf

            <button class="btn btn-primary" type="submit" formmethod="POST">Make Payment</button>
        </form>
    </div>
@endsection
