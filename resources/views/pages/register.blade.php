@extends('template.master')
@section('title', 'Register Page')
@section('content')
<div class="form-structor">
    <form action="/register" method="POST">
        @csrf
        <div class="signup">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <div class="form-holder">
                <input type="text" class="input" placeholder="Fullname" name="fullname"/>
                <input type="email" class="input" placeholder="Email" name="email"/>
                <input type="password" class="input" placeholder="Password" name="password"/>
            </div>
            <button type="submit" class="submit-btn">Sign up</button>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                <div class="form-holder">
                    <input type="email" class="input" placeholder="Email" />
                    <input type="password" class="input" placeholder="Password" />
                </div>
                <button class="submit-btn">Register</button>
            </div>
        </div>
    </form>
</div>
@endsection