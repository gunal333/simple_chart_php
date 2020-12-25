<!doctype html>
<html lang="en">

<head>
    <title>student marks</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="C:\Users\HP\node_modules\chart.js\dist\Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha256-nZaxPHA2uAaquixjSDX19TmIlbRNCOrf5HO1oHl5p70=" crossorigin="anonymous"></script>
    <div class="container bg-light pt-5">
    <form action="/dataview" method="POST">
    @csrf 
    <div class="container bg-primary border border-warning">
       <center><h1>Student marks</h1>
        <div class="form-group row justify-content-center pt-3">
            <label for="user" class="col-sm-2">Username</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="user" placeholder="enter the student name" >
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="pwd" class="col-sm-2">Mark 1</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="m1" placeholder="enter your mark 1" >
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="pwd" class="col-sm-2">Mark 2</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="m2" placeholder="enter your mark 2" >
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="pwd" class="col-sm-2">Mark 3</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="m3" placeholder="enter your mark 3" >
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="pwd" class="col-sm-2">Mark 4</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="m4" placeholder="enter your mark 4" >
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="pwd" class="col-sm-2">Mark 5</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="m5" placeholder="enter your mark 5" >
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="pwd" class="col-sm-2">Mark 6</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="m6" placeholder="enter your mark 6" >
            </div>
        </div>
        
        <div class="form-group row justify-content-center">
                 <input type="submit" name="login" class="btn btn-warning">
        </div>
       </center>
    </div>
    </form>
    </div>
</body>

</html>