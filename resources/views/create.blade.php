
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
    
    <Center>
        <h3 class="text-success"><strong>Add name</strong></h3>
        </Center>
    <div class="container">
        
        <a href="/read" class="fw-bold fs-5 btn btn-success"> <i class="fa fa-arrow-left"> </i>Back</a>
        <br>
        <br>
        <div class="row">
    
      <div class="col-12">
    
        <div class="card">
           
            <div class="card-body">
    <form action="/create" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
            <br>
            <br>
          
    
        </div>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Middle</label></br>
        <textarea type="text" name="middle" id="middle" class="form-control" ></textarea></br>
        <label>Last Name</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control" multiple ></br>
        <input type="submit" value="Save" onclick="return confirm('Video Has Been Created')" class="btn btn-success">
    <br>
    <br>
    <br>
    <br>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>