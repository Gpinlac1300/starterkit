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
  


<style>
    html,
body,
.intro {
  height: 100%;
}

.gradient-custom-1 {
  /* fallback for old browsers */
  background: #cd9cf2;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1))
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
tbody td {
  font-weight: 500;
  color: #999999;
}
 </style>
@section('content')



<section class="intro">
    <div class="gradient-custom-1 h-100">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="table-responsive bg-white">
                <table class="table mb-0">
                    <a href="/add" class="btn btn-success btn-sm float-right " title="Add New Episode">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Name
                    </a>   
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Middle Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($lists as $item)
                    <tr>
                  
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->middle }}</td>
                      <td>{{ $item->lastname }}</td>
                      <td>
                      
                            
                            <a href="/edit/{{ $item->id }}" class="dropdown-item"><i class="fa fa-pencil"></i> EDIT</a>
  
                      </td>
                      <td> <form method="POST" action="/delete/{{$item->id}}" accept-charset="UTF-8">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="dropdown-item" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> DELETE</button>
                      </form></td>
                     
                      @endforeach
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>