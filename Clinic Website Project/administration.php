<?php 
   require_once("Segments/administrationhead.php")
   ?>
<main>
   <div class="center">
      <h1>Login</h1>
      <form id="form2" method="post">
         <div class="fields">
            <input type="text" name="user" required>
            <label>Username</label>
         </div>
         <div class="fields">
            <input type="text" name="pass" required>
            <label>Password</label>
         </div>
         <input type="submit" name="submit" value="Login">
      </form>
   </div>
</main>
<?php 
   if (isset($_POST['submit'])) {
       $un=$_POST['user'];
       $pw=$_POST['pass'];
   
       if ($un=='Stephen' && $pw=='Drs123!' || $un=='Abigale' && $pw=='Dra456!' || $un=='Kiyoko' && $pw=='Nki789!') {
           header("location:welcome.php");
           exit();
       }
       else 
           echo "Invalid username or password";
           header("location:administration.php");
   };
   
   ?>