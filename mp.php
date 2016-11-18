<DOCTYPE! html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="mp.css">
        <title> MiniProjekt </title>
    </head>

    <body>

            <header align="center" class="headerClass1">
                <h1> The Miami WIKI </h1>
                <h4> En wiki med facts baseret på miami og dets indbyggere </h4>
           </header>

            <nav style="text-align:center">
                <a href="mp.php"> Home </a> 
                <a href="kontakt.html" target=_BLANK> Contact </a>
            </nav>

            <aside class="asidePost">
                <p><h3>
                    <?php
                    $usrname = $_POST["usrName"];
                    $email = $_POST["usrMail"];

                    echo "Velkommen bruger " . $usrname . " med mailen " . $email . " til siden. <br>";
                    echo "Du kan redigere dine indlæg, ved at bruge dit brugernavn " . " $usrname " . " i feltet 'Brugernavn'";
                    ?> 
                </h3></p>

                <p> Indsæt din wiki artikel her </p>
                <div>
                    <form action="mp.php" method="POST">
                            Brugernavn: <input type="name" name="usrName" placeholder="Indsæt brugernavn" required/><br>
                            E-mail:     <input type="email" name="usrMail" placeholder="Indsæt e-mail" autocomplete="on" required/> <br>
                            Artikel:    <textarea rows="8" cols="50" name="usrMsg" placeholder="Indsæt artikeltekst"></textarea>
                                        <input type="reset" value="Fjern alt"/> <br>
      
                            <input type="submit" name="submit" value="Enter"/>
                            
                    </form>




                </div>

                    <?php
                        if(isset($_POST["usrName"]) && isset($_POST["usrMsg"]))
                        {
                            $usrTxt = '<div class="postDiv">' . $_POST["usrName"] . " : " . $_POST["usrMsg"] . "</div>" . "<br>";
                            $txtFile = file_put_contents($_POST["usrName"] . ".txt", $usrTxt);
                        }

                        echo "Din besked er: ";
                        $msgPost = $_POST["usrMsg"];
                        echo ' " ' . $msgPost . ' ". ' ;
                        echo "Tak for dit indlæg, det er nu gemt!";
                        echo ' <br> Indlægget blev postet d.: ' . date('jS M Y H:i:s').'';
                    ?>

            </aside>


            <section class="sectionClass">

            
                <p><h1>Her kan der læses om Miami, ud fra brugeres artikler</h1></p>
               
                <?php
                $rootDir = $_POST["usrName"];

                foreach(glob("*.txt") as $artFile){
                    include $artFile;
                    if(40 >= filesize($artFile)){
                            // unlink("/home/sikobl/public_html/Miniprojekt/" . $rootDir . ".txt");
                            echo "Indhold er slettet af brugeren ";
                        }
                }
                ?>

            </section>


            <footer style="font-size:70%" class="footerClass">
                    <p> (c) Simon Blixenkrone - WITS2016 - sikobl@ruc.dk </p> 
            </footer>

    </body>

</html>