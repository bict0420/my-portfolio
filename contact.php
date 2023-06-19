
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf=8"/>
        <title> Registration </title>
        <style type="text/css">
          
          fieldset{
            background-color: darkcyan;
            color: white;
          }
          body{
            background-color: whitesmoke;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            letter-spacing: 1px;
          }
          legend {
            background-color: black;

          }

          textarea {
            margin-bottom: 2vh;
          }
          label {
            width: 40%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
            height: 5vh;
            margin-bottom: 3vh;
          }

          label *:last-child {
            margin-right: 6em;
            width: 200px;
            height: 4vh;
          }
          .gender {
            display: flex;
            align-items: center;
          }
          .gender :last-child{
            margin: 0 0 0 50px;
          }
        .gender input {
          width: 20px;
          height: 20px;
        }

        </style>
    </head>
    
    <?php
      if(isset($_POST['fname'])){
        $dbConn = new mysqli('localhost', 'root', '', 'potifolio');

        if($dbConn->connect_error){
          die($dbConn->connect_error);
        }

        $fname = $_POST['fname'];
        $surname = $_POST['surname'];
        $id = $_POST['email'];
        $msg = $_POST['message'];

        $query = "INSERT INTO `contacts`(`email`, `fname`, `surname`, `message`) VALUES ('$id','$fname','$surname','$msg');";

        if(!$dbConn->query($query)){
          echo '<h1>Form submission failed</h1>';
        }else{
          header('location: index.html');
        }
      }
    ?>

    <body>

            
        <form action="contact.php" method="POST" class="form">
          <fieldset>
            <legend>Fill in Your Details:</legend>
            <div class="form-group">
           <label><span>Firstname:</span> <input type="text" name="fname" class="fname" required placeholder="First name"></label> 
           <label><span>Surname:</span> <input type="text" name="surname" class="surname" required placeholder="Surname"> </label>          
           <label><span>Email:</span> <input type="email" name="email" class="mail" required placeholder="Email Address"></label>            
           <label><span>Sex:</span> <span class="gender"><input type="checkbox" name="gen" class="male"> Male <input type="checkbox" name="gen" class="female"> female</span></label>              

           <label for="msg"><span>Message</span> <textarea name="message" id="textarea" cols="30" rows="3" placeholder="Your Message"></textarea></label> <br><br><br> </label>

           <button type="submit">SUBMIT</button>
           <button type="reset">Reset</button>
        </fieldset>
        </form>

        <script>
          let form = document.querySelector('.form');
          let fname = document.querySelector('.fname');
          let surname = document.querySelector('.surname');
          let male = document.querySelector('.male');
          let female = document.querySelector('.female');
          let msg = document.querySelector('#textarea');

          form.onsubmit = function(e){
            e.preventDefault();

            //isNaN() return true is the pased data is a string else return false
            if (!isNaN(fname.value)) {
              alert('Name must be textual data');
              return;
            }

            if (fname.value.length < 2) {
              alert('Name cannot be a single character');
              return;
            }

            if (!isNaN(surname.value)) {
              alert('Surname must be textual data');
              return;
            }

            if (surname.value.length < 2) {
              alert('Surname cannot be a single character');
              return;
            }

            if(!male.checked && !female.checked){
              alert('Make sure you select your gender');
              return;
            }else if(male.checked && female.checked) {
              alert('On gender, please select exactly one option');
              return;
            }

            
            if (msg.value.length < 4) {
              alert('Message is too short to be meaningful');
              return;
            }

            if (!isNaN(msg.value)) {
              alert('Message cannot be numeric data only');
              return;
            }

            e.target.submit();
          }
        </script>
    </body>

</html>