var botaoReserva = document.querySelector('#checkreservation');

var campoTipo =  document.querySelector("#tipo");

var campoData = document.querySelector("#checkreservationdate");

botaoReserva.addEventListener("click", function(){
    var tipo = campoTipo.value; 
    var data = campoData.value;
   
   var url = "https://orizonte.golfmanager.com/consumer/ebookings/" + tipo +'?date=' + data; 
   window.open(url, '_blank');
    
     
});
