@if (session()->has('delete'))
    <div class="alert alert-danger">{{session('delete')}}</div>
@endif