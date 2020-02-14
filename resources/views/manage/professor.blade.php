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
        <a class="nav-link active" href="/manage/professor">
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

<form class="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName">First name</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName">Last name</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
        <div class="invalid-feedback">
          Valid last name is required.
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="username">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control" id="username" placeholder="Username" required>
        <div class="invalid-feedback" style="width: 100%;">
          Your username is required.
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="email">Email <span class="text-muted">(Optional)</span></label>
      <input type="email" class="form-control" id="email" placeholder="you@example.com">
      <div class="invalid-feedback">
        Please enter a valid email address for shipping updates.
      </div>
    </div>

    <div>
      LIST ASSIGNED LECTURES !
    </div>

    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit"> Submit </button>
  </form>

@endsection