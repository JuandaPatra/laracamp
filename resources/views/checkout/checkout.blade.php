@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    YOUR FUTURE CAREER
                </p>
                <h2 class="primary-header">
                    Start Invest Today
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{asset('images/item_bootcamp.png')}}" alt="" class="cover">
                            <h1 class="package text-uppercase">
                                {{$camp->title}}
                            </h1>
                            <p class="description">
                                Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{route('checkout.store', $camp->id)}}" method="POST" class="basic-form">
                            @csrf
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input name="name" type="text" class="form-control @if($errors->has('name')) is-invalid  @endif" value="{{ Auth::user()->name }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('name')
                                <span>{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                <input name="email" type="email" class="form-control @if($errors->has('email')) is-invalid  @endif" value="{{ Auth::user()->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('email')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Occupation</label>
                                <input name="occupation" type="text" class="form-control @if($errors->has('occupation')) is-invalid  @endif" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('occupation') ?: Auth::user()->occupation }}">
                                @error('occupation')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Phone</label>
                                <input name="phone" type="number" class="form-control @if($errors->has('phone')) is-invalid  @endif" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('phone') ?: Auth::user()->phone }}">
                                @error('phone')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input name="address" type="text" class="form-control @if($errors->has('address')) is-invalid  @endif" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('address') ?: Auth::user()->address }}">
                                @error('address')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Discount</label>
                                <input name="discount" type="text" class="form-control {{$errors->has('discount') ? 'is-invalid' : ''}}" value="{{old('discount')}}"  />
                                @if ($errors->has('discount'))
                                <p class="text-danger">{{$errors->first('discount')}}</p>
                                @endif
                            </div>

                    </div>
                    <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                    <p class="text-center subheader mt-4">
                        <img src="/assets/images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                    </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection