<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Excel upload and import</title>
  </head>
  <body>
    <h1>Excel upload and import</h1>
<div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>

@if(isset($errors) && $errors->any() )
<div class="alert alert-danger" role="alert">

  
  @foreach($errors->all() as $error)

  {{$error}}
  @endforeach
</div>
@endif
<form action="{{ route('addCSV') }}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">upload csv</label>
    <input type="file" class="form-control" id="exampleInputEmail1" name="file" class="btn btn-dark" aria-describedby="emailHelp" placeholder="upload csv">

  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>






    <button type="button" class="btn btn-dark">Download CSV</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>