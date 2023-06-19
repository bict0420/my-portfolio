<DOCTYPE html>
    <html><head>
        <title>My Skills</title>
        <meta charset="utf=8"/>
        <style type="text/css">
            body{
                background-position: center;
                background-size: cover;
                text-align: left;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background-color: whitesmoke;
            }
           
            div{
                width: "fit-content";
                padding:10px 50px;
                margin: 0 50px;
                background-color: rgb(24, 148, 189);
                box-shadow: 0 0 20px 8px rgba(164, 164, 164, 0.912);
               
            }
            li {
                background-color: whitesmoke;
                margin-top: 2vh;
                list-style: circle;
                padding-left: 5px;
                position: relative;
                cursor: pointer;
                height: 4vh;
                display: flex;
                align-items: center;
            }
            #main li .hint {
                content: 'Main skill';
                position: absolute;
                top: -25px;
                right: 0;
                background-color: rgb(45, 45, 45);
                color: white;
                padding: 2px;
                border-radius: 2px;

            }
            .vanish {
                display: none;
            }
            .primary-skill {
                background-color: lightcyan;
            }
            .primary-skill-uniq {
                background-color: black;
                color: white;
            }
            h1{
                font-family: Times, serif;
                font-size: xx-large;
                color: black;
            }
            a {
                width: 100px;
                height: 4vh;
                cursor: pointer;
                background-color: whitesmoke;
                text-decoration: none;
                padding: 4px 20px;
                color: blue;
            }
            footer{
                width:50%;
                padding: 5px;
                border: 2px inset black;
                margin: 2px; 
                background-color: rgba(0, 0, 0, 0.585); 
                font-style: italic;
                font-size: large;
                color: white;
                font-size: large;
           }

        </style>
    </head>
    <body>

        <div>
            <h1> My Skills </h1>
        
                <?php
                
                    $dbConn = new mysqli('localhost', 'root', '', 'potifolio');

                    if ($dbConn->connect_error) {
                        die($dbConn->connect_error);
                    }

                    echo "<ol id='main'>";
                    $query = "SELECT `skill` FROM `skills` WHERE `skill_type` = 'main';";
                    $result = $dbConn->query($query);

                    if ($result) {
                        while ($row = $result->fetch_assoc()) {
                            $skill = $row['skill'];
                            echo "<li class='primary-skill'>$skill<span class='hint vanish'>Main Skill</span></li>";
                        }
                        $result->free();
                    } else {
                        echo "Error executing the query: " . $dbConn->error;
                    }

                    echo "</ol>";

                    // Close the database connection if necessary
                    $dbConn->close();

                ?>

                <h2>Other skills</h2>

                <?php
                $dbConn = new mysqli('localhost', 'root', '', 'potifolio');

                if ($dbConn->connect_error) {
                    die($dbConn->connect_error);
                }

                echo "<ol>";
                $query = "SELECT `skill` FROM `skills` WHERE `skill_type` = 'other';";
                $result = $dbConn->query($query);

                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $skill = $row['skill'];
                        echo "<li >$skill</li>";
                    }
                    $result->free();
                } else {
                    echo "Error executing the query: " . $dbConn->error;
                }

                echo "</ol>";

                // Close the database connection if necessary
                $dbConn->close();

                ?>

            
                <form>
                   
                    <a href="index.html">Go Home</a>
                </form>
        </div>
    
                <br></br> 
        <center>
            <footer>
                &copy;hezronsavia2@gmail.com (0991896718)
            </footer>
        </center>
    
    <script>

        // select first element in main skills list
          let primary_skill = document.getElementsByClassName('primary-skill')[0];

          //toggle style every second to attain attention
          setInterval(() => {
            primary_skill.classList.toggle('primary-skill-uniq');
          }, 1000);

          //main skills lis container
          let main_skill_container = document.getElementById('main');
          
          //iterate through each child element in list containe selected above and attach event handlers to it
          for(let child of main_skill_container.children){
            child.onmouseover = function() {
                child.lastElementChild.classList.remove('vanish');
            }

            child.onmouseout = function () {
                  child.lastElementChild.classList.add('vanish');
              }
          }

    </script>
    </body>
           
    
    
    </html>
