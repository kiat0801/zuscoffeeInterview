@extends('site.app')
@section('title', 'Homepage')
@section('content')

    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Our Products</h2>
        </div>
    </section>

    <section class="section-content bg padding-y border-top" id="site">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <section class="section-content bg padding-y">
                            <div class="container">
                                <div id="code_prod_complex">
                                    <div class="row">
                                        @foreach($products as $product)
                                            @if ($product->status != 0)
                                            <div class="col-md-4">
                                                <figure class="card card-product">
                                                    <a href="{{ route('site.pages.product', $product->id) }}">
                                                    @if ($product->image != null)
                                                        <div class="img-wrap padding-y"><img src="/storage/{{ $product->image }}" alt=""></div>
                                                    @else
                                                        <div class="img-wrap padding-y"><img src="https://via.placeholder.com/200" alt=""></div>
                                                    @endif
                                                    </a>
                                                    <figcaption class="info-wrap">
                                                        <h4 class="title">{{ $product->name }}</h4>
                                                    </figcaption>
                                                    <div class="bottom-wrap">
                                                        <h4 class="number">${{ $product->price }}</h4>
                                                    </div>
                                                </figure>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
