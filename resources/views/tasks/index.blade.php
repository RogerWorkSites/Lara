@extends('layouts.app')

@section('content')
<h2>All Task</h2>
<!-- Bootstrap шаблон... -->
<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
</div>
<a href="{{route('tasks.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Create new Task</a>
<!-- TODO: Текущие задачи -->
@endsection