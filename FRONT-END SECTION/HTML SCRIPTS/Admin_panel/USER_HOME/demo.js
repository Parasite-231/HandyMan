var countIncrement = document.getElementById("counter")

var count = 0 
function increment(){
    count = count+1
    countIncrement.innerText = count

}

function reset(){

    count=0
    countIncrement.innerText = count

    
}