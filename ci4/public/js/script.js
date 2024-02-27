let currentDisplay = 0;

function goLeft(){
    if (currentDisplay == 0){
        currentDisplay = 5
    } else{
    currentDisplay -= 1;
    }
    
}

function goRight(){
    if (currentDisplay == 5){
        currentDisplay = 0
    } else{
    currentDisplay += 1;
    }
}