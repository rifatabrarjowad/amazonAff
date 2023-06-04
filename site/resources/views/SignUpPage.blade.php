@extends('Layout.app')
@section('content')
<div class="row justify-content-center d-flex mt-5 mb-5">
    <div class="col-md-10 card">
        <div class="row ">
            <div style="height: auto" class="m-auto col-md-6 p-3">
                <h1 class="text-center">Sign Up</h1>
                @if(session()->has('error'))
                <h1 class="text-center">{{error}}</h1>
                @endif

                <form action=" {{route('donner.create')}}" method="post" class="m-5 loginForm">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input required="" name="fullName" value="" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name" />
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input required="" name="email" value="" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required="" name="userPassword" value="" type="password" class="form-control"
                            id="exampleInputPassword1" placeholder="Password" />
                    </div>

                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-block btn-danger">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection