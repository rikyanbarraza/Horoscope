window.addEventListener("load", initSite)

document.getElementById("saveBtn").addEventListener("click",saveHoroscope)
document.getElementById("removeBtn").addEventListener("click",removeHoroscope)
document.getElementById("addBtn").addEventListener("click",addHoroscope)

function initSite() {
}


function getHoroscope() {

}


async function makeRequest(path, method, body)
{
    try
    {
        const response = await fetch (path, 
            {
                method,
                body
            })

        console.log(response)
        return response.json()
    }   
    catch(err)
    {

    }
}