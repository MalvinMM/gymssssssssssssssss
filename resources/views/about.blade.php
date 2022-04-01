
@extends('template.structural')

@section('content')
    <style>
        .overlay{
            padding: 20vh 0;
            text-align: center;
        }
    </style>
    <section class="overlay">
            <div class="title">
                About Us
            </div>
            <div class="subs">
                There wil be more details about the website.
            </div>
        </section>
        <div class="details">
            @foreach ($services as $s)
                <h1><a href="/about/{{ $s['slug'] }}">{{$s['title']}}</a></h1>
                <h4>{{ $s['price'] }}<br></h4>
                <p>{{ $s['desc'] }}</p>
            @endforeach
        </div>
@endsection