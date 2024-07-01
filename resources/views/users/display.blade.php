<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
  <title>Registration Form</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .box {
      padding: 20px;
    }

    table {
      width: 100%;
      border: 2px solid black;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: white;
    }

    thead {
      background: black;
      color: white;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border: 1px solid black;
    }

    .text-right {
      text-align: right;
      margin-bottom: 10px;
    }

    .btn {
      margin-right: 10px;
    }

    @media (max-width: 768px) {
      table {
        overflow-x: auto;
        display: block;
      }

      th, td {
        white-space: nowrap;
      }
    }
  </style>
</head>
<body>
 <div class="container box ">

 <form class="row my-5 g-3 justify-content-center"  action="" method="post">
     @csrf 
     @method('PUT') 
     <div class="text-right">
      <a href="{{route('users.form')}}" class="btn btn-dark ">create</a>
    </div>
 <table>
  <thead class="" >
         <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Action</th>
         </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
       
         <td>{{ $user->id }}</td>
         <td>{{ $user->fname }}</td>
         <td>{{ $user->lname }}</td>
         <td>{{ $user->username }}</td>
         <td>{{ $user->password }}</td>
         <td>{{ $user->email }}</td>
         <td>
           <a href="{{ route('users.edit', $user->id)}}" class="btn btn-danger"> Edit</a>
           <a href="{{ route('users.destroy', $user->id)}}" class="btn btn-danger"> Delete</a>
         </td>
        
    </tr>     
   @endforeach
  </tbody>
 </table>
   
</form>
 
 </div>
 <script>
  
 </script>
</body>
</html>