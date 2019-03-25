@extends('layouts.default')
@section('content')
    <div class="card align-text-top-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Please use this form to contact the site owner.</p></div>
        <div class="card-body">
            <form action="/contact" method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
