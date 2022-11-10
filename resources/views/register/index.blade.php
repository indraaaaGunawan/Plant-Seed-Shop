@extends('layout/main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">From Register</h1>
          <form action="/register/store" method="post">
              @csrf
            <div class="form-floating">
                <label for="name">Name</label>
                <input type="text" name='name' class="form-control" id="name" placeholder="">
            </div>
            <div class="form-floating mt-2">
                <label for="email">Email</label>
                <input type="email" name='email' class="form-control" id="email" placeholder="">
            </div>
            <div class="form-floating mt-2">
                <label for="alamat">Alamat</label>
                <input type="text" name='alamat' class="form-control" id="alamat" placeholder="">
            </div>
            <div class="form-floating mt-2">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <input type="enum" name='jeniskelamin' class="form-control" id="jeniskelamin" placeholder="">
            </div>
            <div class="form-floating mt-2">
                <label for="notlp">No Tlp</label>
                <input type="text" name='notlp' class="form-control" id="notlp" placeholder="">
            </div>
            <div class="form-floating mt-2">
                <label for="username">Username</label>
                <input type="text" name='username' class="form-control" id="username" placeholder="">
            </div>
            <div class="form-floating mt-2">
                <label for="password">Password</label>
              <input type="password" name='password' class="form-control" id="Password" placeholder="">
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
          </form>
          <small class="d-block text-center mt-3">Already Register? <a href="/login">Login</a></small>
          <p class="mt-5 mb-3 text-center">&copy; Plant Seed Shop-2022</p>
        </main>
    </div>
</div>
@endsection