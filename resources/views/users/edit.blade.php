<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Registration Form</title>
  <style>
.box{
  height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center
  
}
body{
  background-color:rgb(252, 166, 7); 
}

.card{
  border-top: 1rem solid red;
    border-radius: 13px;
    border-bottom: 1rem solid red;
    width: 50%
  
}
@media (max-width: 772px){
  .card{
    width: 100%
  }
  </style>
</head>
<body>
 <div class="container box ">
  <div class="card p-2 ">
  <form class="row  g-3" action="{{route('users.update', ['id' => $user->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
               <label for="validationServer02" class="form-label">First name</label>
               <input type="text" class="form-control @error('fname') is-invalid  @enderror" value="{{old('fname',$user->fname)}}"  name="fname">
               @error('fname')
               <p class="invalid-feedback">{{ $message }}</p>
               @enderror
    </div>
    <div class="col-md-6">
              <label for="validationServer02" class="form-label">Last name</label>
              <input type="text" class="form-control @error('lname') is-invalid  @enderror" value="{{old('lname',$user->lname)}}"  name="lname">
              @error('lname')
              <p class="invalid-feedback">{{ $message }}</p>
              @enderror
    </div>
     <div class="col-md-12">
              <label for="validationServerUsername" class="form-label">Username</label>
              <input type="text" class="form-control @error('username') is-invalid  @enderror" value="{{old('username',$user->username)}}"  name="username">
               @error('username')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror    
    </div>
     <div class="col-md-12">
            <label for="validationServer03" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid  @enderror" value="{{old('email',$user->email)}}"  name="email">
             @error('email')
            <p class="invalid-feedback">{{$message}}</p>
           @enderror
    </div>
       <div class="col-md-12">
           <label for="validationServer03" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid  @enderror" value="{{old('password',$user->email)}}"  name="password">
             @error('password')
               <p class="invalid-feedback">{{$message}}</p>
            @enderror
      </div> 
    <div class="col-12">
      <div class="form-check">
             <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
             <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
             </label>
      </div>
     </div>
    <div class="col-6">
        <button class="btn btn-danger" type="submit">Update</button>
     </div>
     <div class="col-6">
      <button href="{{route('users.display')}}" class="btn btn-danger text-right" type="Back">Back</button>
   </div>
  </form>
  </div>
 </div>
</body>
</html>