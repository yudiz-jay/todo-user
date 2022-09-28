
// For task

window.onload = () => {
    setInterval(() => {
        const date = new Date();
        document.getElementById("lblTime").innerHTML = date.toLocaleTimeString();
    }, 1000);

    fetch('https://api.giphy.com/v1/gifs/search?q=funny+cat&api_key=AdqSuQfxgFIDAcPaU5om8iv86DBEY3FV')
        .then(response => response.json())
        .then(json => {
            console.log(json.data)
            count = 0;
            setInterval(() => {
                document.getElementById("img1").src = json.data[count].images.original.url;
                count++;
            }, 1000 * 120);
        })

    navigator.geolocation.getCurrentPosition((position) => {
        let lat = position.coords.latitude;
        let lon = position.coords.longitude;

        let weatherApi = "https://api.openweathermap.org/data/2.5/weather";
        let apiKey = "f146799a557e8ab658304c1b30cc3cfd";

        url = weatherApi + "?lat=" + lat + "&lon=" + lon + "&appid=" + apiKey + "&units=imperial";

        console.log(url);
        fetch(url) //api for the get request
            .then((response) => response.json())
            .then((data) => {
                document.getElementById("temperature").innerHTML =
                    data.main.temp + "f°";
                document.getElementById("icon").src = data.weather[0].icon + "png";
                document.getElementById("location").innerHTML =
                    data.name + " (" + lat + "°, " + lon + "°)";
                document.getElementById("description").innerHTML = data.weather[0].main;
            });
    });
    const form1 = document.querySelector("#addForm");
  
    let items = document.getElementById("items");
  
    form1.addEventListener("submit", addItem);
    items.addEventListener("click", removeItem);
};
  
function addItem(e) {
    e.preventDefault();
  
    if (submit.value != "Submit") {

        editItem.target.parentNode.childNodes[0].data = document.getElementById("item").value;
  
        submit.value = "Submit";
        document.getElementById("item").value = "";
        document.getElementById("lblsuccess").style = "color:green";
        document.getElementById("lblsuccess").innerHTML = "Text Edit Successfully";
  
        document.getElementById("lblsuccess").style.display = "block";
  
        setTimeout(function() {
            document.getElementById("lblsuccess").style.display = "none";
        }, 1000);
  
        return false;
    }
  
    let newItem = document.getElementById("item").value;
    if (newItem.trim() == "" || newItem.trim() == null)
    {
        return false;
    }
       
    else
    {
        document.getElementById("item").value = "";
    }
        
  
    let li = document.createElement("li");

    let deleteButton = document.createElement("button");
  
    deleteButton.className = "btnDelete";
    deleteButton.style = "margin-left: 10px;";
    deleteButton.appendChild(document.createTextNode("Delete"));
  
    let editButton = document.createElement("button");
  
    editButton.className =  "btnEdit";
    editButton.style = "margin-left: 10px;";
    editButton.appendChild(document.createTextNode("Edit"));
  
    li.appendChild(document.createTextNode(newItem));
    li.appendChild(deleteButton);
    li.appendChild(editButton);
  
    items.appendChild(li);
}
  
function removeItem(e) {
    e.preventDefault();
    if (e.target.classList.contains("btnDelete")) {
        if (confirm("Are you Sure Want to delete the task?")) {
            let li = e.target.parentNode;
            items.removeChild(li);
            document.getElementById("lblsuccess").innerHTML = "Text Deleted successfully";
            document.getElementById("lblsuccess").style = "color:Red";
            document.getElementById("lblsuccess").style.display = "block";
  
            setTimeout(function() {
                document.getElementById("lblsuccess").style.display = "none";
            }, 1000);
        }
    }
    if (e.target.classList.contains("btnEdit")) {
        document.getElementById("item").value = e.target.parentNode.childNodes[0].data;
        submit.value = "Edit";
        editItem = e;
    }
}
  
function toggleButton(btnID) {
    document.getElementById(btnID).disabled = false;
}