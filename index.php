<html>
    <head></head>
    <center>
        <body>
        <div style="background-color:#ccffff">
        <h1>gioco dell'Indovina Numero</h1>
        <p><b>Regole del gioco:</b> Si deve indovinare nel minor numero di tentativi un <br>numero compreso fra 0 e 99 estratto casualmente dal sistema</p><br><br>

        <form action="" method="get">

        <?php

            if(empty($_GET)){
                $numeroCasuale = rand(0,99);
                $i=1;
                echo "tentativo n°". $i ." 
                <input type='number' name='numero' min='0' max='99'> 
                <input type='hidden' name='nRandom' value='$numeroCasuale'>
                <input type='hidden' name='nTentativi' value='$i'>
                <input type='submit' value='TENTA'>";


            }
            else{


                $numeroCasuale=$_GET["nRandom"];
                $i=$_GET["nTentativi"];

                $i=$i+1;
if($i>7){
                    echo "<p>Spiacente, hai superato il numero massimo di tenativi!</p><br>
                    <input type='submit' value='Gioca di nuovo'><br>";
                }else if($_GET["numero"]>$numeroCasuale){

                    echo "tentativo n°". $i ."
                    <input type='number' name='numero' min='0' max='99'> 
                    <input type='hidden' name='nRandom' value='$numeroCasuale'>
                    <input type='hidden' name='nTentativi' value='$i'>
                    <input type='submit' value='TENTA'><br>";


                    echo "<p>il tuo numero è troppo grande</p>";
                }else if($_GET["numero"]<$numeroCasuale){

                    echo "tentativo n°". $i ." 
                    <input type='number' name='numero' min='0' max='99'> 
                    <input type='hidden' name='nRandom' value='$numeroCasuale'>
                    <input type='hidden' name='nTentativi' value='$i'>
                    <input type='submit' value='TENTA'><br>";


                    echo "<p>il tuo numero è troppo piccolo</p>";
                    }else{
                    echo "<p>Bravo, hai indovinato<br>
                    hai vinto in </p>".$i."<p> tentativi</p>
                    <input type='submit' value='Gioca di nuovo'><br>";
                }


            }

        ?>
        </form>
        </div>
        <body>
    </center>
</html>
