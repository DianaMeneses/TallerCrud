function eliminar(id,url) {
    $.ajax({
        data:{id :id},
        dataType:'json',
        success: function(data){
             if(data.code == 200){
           location.reload(); 
       }else{
           alert('Error en el servidor');
       }
        },
        type: 'POST',
        url: url
        
    });
}

