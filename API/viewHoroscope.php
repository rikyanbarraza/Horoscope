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




























<!-- viewHoroscope.php

sidan ska bara gå att begära via GET, 
den ska kolla om ett horoskop finns sparat i $_SESSION och 
i så fall skriva ut det i output. Annars ska sidan inte skriva ut någonting. -->