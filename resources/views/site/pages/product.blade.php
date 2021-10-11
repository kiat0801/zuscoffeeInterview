@extends('site.app')
@section('title', $product->name)
@section('content')

    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Product Details</h2>
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
                                    <figure style="min-height: 1000px" class="card ">
                                        <div style="min-height: 1000px" class="row">

                                            <div class="col-md-4">
                                                <article class="p-5">
                                                @if ($product->image != null)
                                                        <div class="padding-y">
                                                            <img class="w-100" src="/storage/{{ $product->image }}" alt="">
                                                        </div>
                                                @else
                                                    <div class="padding-y">
                                                        <img src="https://via.placeholder.com/300" alt="">
                                                    </div>
                                                @endif
                                                </article>
                                            </div>
                                            <div class="col-md-8">
                                                    <article class="p-5">
                                                        <h3 class="display-3 mb-3">{{ $product->name }}</h3>

                                                        <div class="mb-3">
                                                                <var class="price h3 text-danger">
                                                                    <span class="currency"></span><span class="num" id="productPrice">${{ $product->price }}</span>
                                                                </var>
                                                        </div>
                                                        <hr>
                                                        <div class="mb-3">
                                                            <p class="h5">
                                                                <span class="num" id="productPrice">{{ $product->description }}</span>
                                                            </p>
                                                        </div>
                                                    </article>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
