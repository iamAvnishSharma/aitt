@extends('manage.layout')


@section('title', 'Management Dashboard')

@section('sidebar')
    @parent
    <li class="nav-item">
        <a class="nav-link active" href="#">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/manage/professor">
          <span data-feather="file"></span>
          Professors
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/manage/studentgroup">
          <span data-feather="shopping-cart"></span>
          Student<span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/manage/room">
          <span data-feather="users"></span>
          Rooms
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/manage/subject">
          <spans data-feather="bar-chart-2"></spans>
          Cources/Subjects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="layers"></span>
          Integrations
        </a>
      </li>
@endsection

@section('content')

<h4> Add/Edit Data </h4>
<div class="card-deck">
<a href="/manage/studentgroup"> <div class="card" style="width: 18rem;"> <div class="card-body">Student Group</div> </div></a>
<a href="/manage/faculty"><div class="card"style="width: 18rem;"> <div class="card-body">Faculty</div></div></a>
<a href="/manage/room"><div class="card"style="width: 18rem;"> <div class="card-body">Room</div></div></a>
<a href="/manage/subjects"><div class="card"style="width: 18rem;"> <div class="card-body">Course/Subjects</div></div></a>
</div>
@endsection