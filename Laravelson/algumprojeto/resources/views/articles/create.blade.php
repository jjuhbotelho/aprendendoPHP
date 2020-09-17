@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label class="label" for="tittle">Title</label>

                    <div class="control">
                        <input
                            class="input @error('tittle') is-danger @enderror"
                            type="text"
                            name="tittle"
                            id="tittle"
                            value="{{ old('tittle') }}">

                        @error('tittle')
                            <p class="help is-danger">{{ $errors->first('tittle') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror"
                                  name="excerpt"
                                  id="excerpt"
                        >{{ old('excerpt') }}</textarea>

                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror"
                                  name="body"
                                  id="body"
                        >{{ old('body') }}</textarea>

                        @error('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" name="submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
