@include('partials.header')
<x-nav/>


<div class="container center">

      <!-- Button trigger modal -->
      <button type="button" class=" mb-4 button" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
        Add Customer
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="color: white; background-color:#009879;">
              <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
            </div>
            <div class="modal-body">
                <form action="/store/customer" method="POST">
                      @csrf
                      
                      @error('email')
                          <p>Invalid Account</p>
                      @enderror
                      <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input 
                        type="text" 
                        class="form-control item" 
                        aria-describedby="emailHelp"
                        name="lastName" required> 
                      </div>
                      <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input 
                        type="text" 
                        class="form-control item" 
                        aria-describedby="emailHelp"
                        name="firstName" required> 
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input 
                        type="email" 
                        class="form-control item" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        name="email" required>
                      </div>

                      <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input 
                        type="number" 
                        class="form-control item" 
                        aria-describedby="emailHelp"
                        name="contactNumber" required> 
                      </div>

                      <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input 
                        type="text" 
                        class="form-control item" 
                        aria-describedby="emailHelp"
                        name="address" required> 
                      </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class=" mb-4 button" style="background-color:gray;" data-bs-dismiss="modal" >Close</button>
              <button type="submit" class=" mb-4 button" > Add </button>
            </div>
            </form>
          </div>
        </div>
      </div>
   
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{session::get('success')}}
    </div>
    @endif
    @if(Session::has('deleted'))
<div class="alert alert-danger" role="alert">
    {{session::get('deleted')}}
    </div>
    @endif

    

    
                <table id="tbl" class="content-table center" >
                    <thead><tr>
                        <!--<th>#</th>-->
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr></thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->lastName}}</td>
                            <td>{{$customer->firstName}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->contactNumber}}</td>
                            <td>{{$customer->address}}</td>
                            <td>
                            <a href="#" data-toggle="modal" data-target="" class="btn btn-outline-primary btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                                <a href="delete/{{$customer->id}}" class="btn btn-outline-danger btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg>
                                </a>
                            </td>
                           
                        @endforeach
                    </tbody>
                </table>   



  @include('partials.footer')