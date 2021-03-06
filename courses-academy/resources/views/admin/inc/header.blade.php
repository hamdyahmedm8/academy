
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('front.homepage')}}" target="_blank">Home Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.cats.index')}}">Categoties </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.trainers.index')}}">Trainers </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.courses.index')}}">Courses </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.students.index')}}">Students </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.logout')}}">logout </a>
      </li>
    </ul>
 
  </div>
</nav>
