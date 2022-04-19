@extends('layouts.app')

@section('content')

<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            User
                        </th>
                        <th>Camp</th>
                        <th>Price</th>
                        <th>Register Data</th>
                        <th>Paid Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($checkouts as $checkout)
                    <tr>
                        <td>{{$checkout->user->name}}</td>
                        <td>{{$checkout->camp->title}}</td>
                        <td>{{$checkout->camp->price}}</td>
                        <td>{{$checkout->created_at->format('M d,Y')}}</td>
                        <td>
                            @if($checkout->payment_status == 'paid')
                            <span class="badge bg-success text-align">{{$checkout->payment_status}}</span>
                            @else
                            <span class="badge bg-warning text-align">{{$checkout->payment_status}}</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>No data</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection