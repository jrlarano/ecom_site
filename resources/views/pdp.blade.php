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

                    <div class="col-md-4 col-md-offset-2">
                        <p><img src="{{ asset('storage/img/products/'.$product->id.'.jpg') }}" class="img-responsive"/></p>
                    </div>

                    <div class="col-md-4">
                        <p><h3>{{ $product->name }}</h3></p>
                        <p>{{ $product->description }}</p>
                        <p>{!! $product->long_description !!}</p>
                        <p>Price: {{ $product->price }}</p>
                        <p><input type="button" value="Add to cart"/></p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
