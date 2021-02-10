function startRoulette() {
    //getting random number from 0-100
    var luckyNumber = Math.floor(Math.random()*101);
    var item="";
    var el=document.getElementById("reward");
    var str="";
    var pen=0;
    var speaker=0;
    var yerba=0;
    var car=0;
    var chair=0;
    //rewards based on number: 0-34 pen, 35-44 speaker, 45-54 yerba, 55-89 nothing, 90-91 car, 92-100 chair 
    if(luckyNumber >=0 && luckyNumber< 35) item="pen";
    else if(luckyNumber < 45) item="speaker";
    else if(luckyNumber < 55) item="yerba";
    else if(luckyNumber < 90) item="nothing";
    else if(luckyNumber < 92) item="car";
    else item="chair";
    //showing the reward and playing sound if either car or nothing was rolled
    //saving the result to sessionStorage for displaying count
    switch(item)
    {
        case "pen":
            str+=str+="<img class='img-fluid' src='https://megagadzety.pl/5279-large_default/dlugopis-touch-impact.jpg' alt='długopis'><hr><p class='text-muted'>Długopis</p>";
            if(sessionStorage.getItem("pen"))
            {
                var count = sessionStorage.getItem("pen");
                count++;
                sessionStorage.setItem("pen",count);
            }
            else sessionStorage.setItem("pen",1);
            break;
        case "speaker":
            str+=str+="<img class='img-fluid' src='https://image.ceneostatic.pl/data/products/90439585/i-jbl-flip-essential-czarny.jpg' alt='głośnik'><hr><p class='text-muted'>Głośnik</p>";
            if(sessionStorage.getItem("speaker"))
            {
                var count = sessionStorage.getItem("speaker");
                count++;
                sessionStorage.setItem("speaker",count);
            }
            else sessionStorage.setItem("speaker",1);            
            break;
        case "yerba":
            str+=str+="<img class='img-fluid' src='https://ymt24.pl/userdata/public/gfx/2968.jpg' alt='Yerba'><hr><p class='text-muted'>Yerba Mate</p>";
            if(sessionStorage.getItem("yerba"))
            {
                var count = sessionStorage.getItem("yerba");
                count++;
                sessionStorage.setItem("yerba",count);
            }
            else sessionStorage.setItem("yerba",1);
            break;
        case "chair":
            str+=str+="<img class='img-fluid' src='https://www.ikea.com/pl/pl/images/products/markus-office-chair-glose-black__0724707_PE734589_S5.JPG' alt='markus'><hr><p class='text-muted'>Krzesło</p>";
            if(sessionStorage.getItem("chair"))
            {
                var count = sessionStorage.getItem("chair");
                count++;
                sessionStorage.setItem("chair",count);
            }
            else sessionStorage.setItem("chair",1);           
            break;
        case "car":
            str+=str+="<img class='img-fluid' src='https://ocdn.eu/pulscms-transforms/1/uZJk9kpTURBXy80MWMyMjdmNjUyMzM3Y2UxZTE2NDVjM2Q1ODI1YzY0NC5qcGeSlQM8zMDNBDjNAmCTBc0DFM0BvIGhMAE' alt='samochód'><hr><p class='text-muted'>Samochód</p><audio autoplay><source src='sounds/win_price.mp3' type='audio/mpeg'></audio>";
            if(sessionStorage.getItem("car"))
            {
                var count = sessionStorage.getItem("car");
                count++;
                sessionStorage.setItem("car",count);
            }
            else sessionStorage.setItem("car",1);            
            break;
        case "nothing":
            str+=str+="<img class='img-fluid' src='https://www.pngitem.com/pimgs/m/4-43673_shrug-emoji-png-shrugging-man-png-transparent-png.png' alt='xD'><hr><p class='text-muted'>Przegrałeś</p><audio autoplay><source src='sounds/lose.mp3' type='audio/mpeg'></audio>";
            if(sessionStorage.getItem("nothing"))
            {
                var count = sessionStorage.getItem("nothing");
                count++;
                sessionStorage.setItem("nothing",count);
            }
            else sessionStorage.setItem("nothing",1);
            break;
            
    }
    el.innerHTML=str;
    if(sessionStorage.getItem("car") !== null) 
        car = sessionStorage.getItem("car");
    if(sessionStorage.getItem("speaker") !== null)
        speaker = sessionStorage.getItem("speaker");
    if(sessionStorage.getItem("chair") !== null)
        chair = sessionStorage.getItem("chair");
    if(sessionStorage.getItem("yerba") !== null)
        yerba = sessionStorage.getItem("yerba");
    if(sessionStorage.getItem("pen") !== null)
        pen = sessionStorage.getItem("pen");
        var rewards = {
      'car': car,
      'speaker': speaker,
      'chair': chair,
      'yerba': yerba,
      'pen': pen,
    };
    
    storeIntoDB(rewards);
    showRewards();
}
function showRewards(){
    //displaying won rewards on page
    var el=document.getElementById("displayRewards");
    var str="";
    var count;
    str+="<h2>Przedmioty wygrane na loterii:</h2><ul>";
    if(sessionStorage.getItem("car")) {
        count=sessionStorage.getItem("car");
        str+="<li>Samochód "+count+"x</li>";
    }
    if(sessionStorage.getItem("speaker")) {
        count=sessionStorage.getItem("speaker");
        str+="<li>Głośnik "+count+"x</li>";
    }
    if(sessionStorage.getItem("chair")) {
        count=sessionStorage.getItem("chair");
        str+="<li>Krzesło "+count+"x</li>";
    }
    if(sessionStorage.getItem("yerba")) {
        count=sessionStorage.getItem("yerba");
        str+="<li>Yerba Mate "+count+"x</li>";
    }
    if(sessionStorage.getItem("pen")) {
        count=sessionStorage.getItem("pen");
        str+="<li>Długopis "+count+"x</li>";
    }    
    str+="</ul>";
    el.innerHTML=str;
    
}
//music player
function playMusic(sound) {
    var audio = document.getElementById(sound);
    if(sound === "polonezadur") audio.volume = 0.6;
    audio.play();
}
function stopMusic(sound) {
    var audio = document.getElementById(sound);
    audio.load();
    audio.pause();
}

function storeIntoDB(rewardsStr) {
    $.ajax({
        url: '/storerewards',
        type: 'post',
        data:  rewardsStr ,
        "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')}
    });
}

function showRewardsFromDB() {
    
}