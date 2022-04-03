@extends('Layout.loginLayout')

@section('login')
<form action="/login" method="POST">
    @csrf
    <h4>{{ $namaRole }} signup</h4>
    <div class="mb-3 mt-4 row">
        <div class="col">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email Adress" value="{{ old('email') }}">
        </div>
    </div>
    <div class=" mb-4 row">
        <div class="col">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
    </div>
    <div class=" mb-4 row ">
        <div class="col">
            <input class="form-control" type="password" id="passwordconf" name="passwordconf" placeholder=" Re-enter Password">
        </div>
    </div>
    <div class="d-grid gap-2 col-12 mx-auto">
        <button type="submit" class="btn ">Get Started</button>
    </div>
    <input type="text" hidden name="role_id" id="role_id" value="{{$role_id}}">
    <p class="text-center">Already have an account? <a href="/login/student">Sign in</a></p>
</form>
@endsection