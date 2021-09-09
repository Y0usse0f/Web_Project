@if($errors->any())
<div class="alert alert-danger">
    <h4>There is an error!</h4>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
    {{-- @php
        session()->forget('success');
    @endphp  --}}
</div>
@endif
