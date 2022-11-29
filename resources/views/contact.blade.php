<html>
<head>
    <title>Contact</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header>
    <nav class="contactnav">
      <div class="container-fluid">
        <img src="img/Panda.png" height="11%" width="4%">
        <a class="navhome" href="{{ route ('home') }}">Pandamusic</a>
      </div>
    </nav>
  </header>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold" id="name">
      Contact
    </div>
    <div class="card-body">
      <form name="contact-form" id="contact-form" method="post" action="{{url('contact_form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="firstname" name="firstname" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Lastname</label>
          <input type="text" id="lastname" name="lastname" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input type="text" id="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" re-quired=""></textarea>
        </div>
        <button type="submit" class="btn">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>