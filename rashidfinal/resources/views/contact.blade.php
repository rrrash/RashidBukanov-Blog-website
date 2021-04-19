@extends('layout')
@section('title')Contact Page @endsection
@section('main_content')
    <!-- валидация ошибки -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>   <!-- перебираем ошибки и выводим-->
                @endforeach
            </ul>
        </div>
    @endif

    <form  action="/contact/check" method="post">
    @csrf
        <div class="p-4 p-md-5 mb-4 text-white">
            <div class="col-md-6 px-0">
                <h1 class="display-4 ">This is Contact Page</h1>

            </div>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3 text-white">Contact with me</h4>
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label text-white">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label text-white">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is requiredfi.
                        </div>
                    </div>



                    <div class="col-12">
                        <label for="email" class="form-label text-white">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>



                    <div class="col-12">
                        <label for="cc-cvv" class="form-label text-white">Message</label>
                        <textarea type="text" class="form-control" id="message" name="message" placeholder="" required=""></textarea>

                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Send </button>
            </form>
        </div>
        <!-- My name is Rashid-->
        <!-- My name is Rashid Hellooo-->
    </form>
    <br>
    <h1 class="form-label text-white">All reviews</h1>
    @foreach($contacts as $el)
    <div class="form-label text-white">
    <h6>{{ $el->firstName}}</h6> 
    <h6>{{ $el->lastName }}</h6> 
    <b>{{ $el->email}}</b>
    <h3>{{ $el->message}}</h3>
    <br>
    
   
    </div>
    @endforeach
@endsection
