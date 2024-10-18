<?php
include('include/header.php');
?>
 <video class="bg-video" autoplay muted loop>
        <source src="video.mp4" type="video/mp4">
        
    </video>
    <div class="overlay">
        <div class="container mt-5">
    <h2 class="text-center mb-4">Registeration for Doctors</h2>
    <form id="bookingForm" action="configuration/config1.php" method="post" >
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
                <label for="experience" class="form-label">experience</label>
                <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter your location" required>
            </div>
             
               
            
             <div class="col-md-6">
                <label for="field" class="form-label">Field</label>
                <input type="text" class="form-control" name="field" id="field  " placeholder="Enter your landmark" required>
            </div>
        </div>

       <!-- <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter your address" ></textarea>
        </div> -->

        <div class="row mb-3">
          <div class="col-md-12">

        <button type="submit" href="" class="btn w-100 mb-3" style="background-color:#6E4525;color: white;">Register</button>
    </div></div>

    </form>
</div>
</div>
</div>

 <?php
    include('include/footer.php');
    ?>