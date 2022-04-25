@extends('layouts.admin')
@section('content')

<div class="content-body">
    <!-- Input Mask start -->
    <section id="input-mask-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> <span class="text-primary">{{ $product->name }}</span> Product Detail </h4>
                    </div>
                    <div class="card-body row">                           
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">description</label>
                                <h4 for="date">{{$product->description}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">price</label>
                                <h4 for="date">{{$product->price}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">quantity</label>
                                <h4 for="date">{{$product->quantity}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">category</label>
                                <h4 for="date">{{$product->category->name}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">status</label>
                                <h4 for="date">{{$product->status()}} </h4>
                            </div>
                         

                            


                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
