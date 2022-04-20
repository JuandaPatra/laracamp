@extends('layouts.app')

@section('content')

<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4 d-flex justify-content-center">
                <h2 class="primary-header ">
                    Insert New Discount
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <form action="{{route('admin.discount.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="exampleInputPassword1" name="name" value="{{old('name')}}">
                    @if ($errors->has('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Code</label>
                    <input type="text" class="form-control {{$errors->has('code') ? 'is-invalid' : ''}}" id="exampleInputPassword1" name="code" value="{{old('code')}}">
                    @if ($errors->has('code'))
                    <p class="text-danger">{{$errors->first('code')}}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" aria-label="With textarea" name="description" >{{old('description')}}</textarea>
                    @if ($errors->has('description'))
                    <p class="text-danger">{{$errors->first('description')}}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Percentage</label>
                    <input type="number" class="form-control {{$errors->has('percentage') ? 'is-invalid' : ''}}" id="exampleInputPassword1" min="1"  name="percentage" value="{{old('percentage')}}">
                    @if ($errors->has('percentage'))
                    <p class="text-danger">{{$errors->first('percentage')}}</p>
                    @endif
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Add Discount</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection