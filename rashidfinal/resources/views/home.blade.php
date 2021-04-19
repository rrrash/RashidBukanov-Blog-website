@extends('layout')
@section('title')Home Page @endsection
@section('main_content')

    <div class="p-4 p-md-5 mb-4 text-white">
        <div class="col-md-6 px-0">
            <h1 class="display-4 ">Here I am writing a blog about what places I have visited</h1>
            <p class="lead my-3">My name is Rashid Bukanov, and I made this blog for lab number 3. Next I will show you some photos.</p>
        </div>
    </div>
    <div class="album py-5 bg-black">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <img src="https://ticketon.kz/files/media/shymbulak-5121.jpg" alt=""></svg>
                        <div class="card-body">
                            <p class="card-text">Recently I was at a ski resort called Shymbulak, it is very cool and atmospheric, to find out more, click on the card</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">4 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <img src="http://static.zakon.kz/img/040573/040573281.JPG" alt=""></svg>
                        <div class="card-body">
                            <p class="card-text ">I was recently in a place called Lake Kaindy is a sunken forest, it is very cool and atmospheric there, to find out more, click on the card</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">30 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWkXnNg9tB1g7vHRI_LF9bR27a4blvs1G6nA&usqp=CAU" alt=""></svg>

                        <div class="card-body">
                            <p class="card-text" >Recently I was on the beach, it is very cool and atmospheric, to find out more, click on the card</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">50 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My name is Rashid-->
@endsection
