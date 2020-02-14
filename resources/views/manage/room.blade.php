@extends('manage.layout')


@section('title', 'Management Dashboard')

@section('sidebar')
    @parent
    <li class="nav-item">
        <a class="nav-link " href="/manage">
          <span data-feather="home"></span>
          Dashboard 
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
        <a class="nav-link active" href="/manage/room">
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
<form class="needs-validation" novalidate>

    <div class="mb-3">
      <label for="username">Identifier</label>
      <div class="input-group">
        
        <input type="text" class="form-control" id="username" placeholder="Identifier" required>
        <div class="invalid-feedback" style="width: 100%;">
          required.
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="is lab?">is lab?</label>
      <input type="checkbox" class="form-control" id="is lab?" placeholder="yes" required>
      <div class="invalid-feedback">
        Please enter the is lab?.
      </div>
    </div>
    
    <div class="mb-3">
        <label for="capacity">capacity</label>
        <input type="text" class="form-control" id="capacity" placeholder="20" required>
        <div class="invalid-feedback">
          Please enter the capacity.
        </div>
      </div>

    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit New Entry</button>
  </form>


@endsection