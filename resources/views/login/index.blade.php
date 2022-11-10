@extends('layout/main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin mt-8">
            <h1 class="h3 mb-3 fw-normal text-center">Sign In</h1>
          <form>
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="Username">
            </div>
            <div class="form-floating mt-2">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-3">Belum Punya akun? <a href="/tanaman">Register Now!</a></small>
          <p class="mt-5 mb-3 text-center">&copy; Plant Seed Shop-2022</p>
        </main>
    </div>
</div>
@endsection