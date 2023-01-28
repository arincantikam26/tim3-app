@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-warning" role="alert">
        <ul class="list-unstyled mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-warning" role="alert">
                <i class="bx bx-check"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-success" role="alert">
            <i class="bx bx-check"></i>
            {{ $data }}
        </div>
    @endif
@endif

@if (Session()->has('inputError'))
    <div class="alert alert-danger text-center" role="alert">
        <i class="bx bx-check"></i>
        {{ session('inputError') }}
    </div>
@endif
