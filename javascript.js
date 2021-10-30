let min, max;

min = document.getElementById('min').value;
max = document.getElementById('max').value;

if(min < max){
    document.getElementById("btn").disabled = true; 
}else{
    document.getElementById("parar").disabled = false; 
}

