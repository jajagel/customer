@include('partials.header')
<div class="trimmed-cover" style="width: 100%; background-color:#009879; ">
  <div class="container">
<div class="registration-form">
<div style="max-width:50rem;" class="center" >


<form action="/store" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror

    <h3 style="margin-bottom:20px;">Create an Account</h3>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input 
      type="text" 
      class="form-control item" 
      aria-describedby="emailHelp"
      name="name">
      
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email Address</label>
      <input 
      type="email" 
      class="form-control item" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" 
      class="form-control item" 
      id="exampleInputPassword1"
      name="password">
    </div>

    <div class="mb-3">
      <label for="confirmpassword" class="form-label">Confirm Password</label>
      <input type="password" 
      class="form-control item" 
      id="exampleInputPassword1"
      name="password_confirmation">
    </div>
    <div class="row">
    <div id="emailHelp" class="form-text col-lg-6">Already have an account? <a style=" color: #009879;" href={{"/login"}}>Sign In</a></div>
    <div align="right" class= "col-lg-6" ><button type="submit" class="btn mb-3 create-account" style="color:white; background-color:#009879;" >Submit</button></div>
    </div>
  </form>
  
</div>