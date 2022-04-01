
@extends('template.structural')

@section('content')
    <style>
        .overlay{
            padding: 20vh 0;
            text-align: center;
        }
        .details{
            text-align: center;
        }
    </style>
    <section class="overlay">
        <div class="title">
            Service
        </div>
        
        <div class="details">
            <h1>{{$service['title']}}</h1>
            <h4>{{ $service['price'] }}<br></h4>
            <p>{{ $service['desc'] }}</p>
        </div>    
    </section>
    
@endsection