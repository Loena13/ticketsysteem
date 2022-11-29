<html>
<head>
    <title>Add event</title>
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
      Add event
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Eventname</label>
          <input type="text" id="event_name" name="event_name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Photo</label>
          <input type="text" id="photo" name="photo" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Eventstart</label>
          <input type="date" id="event_start" name="event_start" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Eventend</label>
          <input type="date" id="event_end" name="event_end" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Max Tickets</label>
          <input type="int" id="max_tickets" name="max_tickets" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Location</label>
          <input type="text" id="location" name="location" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Price</label>
          <input type="int" id="price" name="price" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Preorder</label>
          <input type="int" id="preorder_price" name="preorder_price" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" re-quired=""></textarea>
        </div>
        <button type="submit" class="btn" id="submint">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
