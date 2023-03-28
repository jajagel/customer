@include('partials.header')
<div class="trimmed-cover" style="width: 100%; background-color:#009879; ">

  <div class="container">
<div class="registration-form">
<div style="max-width:50rem;" class="center" >

<div>
<form action="/login/process" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror
    <h3 style="margin-bottom:20px;">Login Page</h3>
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
    <div class="row">
    <div id="emailHelp" class="form-text col-lg-6">Don't have an account? <a class="hoove" style=" color: #009879;" href={{"/register"}}>Sign Up</a></div>

    <div align="right" class= "col-lg-6" ><button type="submit"  class="btn mb-3 create-account" style="color:white; background-color:#009879;" >Submit</button></div>
</div>

  </form>
</div>
  </div>
 
    </div>
    
</div>
</div>

 