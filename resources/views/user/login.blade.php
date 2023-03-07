@include('partials.header')
<div style="max-width:50rem;" class="center" >
<h3>Login Page</h3>

<form action="/login/process" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input 
      type="email" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password">
    </div>
   

    <button type="submit" class="btn mb-3" style="color:white; background-color:#009879;" >Submit</button>
    <p><a class="hoove"  href={{"/register"}}>New User? Sign up here.</a></p>
  </form>

  </div>
  