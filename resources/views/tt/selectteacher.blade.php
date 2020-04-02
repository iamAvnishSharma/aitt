@extends('manage.layout')


@section('title', 'Management Dashboard')

@section('sidebar')
    @parent
    <li class="nav-item">
        <a class="nav-link" href="#">
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
        <a class="nav-link" href="/manage/integration">
          <span data-feather="layers"></span>
          Integrations
        </a>
      </li>
@endsection

@section('content')

<h4> Select Teacher </h4>

<form action="/tt/faculty">
  Teacher: <select id="div" name="div">
          @foreach ($divs as $div) 
            <option value="{{$div->teacher}}">{{$div->teacher}}</option>
          @endforeach
      </select>
  <input type="submit">
</form>

@endsection