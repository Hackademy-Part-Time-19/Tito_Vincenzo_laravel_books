<x-layout>
<x-slot:title>Home</x-slot>
  <div style="position: absolute; top:100px; right:200px; background-color:rgba(255, 255, 255, 0.693); width:400px;" >
  <h3 style="font-size: 60px;color:#5C0B0B;text-shadow:2px 2px 2px black;" class="text-center">Benvenuto 
   @auth {{Auth::user()->name}}@endauth <br> nella <br> tua <br> libreria</h3>
  <button style="background-color: #B13E0C; width:330px; margin:35px; height:45px; border-radius:20px; margin-top: 30px; "><a style="font-size:20px; font-weight:600; color:white;text-shadow:2px 2px 2px black;" class="dropdown-item" href="{{ route('register') }}">Registrati</a></button>
  </div>
  
</x-layout>