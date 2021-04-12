const geefDagWeek = (num) => {
    switch (num) {
        case 0: return "Zondag"; break;
        case 1: return "Maandag"; break;
        case 2: return "Dinsdag"; break;
        case 3: return "Woensdag"; break;
        case 4: return "Donderdag"; break;
        case 5: return "Vrijdag"; break;
        case 6: return "Zaterdag"; break;
        default: return num;
    }
}

const maandNaam = (num) => {
    switch (num) {
        case 0: return "januari"; break;
        case 1: return "februari"; break;
        case 2: return "maart"; break;
        case 3: return "april"; break;
        case 4: return "mei"; break;
        case 5: return "juni"; break;
        case 6: return "juli"; break;
        case 7: return "augustus"; break;
        case 8: return "september"; break;
        case 9: return "oktober"; break;
        case 10: return "november"; break;
        case 11: return "december"; break;
        default: return num;
    }
}




function updateTime(){
     
    var dt = new Date();
    let dagWeek  = dt.getDay();
    let maand    = dt.getMonth();
    let uren = dt.getHours();
    if( uren < 10 ) {
        uren = "0" + uren;
    };
    let minuten  = dt.getMinutes();
    if( minuten < 10 ) {
        minuten = "0" + minuten;
    };
    document.getElementById("daytime").innerHTML = geefDagWeek(dagWeek);
    document.getElementById("MDtime").innerHTML = dt.getDate();
    document.getElementById("monthtime").innerHTML = maandNaam(maand);
    document.getElementById("yeartime").innerHTML = dt.getFullYear();
    document.getElementById("hourtime").innerHTML = uren;
    document.getElementById("minutetime").innerHTML = minuten;
   };
setInterval(updateTime, 1);
// updateTime();



