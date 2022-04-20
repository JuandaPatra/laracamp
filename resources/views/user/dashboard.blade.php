@extends('layouts.app')

@section('content')

<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @foreach($checkouts as $checkout)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="/assets/images/item_bootcamp.png" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{$checkout->camp->title}}</strong>
                            </p>
                            <p>
                                {{$checkout->created_at->format('M d,Y')}}
                            </p>
                        </td>
                        <td>
                            <strong>Rp. {{$checkout->total}}</strong>
                            @if($checkout->id)
                            <span class="badge bg-success">Disc {{$checkout->discount_percentage}}%</span>
                            @endif
                        </td>
                        <td>
                            @if($checkout->payment_status == 'paid')
                            <strong class="text-green">Payment Success</strong>
                            @else
                            <strong>Waiting for Payment</strong>
                            @endif
                        </td>
                        @if($checkout->payment_status == 'paid')
                        <td>
                            <a href="{{$checkout->midtrans_url}}" class="btn btn-primary disabled" >Pay here</a>
                        </td>
                        @else
                        <td>
                            <a href="{{$checkout->midtrans_url}}" class="btn btn-primary">Pay here</a>
                        </td>
                        @endif
                        <td>
                            <a href="https://wa.me/087722039749?text=Hi, saya ingin bertanya tentang kelas {{$checkout->camp->title}}" class="btn btn-primary">
                                Contact Support
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection