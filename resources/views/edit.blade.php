<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
    
    
<div class="container"> 

    <a href="/read" class="fw-bold fs-5 btn btn-success"> <i class="fa fa-arrow-left"></i>Back</a>
    <center> <h3 class="text-success"><strong>Edit Name</strong></h3></center>
    <br>
    <br>
    <div class="row">
    <div class="col-md-12">
        <div class="card">
           
            <div class="card-body">
                <div class="row">
                <div class="col-md-12">
                    <form action="/update/{{ $lists->id }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
    
                        <div class="form-group">
                         
                            <label>Name</label>   
                            <input type="text" class="form-control" name="name" value="{{ $lists->name }}" >
                            <label>Middle</label>
                            <input type="text" class="form-control" name="middle" value="{{ $lists->middle}}">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ $lists->lastname}}">
                            
                        
                        </div>
                           
                            <button type="submit" onclick="return confirm('Dealer Has Been Updated')" class="btn btn-success">Update</button>
                            <a href="/read"  class="btn btn-danger">Cancel</a>
        
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    
    <br>
    <br>
    <br>
    
</body>
</html>