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




























<!-- deleteHoroscope.php

sidan ska bara gå att begära via DELETE, 
den ska ta bort det sparade horoskopet i $_SESSION och echo:a true.
Om inget finns sparat ska den echo:a false. -->