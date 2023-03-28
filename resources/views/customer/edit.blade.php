      <!-- Modal -->
      <div class="modal fade" style="border-radius: 30px;" id="editModal{{$customer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="border-radius: 30px;">
          <div class="modal-content" style="border-radius: 30px;">
            <div class="modal-header" style="border-radius: 30px 30px 0px 0px; color: white; background-color:#009879;">
              <h5 class="modal-title ms-2" id="exampleModalLabel">Update Customer #{{$customer->id}}</h5>
            </div>
            <div class="modal-body" style="padding: 30px;">
                <form action="{{url('update/customer/'.$customer->id)}}" method="POST">
                      @csrf
                      
                      @error('email')
                          <p>Invalid Account</p>
                      @enderror
                      <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input 
                        value="{{$customer->lastName}}"
                        type="text" 
                        class="form-control item" 
                        aria-describedby="emailHelp"
                        name="lastName" required> 
                      </div>
                      <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input 
                        value="{{$customer->firstName}}"
                        type="text" 
                        class="form-control item" 
                        aria-describedby="emailHelp"
                        name="firstName" required> 
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input 
                        value="{{$customer->email}}"
                        type="email" 
                        class="form-control item" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        name="email" required>
                      </div>

                      <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input 
                        value="{{$customer->contactNumber}}"
                        type="text" 
                        class="form-control item" 
                        aria-describedby="emailHelp"
                        name="contactNumber" required> 
                      </div>

                      <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input 
                        value="{{$customer->address}}"
                        type="text" 
                        class="form-control item" 
                        aria-describedby="emailHelp"
                        name="address" required> 
                      </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class=" mb-2 button" style="background-color:gray;" data-bs-dismiss="modal" >Close</button>
              <button type="submit" class=" mb-2 button" > Update </button>
            </div>
            </form>
          </div>
        </div>
      </div>