<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\validator;


class FormController extends Controller
{
   
    public function show(){
     return view('users.form');
    }

    public function display(){
      $users = User::get(); // Fetch all users from the database
      return view('users.display', compact('users'));
            }


    public function store(Request $request){
    $request->validate([
        'fname' => 'required',
         'lname'=>'required',
          'username'=>'required',
          'email'=>'required',
          'password'=>'required|min:4',
           ]);

    $user=new User();
    $user->fname =$request->fname;  
    $user->lname =$request->lname;  
    $user->username =$request->username;  
    $user->email =$request->email;  
    $user->password =$request->password;  
    $user->save();

//  return  view('users.msg');;

return redirect()->route('users.display');
// return redirect()->route('users.msg');
  

  }
  public function edit($id){
    
  
      $user = User::findOrFail($id);

    return view('users.edit',['user'=>$user]);
    // $product =Product::findOrFail($id);
    //    return view('products.edit',[
    //     'product'=> $product
    //    ]);
  }

public function update(Request $request, $id){
  $user = User::findOrFail($id);
  $request->validate([
    'fname' => 'required',
     'lname'=>'required',
      'username'=>'required',
      'email'=>'required',
      'password'=>'required|min:4',
       ]);
       
       $user->fname =$request->fname;  
       $user->lname =$request->lname;  
       $user->username =$request->username;  
       $user->email =$request->email;  
       $user->password =$request->password;  
       $user->save();

       $user->fname =$request->fname;  
    $user->lname =$request->lname;  
    $user->username =$request->username;  
    $user->email =$request->email;  
    $user->password =$request->password;  
    $user->save();  
    return redirect()->route('users.display');
}
public function destroy($id){
  $user = User::findOrFail($id);
  $user ->delete();
  return back();
}
}

