<?php
   session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
{
   header('Location: Strona\index.html');
   exit();
}
?>

<html>
    <head>
        <link href="SGGW_FORUM/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>




        <div id="strona" style="display:flex; justify-content: center; align-items: center;">
            
            <div id="log-in">
                <div id="przyciski">
                    <div id="tlo"></div>
                    <button type="button" class="switch" onclick="login()">LOGOWANIE</button>
                    <button type="button" class="switch" onclick="register()">REJESTRACJA</button>
                </div>
                <form action="logon.php" method="post" id="logowanie" class="formularz">
                    <input type="text" class="pole_tekstowe" name="logonlogin" placeholder="Login" required>
                    <input type="password" class="pole_tekstowe" name="logonpassword" placeholder="Hasło" required>
                    <button type="submit" class="przycisk_zaloguj">ZALOGUJ</button>
                    
                </form>
                
                <form action="register.php" method="post" id="rejestracja" class="formularz">
                    <input type="text" class="pole_tekstowe" name="regname" placeholder="Imię" required>
                    <input type="text" class="pole_tekstowe" name="regsurname" placeholder="Nazwisko" required>
                    <input type="text" class="pole_tekstowe" name="reglogin" placeholder="Login" required>
                    <input type="email" class="pole_tekstowe" name="regmail" placeholder="Adres e-mail" required>
                    <input type="password" class="pole_tekstowe" name="regpass" placeholder="Hasło" required>
                    <input type="password" class="pole_tekstowe" name="regrepass" placeholder="Powtórz hasło" required>
                    <br>
                    <select id="kierunek" name="kierunek">
                        <option value="informatyka">Informatyka</option>
                        <option value="inormatykaEkonometria">Informatyka i ekonometria</option>
                    </select>
                    <br>
                    <input type="checkbox" class="checkmark" id="1" name="korepetytor" value="tak">
                                <label for="1" class="lbl">Chcę udzielać korepetycji</label>
                                <br>
                    <button type="submit" class="przycisk_zaloguj">ZAREJESTRUJ</button>
                </form>
            </div>
        </div>
        <script>
            var l=document.getElementById("logowanie");
            var f=document.getElementById("log-in");
            var r=document.getElementById("rejestracja");
            var t=document.getElementById("tlo");
            function register()
            {
                l.style.left="-400px";
                r.style.left="50px";
                t.style.left="120px";
                t.style.background="linear-gradient(to right, #a8e063,#56ab2f)";
                f.style.height="600px";

            }
            window.onload = load;

            function load()
            {
                f.style.opacity="1";



            }
            function login()
            {
                l.style.left="50px";
                r.style.left="450px";
                t.style.left="0px";
                f.style.height="300px";
                t.style.background="linear-gradient(to right, #56ab2f, #a8e063)";
            }
        </script>
    </body>
</html>
