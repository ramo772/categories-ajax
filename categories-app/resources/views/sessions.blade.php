<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
        {{-- <label for="fname" class="error">{{ $errors->first('fname') }}</label> --}}
    @endif
    {{-- {{ddd('omar')}} --}}
</div>
