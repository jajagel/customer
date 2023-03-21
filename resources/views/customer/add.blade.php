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
                        type="text" 
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