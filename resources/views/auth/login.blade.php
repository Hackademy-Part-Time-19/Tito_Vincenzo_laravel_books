<x-layout>

    <x-slot:title>Login</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="/login" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1  style="color:white; text-shadow:2px 2px 2px black;" class="mb-5">Accedi</h1>
                    <div class="mb-3">
                        <label  style="color:white; text-shadow:2px 2px 2px black;" for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    @error('email') <span class=" small text-danger">{{$message}}</span> @enderror
                    <div class="mb-3">
                        <label style="color:white; text-shadow:2px 2px 2px black;" for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    @error('password') <span class=" small text-danger">{{$message}}</span> @enderror
                   <div class="mt-2" ><button style="background-color:#202020"  type="submit" class="btn btn-secondary">Login</button></div> 
                </form>
            </div>
        </div>
    </div>

</x-layout>
