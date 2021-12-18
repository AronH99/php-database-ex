<?php
//inlezen van een bestand, replace, en printen
$content = file_get_contents("endofpage.txt");
print str_replace( "@@TEKST@@", "Purple rain, purple rain, ...", $content);

//wegschrijven van gegevens naar een bestand
$file = fopen("log.txt","a");                   //$file = een filepointer
$logstring = date("Y-m-d H:i:s") . " -> Er doet iemand een request!\n";
fwrite( $file, $logstring);
fclose( $file );

$sql = "insert into log (log_text) values ('$logstring')";
ExecSQL($sql);

function ExecSQL( $sql )
{
    // create connection
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // execute given query
    $result = $conn->query($sql);

    return $result;
}


include "head.php";
echo InsertHead("De leukste plekken in Europa");


function InsertHead($title, $extra_stylesheets = [])
{
    return '
                    <!DOCTYPE html>
...
                    
                    </head>';
}