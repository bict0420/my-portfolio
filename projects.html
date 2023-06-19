<DOCTYPE html>
    <html><head>
        <title>My Projects</title>
        <meta charset="utf=8"/>
        <style type="text/css">
            body{
                background-position: center;
                background-size: cover;
                text-align: left;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            
            div{
                padding: 50px;
                border: 1px solid rgb(8, 8, 5);
                margin: 50px; 
                background-color: darkcyan;
                color: rgba(255, 255, 255, 0.871);
                position: relative;
            }
            h1{
                font-size: xx-large;
                color: black;
                
            }
            .hide {
                display: none;
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

            li {
                height: 4vh;
                width: 280px;
                background-color: black;
                margin-bottom: 5px;
                padding: 5px 0 0 3px;
                cursor: pointer;
            }
            input[type="text"] {
                position: absolute;
                top: 5px;
                right: 5px;
                height: 4vh;
                border: 2px solid black;
                border-radius: 4px;
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
           fieldset{
               background-color: rgba(0, 0, 0, 0.115);
           }
        </style>
    </head>
    <body>

        <fieldset>
        <div>
            <h1> Look at My Projects </h1>
                    <ol>
                        <?php
                        $dbConn = new mysqli('localhost', 'root', '', 'potifolio');

                        if ($dbConn->connect_error) {
                            die($dbConn->connect_error);
                        }

                        $query = "SELECT `project_name` FROM `projects`;";

                        $res = $dbConn->query($query);

                        if($res) {
                            while ($data = $res->fetch_assoc() ) {
                                $pj = $data['project_name'];
                                echo "<li>$pj</li>";
                            }
                        }

                        $dbConn->close();
                        ?>
                        
                    </ol>
                <form>
                    <a href="index.html">GO HOME </a>
                    <input class="searchfield" type="text" placeholder="search">
                </form>
        </div>
    
                <br></br>
        <center>
            <footer>
                &copy;hezronsavia2@gmail.com (0991896718)
            </footer>
        </center>
    </fieldset>
    
    <script>
        document.querySelectorAll('li').forEach(li => {
             li.setAttribute('class', '');
        });

        let searchField = document.querySelector('.searchfield');

        searchField.onkeyup = function() {
            document.querySelectorAll('li').forEach(li => {
                if(!(li.innerHTML.toLocaleLowerCase().includes(searchField.value))){
                    li.classList.add('hide')
                }else{
                    li.classList.remove('hide')
                }
            })
        }
    </script>
    </body>
           
    
    
    </html>
