@extends('layouts.app')
@section('content')
<form action="{{ url('/updatezoo/'.$animals->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Имя</label>
                            <input type="text" name="Name" value="{{$animals->Name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Вид</label>
                            <input type="text" name="View" value="{{$animals->View}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Возраст</label>
                            <input type="text" name="Age" value="{{$animals->Age}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Описание</label>
                            <input type="text" name="Info" value="{{$animals->Info}}" class="form-control input-info">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </div>

                    </form>
@endsection
