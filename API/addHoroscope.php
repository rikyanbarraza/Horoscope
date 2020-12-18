<?php

$horoscopeName = ['Stenbocken', 'Vattumannen', 'Fiskarna', 'Väduren','Oxen',
'Tvillingarna', 'Kräftan', 'Lejonet', 'Jungfrun', 'Vågen', 'Skorpionen', 'Skytten']

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


















<!--  
addHoroscope.php

sidan ska bara gå att begära via POST, 
den ska kolla efter ett födelsedatumi $_POST,
räkna ut vilket horoskop födelsedatumet tillhör och spara det i $_SESSION.

Om ett horoskop redan finns sparat ska det inte skrivas över.
Om det inte gick att räkna ut horoskopet ska ingenting sparas.
 
Sidan ska inte använda echo eller skriva någon output förutom true eller false,
beroende på om horoskopet sparades. -->