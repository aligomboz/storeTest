@extends('layouts.admin')
@section('content')

<div class="content-body">
    <!-- Input Mask start -->
    <section id="input-mask-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> <span class="text-primary">{{ $customer_address->user->full_name }}</span>  Customer address</h4>
                    </div>
                    <div class="card-body row">

                            <div class="col-xl-4 col-md-4 col-sm-12 mb-2">

                                <label for="date">address_title</label>
                                <h4 for="date">{{$customer_address->address_title}}</h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">first name</label>
                                <h4 for="date">{{$customer_address->first_name}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">last name</label>
                                <h4 for="date">{{$customer_address->last_name}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">email</label>
                                <h4 for="date">{{$customer_address->email}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">mobile</label>
                                <h4 for="date">{{$customer_address->mobile}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">address</label>
                                <h4 for="date">{{$customer_address->address}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">address2</label>
                                <h4 for="date">{{$customer_address->address2}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">country</label>
                                <h4 for="date">{{$customer_address->country->name}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">state</label>
                                <h4 for="date">{{$customer_address->state->name}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">city</label>
                                <h4 for="date">{{$customer_address->city->name}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">zip_code</label>
                                <h4 for="date">{{$customer_address->zip_code}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">po_box</label>
                                <h4 for="date">{{$customer_address->po_box}} </h4>
                            </div>

                            


                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
