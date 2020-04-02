@extends('manage.layout')

<style>
  table, th, td {
  border: 1px solid black;
}
  </style>

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
        <a class="nav-link" href="/manage/integration">
          <span data-feather="layers"></span>
          Integrations
        </a>
      </li>
@endsection

@section('content')

<h4> TimeTable for {{$div}} </h4>
<table>
  <tr>
    <th>Time </th>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th>
    <th>Saturday</th>
  </tr>
  @foreach ($rows as $row) 
  <tr>
    <td>{{$row->timeslot}}</td>
    <td>{{$row->Monday}}</td>
    <td>{{$row->Tuesday}}</td>
    <td>{{$row->Wednesday}}</td>
    <td>{{$row->Thursday}}</td>
    <td>{{$row->Friday}}</td>
    <td>{{$row->Saturday}}</td>
  </tr>
  @endforeach

<table
@endsection