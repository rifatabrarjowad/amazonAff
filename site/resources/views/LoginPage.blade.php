@extends('Layout.app')
@section('content')
<div class="row justify-content-center d-flex mt-5 mb-5">
    <div class="col-md-10 card">
        <div class="row ">
            <div style="height: 450px" class="col-md-6 p-3 m-auto">
                <div class="">
                    <h1 class="text-center">Login</h1>
                </div>
                <form action="{{ route('donner.login' )}}  " method="post" class="m-5 loginForm">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input required name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Email" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required name="password" value="" type="password" class="form-control"
                            id="exampleInputPassword1" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-block btn-danger">
                            Login
                        </button>
                    </div>
                    <div class="form-group">
                        <a href="/signup" class="btn btn-block btn-outline-danger ">
                            Create Account
                        </a>
                    </div>
                    <div class="form-group">
                        <a href="#" class="btn btn-block btn-outline-danger ">
                            Forget Account
                        </a>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>


@endsection