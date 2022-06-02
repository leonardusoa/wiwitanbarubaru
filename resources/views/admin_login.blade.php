@extends('layouts.sky_layout')

@push('library_css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
@endpush

@push('library_js')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
@endpush

@section('content')
<form method="POST" action="{{ route('login_process') }}" class="sky-form">
    @csrf
    <header>Access Login</header>
    <fieldset>

        @if ($errors->any())
            <section>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
        @endif

        @if(Session::has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

        <section>
            <label class="label">Email <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="email" id="email" autocomplete="off" value="">
            </label>
        </section>

        <section>
            <label class="label">Password <span class="requirement">*</span></label>
            <label class="input">
                <input type="password" name="password" id="password" autocomplete="off" value="">
            </label>
        </section>

        <footer>
            <input type="submit" value="Login" class="button">
        </footer>

    </fieldset>

</form>
@endsection

@push('page_css')
<style>
.body {
    max-width: 500px;
    margin: 0 auto;
    padding: 40px;
}
.sky-form footer {
    display: block;
    padding: 5px 5px 5px 5px;
    border-top: 1px solid rgba(0, 0, 0, .1);
    background: rgba(248, 248, 248, .9);
}
.noted {
    font-size: 14px;
    font-weight: 100;
}
.requirement {
    font-weight: bold;
    color: red;
}
</style>
@endpush

@push('page_js')
<script>
$(document).ready(function () {
//
})
</script>
@endpush