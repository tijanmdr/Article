@if ($errors->any())
    <ul>
        @foreach($errors->all() as $er)
            <li>{{ $er }}</li>
        @endforeach
    </ul>
@endif