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
        <a class="nav-link" href="/manage/professor">
          <span data-feather="file"></span>
          Professors
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">
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
      <input type="text" class="form-control" id="course" placeholder="MBATECH CS" required>
      <div class="invalid-feedback">
        Please enter the course.
      </div>
    </div>

    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit New Entry</button>
  </form>

  
<hr>
<hr>
<hr>
  <form action="/import-division-excel" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label >Select File to Import:</label>
            <div class="col-md-9">
            <input type="file" id="sample_file" name="sample_file" >
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <input class="form-control" type="submit" name="submit" value="Submit" >
    </div>
</div>
</form>

@endsection