<?php
include('include/header.php');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Check Availability</h2>
    <form id="bookingForm" action="configuration/config.php" method="post" >
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstname"placeholder="Enter your first name" required>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Enter your last name" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
            </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
                <label for="location" class="form-label">Location</label>
                <input type="tel" class="form-control" name="location" id="location" placeholder="Enter your location" required>
            </div>
             
               
            
             <div class="col-md-6">
                <label for="landmark" class="form-label">Landmark</label>
                <input type="text" class="form-control" name="landmark" id="landmark" placeholder="Enter your landmark" required>
            </div>
        </div>

       <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter your address" ></textarea>
        </div>


        <button type="submit" href="" class="btn w-100 mb-3" style="background-color:#6E4525;color: white;">Book Appointment</button>

    </form>
</div>
 <?php
    include('include/footer.php');
    ?>