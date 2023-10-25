@extends('layouts.app')
@section('content')
    @foreach ($animals as $user)
<div class="animal">

        <ul class="catalog">
            <li>
                <h4>Имя:</h4>
                <h5>{{ $user->Name }}</h5>
            </li>
            <li>
                <h4>Вид:</h4>
                <h5>{{ $user->View }}</h5>
            </li>
            <li>
                <h4>Возраст:</h4>
                <div class="age"><h5>{{ $user->Age }}</h5></div>
            </li>
            <li>
                <h4>Информация</h4>
                <div class="info"><h5>{{ $user->Info }}</h5></div>
            </li>
        </ul>

</div>
    @endforeach
@endsection
