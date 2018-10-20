@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger title-message">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success title-message">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger title-message">
        {{session('error')}}
    </div>
@endif