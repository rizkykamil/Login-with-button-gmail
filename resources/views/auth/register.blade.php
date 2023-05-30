@include('partials._header')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Register</h5>
        </div>
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

    <div class="">
        <div>
            <hr>
            <p class="text-center">
                OR  Register WITH
            </p>
            <a href="{{ route('register.google') }}" class="btn btn-danger">Register with Google</a>
        </div>
    </div>
</div>


@include('partials._js')
