@extends('site.app')
@section('title', 'Account Setting')
@section('content')

    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Account Settings</h2>
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


                        <form class="p-5" action="{{ route('site.user.update') }}" enctype="multipart/form-data" method="POST" role="form">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <h3 class="tile-title">Account Information</h3>
                            <hr>
                            <div class="tile-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <input
                                                class="form-control @error('name') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter product name"
                                                id="name"
                                                name="name"
                                                value="{{ old('name', $user->name) }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('name') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="email">E-mail</label>
                                            <input
                                                class="form-control @error('email') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter product price"
                                                id="email"
                                                name="email"
                                                value="{{ old('email', $user->email) }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('email') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="phone_number">Phone Number</label>
                                            <input
                                                class="form-control @error('name') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter phone number"
                                                id="phone_number"
                                                name="phone_number"
                                                value="{{ old('phone_number', $user->phone_number) }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('name') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="address">Address</label>
                                    <textarea name="address" id="address" rows="8" class="form-control">{{ old('address', $user->address) }}</textarea>
                                </div>
                            </div>
                            <div class="tile-footer">
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Account</button>
                                        <a class="btn btn-danger" href="{{ route('site.pages.homepage') }}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>

            </div>
        </div>
    </section>

@stop
