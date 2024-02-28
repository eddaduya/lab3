let experiences = [
    "#html", 
    "#css", 
    "#javascript", 
    "#python", 
    "#java", 
    "#php"
];

let currentDisplay = 0;

let button1 = document.querySelector("#left-btn")
button1.addEventListener("click", () => {
    if (currentDisplay == 0){
        currentDisplay = 5
    } else{
    currentDisplay -= 1;
    }
    button1.setAttribute("href", experiences[currentDisplay])
})

let button2 = document.querySelector("#right-btn")
button2.addEventListener("click", () => {
    if (currentDisplay == 5){
        currentDisplay = 0
    } else{
    currentDisplay += 1;
    }
    button2.setAttribute("href", experiences[currentDisplay])
})