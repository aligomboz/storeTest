@extends('layouts.admin')
@section('content')

<div class="content-body">
    <!-- Input Mask start -->
    <section id="input-mask-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> <span class="text-primary">{{ $user->full_name }}</span> Customer </h4>
                    </div>
                    <div class="card-body row">                           
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">first name</label>
                                <h4 for="date">{{$user->first_name}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">last name</label>
                                <h4 for="date">{{$user->last_name}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">email</label>
                                <h4 for="date">{{$user->email}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">mobile</label>
                                <h4 for="date">{{$user->mobile}} </h4>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">status</label>
                                <h4 for="date">{{$user->status()}} </h4>
                            </div>
                         

                            


                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
