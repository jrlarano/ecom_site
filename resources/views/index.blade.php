@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <p><h3>{{ $product->name }}</h3></p>
                            <p><img src="{{ asset('img/products/'.$product->image) }}" class="img-responsive"/></p>
                            <p>{{ $product->description }}</p>
                            <p>Price: {{ $product->price }}</p>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
