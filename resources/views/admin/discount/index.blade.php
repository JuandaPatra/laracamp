@extends('layouts.app')

@section('content')

<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4 d-flex justify-content-center">
                <h2 class="primary-header ">
                    Discount
                </h2>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{route('admin.discount.create')}}" class="btn btn-primary">Add Discount</a>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Percentage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($discounts as $discount)
                    <tr>
                        <td>{{$discount->name}}</td>
                        <td><span class="badge bg-primary">
                                {{$discount->code}}
                            </span> </td>
                        <td>{{$discount->description}}</td>
                        <td>{{$discount->percentage}}%</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{route('admin.discount.edit', $discount->id)}}" class="btn btn-warning me-4">Edit</a>
                                <form action="{{route('admin.discount.destroy', $discount->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
    
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection