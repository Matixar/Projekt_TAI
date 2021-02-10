function sendMessage() {
    //creating a single record
    var item={};
    item.nick = document.getElementById("name").value;
    //checking radio box
    var tab = document.getElementsByName("gender");
    var chosenGender="";
    for( i=0;i<tab.length;i++)
    {
        if(tab[i].checked) chosenGender=tab[i].value;
    }
    item.gender = chosenGender;
    item.reason = document.getElementById("reason").value;
    item.email = document.getElementById("email").value;
    item.message = document.getElementById("message").value;
  //adding current date
    var d = new Date();
    item.date = d.toUTCString();
    
    //checking if any record is empty
    if(item.nick!=="" && item.email!=="" && item.message!=="" && item.gender!=="")
    {
        //adding record to JSON array
    var list = JSON.parse(localStorage.getItem('list'));
    if(list===null) list=[];
    list.push(item);
    localStorage.setItem('list',JSON.stringify(list));
    showRecords();
    }
    
}

function showRecords()
{
    //getting the record array
    var list = JSON.parse(localStorage.getItem('list'));
    var el = document.getElementById("records");
    var str = "";
    //in case of no record show message
    if (list === null) el.innerHTML=str+"<p>Trochę tutaj pusto... Możesz dodać swój wpis używając formularza po lewej stronie.</p>";
    else {
        for(i=0;i<list.length;i++)
        {
            //change english value into polish 
            var chosenGender="";
            if(list[i].gender==="male") chosenGender="Pan";
            if(list[i].gender==="female") chosenGender="Pani";
            var chosenReason="";
            switch(list[i].reason)
            {
                case "positive":
                    chosenReason="Pochwała";
                    break;
                case "negative":
                    chosenReason="Skarga";
                    break;
                case "idea":
                    chosenReason="Własne pomysły";
                    break;
                case "other":
                    chosenReason="Inne";
                    break;
            }
            //creating a message list
            str+="<div class='card mb-4'><div class='card-body'><div class='row'><div class='col-lg-3'><div class='row'>";
            str+=chosenGender+" "+list[i].nick;
            str+="</div><br><div class='row'><button class='btn btn-primary mr-1' onclick='editMessage("+i+")'>Edytuj</button> <button class='btn btn-primary' onclick='deleteMessage("+i+")'>Usuń</button></div></div><div class='col-lg-8' id='textarea"+i+"'><h3 class='card-title'>"+chosenReason+"</h3>";
            str+="<p class='card-text' id='message"+i+"'>"+list[i].message+"</p></div></div></div>";
            str+="<div class='card-footer text-muted'>"+" Dodano "+list[i].date+" mail: "+list[i].email+"</div></div>";
        }
        el.innerHTML=str;
    }
    
}

function deleteMessage(i)
{
    if(confirm("Czy chcesz usunąć wiadomość?"))
    {
        var list = JSON.parse(localStorage.getItem("list"));
        list.splice(i,1);
        localStorage.setItem('list',JSON.stringify(list));
        showRecords();
    }
}

function editMessage(i)
{
    if(confirm("Czy chcesz edytować wiadomość?"))
    {
        //loading existing message
        var list = JSON.parse(localStorage.getItem("list"));
        var text = document.createTextNode(list[i].message);
        //creating div for message editor
        var div = document.createElement("DIV");
        div.className = "controls";
        div.id = "messageEditDiv"+i;
        //creating text editor
        var editor = document.createElement("TEXTAREA");
        editor.id = "editor"+i;
        editor.className = "form-control";
        editor.rows = "5";
        editor.cols = "50";
        editor.maxlength = "999";
        //appending editor into div
        editor.appendChild(text);
        div.appendChild(editor);
        //replacing text with editor
        var parent = document.getElementById("textarea"+i);
        var child = document.getElementById("message"+i);
        parent.replaceChild(div,child);
        //selecting whole text
        document.getElementById("editor"+i).select();
        
        //save button
        var save = document.createElement("BUTTON");
        save.onclick = function () {
            saveChanges(i);
        };
        save.className = "btn btn-primary";
        var saveText = document.createTextNode("Zapisz zmiany");
        save.appendChild(saveText);
        
        //cancel button
        var cancel = document.createElement("BUTTON");
        //cancel function
        cancel.onclick = function() {
                var parent = document.getElementById("textarea"+i);
                var child = document.getElementById("messageEditDiv"+i);
                parent.removeChild(child);
                showRecords();
        };
        
        cancel.className = "btn btn-primary";
        var cancelText = document.createTextNode("Anuluj");
        cancel.appendChild(cancelText);
        
        div.appendChild(save);
        div.appendChild(cancel);
    }
}

//save button function
function saveChanges(i) {
                //getting the record aray and replacing the message with current one
                var list = JSON.parse(localStorage.getItem("list"));
                list[i].message = document.getElementById("editor"+i).value;
                var d = new Date();
                list[i].date = d.toUTCString()+" (edytowane)";
                localStorage.setItem('list',JSON.stringify(list));
                //removing the editor and refreshing the view
                var parent = document.getElementById("textarea"+i);
                var child = document.getElementById("messageEditDiv"+i);
                parent.removeChild(child);
                showRecords();
}