function fnEliminar(obj,valor){
     
    var seccion = obj.parentNode.getElementsByTagName('input')[0].getAttribute('data-seccion');
    var byID = obj.parentNode.parentNode.getElementsByTagName('th')[0].getElementsByTagName("a")[0].textContent;
    if(valor==0){
        valor=1;
        obj.parentNode.innerHTML='<a onclick="fnEliminar(this,1);" href="javascript:;" class="espublicado btn btn-success btn-rounded"><i class="fa fa-eye"></i></a><input type="hidden" name="id" value="-" data-seccion="pages" />';
        
    } else {
        valor=0;
        obj.parentNode.innerHTML='<a onclick="fnEliminar(this,0);" href="javascript:;" class="espublicado btn btn-blue-grey btn-rounded "><i class="fa fa-eye-slash"></i></a><input type="hidden" name="id" value="-" data-seccion="pages" />';
        
    }
   
   
    
    console.log(seccion+" - "+byID);
    
    var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                
            };
            
            
            //Abrir conexión
            xhttp.open("GET", window.location.href+seccion+"/activar/"+byID+"/"+valor);
            try {
                xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
            } catch (e) {}

            xhttp.send();
            
}
