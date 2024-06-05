@foreach ($users as $user)
    <h1> {{ $user['name'] }} </h1>
    <h2> {{ $user['age'] }} </h2>
    @if ($user['age'] < 52)
        <h3> {{ $user['name'] }} don't manage team </h3>
    @endif
    <hr>
@endforeach

@copyright {{ date('m-d-Y') }}
