function validacija(){
    var x = document.forms['unos']['ime'].value;
    
    if (x===""){
        alert("Morate popuniti polje IME!");
        return false;
    }
    
    var y = document.forms['unos']['brindexa'].value;
    
    if(isNaN(y)){
        alert("Broj indexa mora biti broj!");
        return false;
    }
}
function alternate(id){ 
  if(document.getElementsByTagName){  
    var tabela = document.getElementById(id);   
    var red = tabela.getElementsByTagName("tr");   
    for(i = 0; i < red.length; i++){           
  //manipulacija redovima 
      if(i % 2 === 0){ 
        red[i].className = "nepar"; 
      }else{ 
        red[i].className = "par"; 
      }       
    } 
  } 
}

