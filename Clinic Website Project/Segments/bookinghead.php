<!DOCTYPE html>
<html>
   <head>
      <title>s3944964_A2</title>
      <meta charset='utf-8'/>
      <link rel="stylesheet" type="text/css" href="style.css"/>
      <script>
         function formsubmit() {
             document.getElementById("form1").submit();
         }
         
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
      <script src="validate.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
         $("select").change(function(){
         $(this).find("option:selected").each(function(){
         var optionValue = $(this).attr("value");
         if(optionValue){
             $(".details").not("."+ optionValue).hide();
             $("." + optionValue).show();
         }   else
             {
                 $(".details").show();
             }
         })
         });
         
         }).change()
      </script>
      <script>
         var today = new Date();
         var dd = today.getDate();
         var mm = today.getMonth()+1;
         var yyyy = today.getFullYear();
         if(dd<10){
         dd='0'+dd
         }
         if(mm<10){
         mm='0'+mm
         }
         
          today = yyyy+'-'+mm+'-'+dd;
         document.getElementById("chooseDate").setAttribute("min", today);
      </script>
   </head>
   <header>
      <img src="https://www.clipartmax.com/png/full/40-401636_clipartbest-com-7to9x9-clipart-blue-plus-sign-png.png" alt="Clinic Logo">
      <h1>Russel Street Medical</h1>
      <div class="navbar">
         <ul>
            <li><a href="index.php"target="_self">Home Page</a> </li>
            <li><a href="BookingPage.php"target="_self">Booking Page</a></li>
         </ul>
      </div>
   </header>