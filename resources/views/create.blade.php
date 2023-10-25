@extends('layouts.app')
@section('content')
<form method="POST" action="create">
	{{ csrf_field() }}
    <div class="form-group mb-3">
        <label for="">Имя</label>
        <input type="text" name="Name" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Вид</label>
        <input type="text" name="View" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Возраст</label>
        <input type="number" name="Age" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Описание</label>
        <input type="text" name="Info" class="form-control input-info">
    </div>
    <div class="form-group mb-3">
        <input type="submit" class="btn btn-primary" value="Добавить">
    </div>





</form>
@endsection
