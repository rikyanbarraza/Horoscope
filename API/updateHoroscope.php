<?php

try
{

    session_start();

    if(isset($_SERVER["REQUEST_METHOD"]))
    {
        if($_SERVER["REQUEST_METHOD"] === "GET")
        {
            if(isset($_SESSION["Horoscope"])) 
            {
                echo json_encode(unserialize($_SESSION["Horoscope"]));
            }   
        }
        else if ($_SERVER["REQUEST_METHOD"] === "POST")
        {

        }
        else{
            throw new Exception("Not a valid request...", 405);
        }
    }
}

catch(Execption $error)
{
    echo json_encode
    (
        array
        (
            "Messages" => $error ->getMessages(),
            "Status" => $error -> getCode()
        )
    );
}

?>

<!-- updateHoroscope.php

sidan ska bara gå att begära via POST 
(PUT finns ej i php som standard så vi använder POST istället),
den ska kolla efter ett födelsedatum i POST datan.

räkna ut vilket horoskop födelsedatumet tillhör och 
uppdaterade det sparade horoskopet som finns i $_SESSION och skriva ut true.

 Om inget horoskop finns i $_SESSION ska sidan inte uppdatera något och 
skriva ut false -->