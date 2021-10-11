@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
=@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-shopping-bag"></i> {{ $pageTitle }} - {{ $subTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
        <div class="col-md-12">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <div class="tile">
                        <form action="{{ route('admin.products.update') }}" enctype="multipart/form-data" method="POST" role="form">
                            @csrf
                            <h3 class="tile-title">Product Information</h3>
                            <hr>
                            <div class="tile-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <label class="control-label" for="name">Name</label>
                                            <input
                                                class="form-control @error('name') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter product name"
                                                id="name"
                                                name="name"
                                                value="{{ old('name', $product->name) }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('name') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="price">Price</label>
                                            <input
                                                class="form-control @error('price') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter product price"
                                                id="price"
                                                name="price"
                                                value="{{ old('price', $product->price) }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('price') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="description">Description</label>
                                    <textarea name="description" id="description" rows="8" class="form-control">{{ old('description', $product->description) }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="image" class="control-label col-12">Image</label>
                                        @if ($product->image != null)
                                            <img class="w-25" src="/storage/{{ $product->image }}">
                                        @else
                                            <img src="https://via.placeholder.com/250">
                                        @endif
                                        <input type="file" class="form-control-file col-4" id="image" name="image" value="{{ old('image', $product->image) }}">
                                        @error('image') <span>{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input"
                                                           type="checkbox"
                                                           id="status"
                                                           name="status"
                                                           value="1"
                                                           @if(old('status',$product->status)=="1") checked @endif
                                                    />Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tile-footer">
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Product</button>
                                        <a class="btn btn-danger" href="{{ route('admin.products.index') }}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
