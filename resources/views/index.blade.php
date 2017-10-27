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
                    <div class="row">
                        <div class="col-md-12">
                            <?php $prodNum = 1; ?>
                            @foreach ($products as $product)
                            <a href="product/{{str_slug($product->name.' '.$product->id, '-')}}">
                                <div class="col-md-3">
                                        <p><h3>{{ $product->name }}</h3></p>
                                        <p><img src="{{ asset('storage/img/products/'.$product->id.'.jpg') }}" class="img-responsive"/></p>
                                        <p>{{ $product->description }}</p>
                                        <p>Price: {{ $product->price }}</p>
                                </div>                            
                            </a>
                            <?php 
                                if($prodNum%4 == 0) {
                                    echo '<div class="clearfix"></div>';
                                }
                                $prodNum++; 
                            ?>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
