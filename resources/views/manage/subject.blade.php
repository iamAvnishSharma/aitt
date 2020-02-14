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
        <a class="nav-link" href="/manage/room">
          <span data-feather="users"></span>
          Rooms
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/manage/subject">
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
      <label for="course">course</label>
      <input type="text" class="form-control" id="course" placeholder="MBATECH CS, 0 for common" required>
      <div class="invalid-feedback">
        Please enter the course.
      </div>
    </div>

    <div class="mb-3">
        <label for="year">year</label>
        <input type="text" class="form-control" id="year" placeholder="1" required>
        <div class="invalid-feedback">
          Please enter the year.
        </div>
      </div>

      <div class="mb-3">
        <label for="credit">credit</label>
        <input type="text" class="form-control" id="credit" placeholder="1" required>
        <div class="invalid-feedback">
          Please enter the credit.
        </div>
      </div>

      <div class="mb-3">
        <label for="Lab">Lab</label>
        <input type="checkbox" class="form-control" id="Lab" placeholder="1" required>
        <div class="invalid-feedback">
          Please enter the Lab.
        </div>
      </div>

      <div class="mb-3">
        <label for="Software requirment">Software requirment</label>
        <input type="text" class="form-control" id="Software requirment" placeholder="AUTOCAD" required>
        <div class="invalid-feedback">
          Please enter the Software requirment.
        </div>
      </div>

    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit New Entry</button>
  </form>


@endsection