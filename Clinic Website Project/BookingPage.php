<?php 
   require_once("Segments/bookinghead.php")
   
   ?>
<body>
   <main>
      <form id="form1" method="post" action="">
         <p>Patient ID: <input name="PID"  value="" type="text" required></p>
         <label for="Date">Booking Date:</label>
         <input type="date" id="chooseDate" name="Date"min="today" max="2024-12-31" required><br>
         <br>
         <div class="container">
            <p>Time Slots: </p>
            <br>
            <div class="Options">
               <input type="checkbox" id="morning" name="time" value="Morning">
               <label> 9AM-12PM </label><br>
               <input type="checkbox" id="afternoon" name="time" value="Afternoon">
               <label> 12PM-3PM </label><br>
               <input type="checkbox" id="evening" name="time" value="Evening">
               <label> 3PM-6PM </label><br>
            </div>
         </div>
         <br>
         <div class="Reason">
            <label> Appointment Reason </label>
            <select id="Appointment" name = "selection" required>
               <option value="PS">Please Select </option>
               <option value="CVS">Childhood Vaccination Shots</option>
               <option value="IS">Influenza Shot</option>
               <option value="CBS">Covid Booster Shot</option>
               <option value="BT">Blood Test</option>
            </select>
         </div>
         <br>
         <div id="Descriptions" >
            <div class="PS details">
               <p></p>
            </div>
            <div class="CVS details" hidden>
               <p>A disclaimer that multiple vaccines are normally 
                  administered in combination and may cause the child to be sluggish 
                  or feverous for 24-48 hours afterwards.  
               </p>
            </div>
            <div class="IS details" hidden>
               <p>The best time to get vaccinated is in April and May each 
                  year for optimal protection over the winter months.  
               </p>
            </div>
            <div class="CBS details" hidden>
               <p> Advice that everyone should arrange to have 
                  their third shot as soon as possible and adults over the age of 30 
                  should have their fourth shot to protect against new variant strains. 
               </p>
            </div>
            <div class="BT details" hidden>
               <p>That some tests require some fasting ahead of time and 
                  that a staff member will advise them on this prior to the 
                  appointment. 
               </p>
            </div>
         </div>
         <button type="submit" class = "sbmt ">Submit<button>
         <button formnovalidate>Submit without validation</button> 
      </form>
   </main>
   <?php 
      require_once("Segments/bookingfoot.php")
      
      ?>