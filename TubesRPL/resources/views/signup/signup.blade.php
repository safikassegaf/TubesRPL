@extends('Layout.signupLayout')

@section('login')
    <form action="/signup/form" method="POST">
        @csrf
        <h4>Sign Up</h4>
        <p>Choose role :</p>
        <div class="content">
            <input type="radio" name="role_id" id="student" value="1">
            <input type="radio" name="role_id" id="mentor" value="2">
            <label for="student" class="box first">
                <div class="course">
                    <span class="circle"></span>
                    <span class="subject">Student</span>
                </div>
                <span class="gbr"><img src="/images/student.png" alt=""></span>
            </label>
            <label for="mentor" class="box second">
                <div class="course">
                    <span class="circle"></span>
                    <span class="subject">Mentor</span>
                </div>
                <span class="gbr"><img src="/images/teacher.png" alt=""></span>
            </label>
        </div>
        
    
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn ">Get Started</button>
        </div>
       
        <p class="text-center">Already have an account?<a href="/login/student"> Sign in</a></p>
    </form>
@endsection>