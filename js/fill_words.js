let skills = [
        "Photographer",
        "Skateboarder",
        "Chess Enthusiast",
        "Philosopher",
        "Guitar Player",
        "Dancer",
        "Longboarder",
        "Furniture Maker",
        "Linguist",
        "Entrepreneur",
        "Globetrotter",
        "Artist",
        "Writer",
        "Chef",
        "Carpenter",
        "Blockchain Enthusiast",
        "Armchair Economist",
        "Snowboarder",
        "Lover",
        "Tinkerer"
        ];

function renderText(id, i){
    document.getElementById(id).innerText = skills[i]
    }


function triggerSpinning(id, interval){
    if(document.getElementById(id).className === "inactive"){
        turnOnFlashingWords(id);
    }else{
        clearInterval(interval)
        }
}
function turnOnFlashingWords(id){
    document.getElementById(id).className = "active";
    return setInterval(() => {
        renderText(id, (count % skills.length));
        count += 1;
        }, 500);
}

count = 0;
let interval = turnOnFlashingWords("toFill");
document.getElementById("toFill").addEventListener("mouseover", function(){clearInterval(interval)});
document.getElementById("toFill").addEventListener("mouseout", function(){interval = turnOnFlashingWords("toFill")});
document.getElementById("toFill").addEventListener("click", function(){clearInterval(interval); document.getElementById("toFill").id = "filled"})



