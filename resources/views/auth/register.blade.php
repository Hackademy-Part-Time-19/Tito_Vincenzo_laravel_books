<x-layout>

    <x-slot:title>Register</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-4" action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 style="font-size: 60px;color:#5C0B0B;text-shadow:2px 2px 2px black;" class="mb-3">Registrati</h1>
                    <div class="mb-3">
                        <label   for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label   for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    @error('email')
                        <span class=" small text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label   for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    @error('password')
                        <span class=" small text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label   for="password_confirmation" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="password_confirmation">
                    </div>
                    @error('password_confirmation')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mt-2">
                        <button style="background-color:#202020" type="submit" class="btn btn-secondary">
                            Registrati
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
