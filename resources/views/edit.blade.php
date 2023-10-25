@extends('layouts.app')
@section('content')
<table border = "1">
        <tr style="border: 1px solid #000000">
           <td>ID</td>
           <td>Имя</td>
           <td>Вид</td>
           <td>Возраст</td>
           <td>Информация</td>
           <td>Редактировать</td>
        </tr>
        @foreach ($animals as $user)
        <tr style="border: 1px solid #000000">
           <td>{{ $user->id }}</td>
           <td>{{ $user->Name }}</td>
           <td>{{ $user->View }}</td>
           <td>{{ $user->Age }}</td>
           <td>{{ $user->Info }}</td>
           <td><a href = "{{"edit/".$user['id']}}" class="btn btn-primary">Изменить</a></td>
           <td><a href = "{{"delete/".$user['id']}}" class="btn btn-primary">Удалить</a></td>
        </tr>
        @endforeach
     </table>



@endsection
