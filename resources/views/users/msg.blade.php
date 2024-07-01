<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
  <title>Registration Form</title>
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    
.box{
  height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center
  
}
body{
  background: #ede6e6;
}
.div1,.btn{
background-color: rgb(57, 247, 114);
color: white
}
.fa{
  color: rgb(57, 247, 114);
    background: white;
    font-size: 3rem;
    border-radius: 50%;
    padding: 0.7rem;
}
.btn{
  border:none 
}
.box2{
  border-radius: 2px ;
}
form{
  box-shadow: 0px 0px 18px 0px;
}

  </style>
</head>
<body>
 <div class="container box ">

  <form class="row  g-3 justify-content-center"  action="/form/msg" method="post">
    @csrf
    {{-- <div class="col-md-12 div1 text-center m-0">
      <span>

        <i class="fa fa-check"></i></span>
      <p>Success</p>
    </div>
  <div class="col-md-12">
     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit
      . Blanditiis corporis officia saepe?</p>
      <button class="btn btn-danger" type="submit">Submit</button>
  </div>
   --}}
   <div class="card p-0 m-0
   " style="w">
    <div class=" div1 p-5 text-center m-0">
      <span>
        <i class="fa fa-check"></i></span>
      <p>Success</p>
    </div>
    <div class="card-body text-center box2">
     
      <p class="card-text">Congratulation, your account has been successfully created</p>
      <a href="/form/main" class="btn btn-primary">Continue</a>
    </div>
  </div>
</form>
 
 </div>
 <script>
  
 </script>
</body>
</html>