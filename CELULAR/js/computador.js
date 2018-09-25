	
    $("#opciones a").click(function(e){
        document.getElementById('oculto').style.display = 'block';
     	e.preventDefault();
        url = $(this).attr("href");
        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Panel Principal");
                	$("#contenido" ).html(data);
        });
     });
// cierra y nos envia a la pagina principal INDEX.HTML
    $("#contenido").on("click","button.btncerrar_nueva_acta_computador",function(){
        $("#contenedor").removeClass("show");
        $("#contenedor").addClass("hide");
    })

// adicionar nuevo elemento a nuestra base de datos
    $("#contenido").on("click","button#nuevo_computador",function(){
        $("#titulo").html("Nueva acta computador");
        $( "#contenido" ).load("./COMP/computador/computador.php");
    })
    // Cerrar en la ventana nueva acta y enviar a la ventana de lista.php para visualizar las actas de los computadores

    $("#contenido").on("click","button.btncerrar_nueva_acta_computador2",function(){
         $("#titulo").html("Listado actas de computadores");
        $( "#contenido" ).load("./COMP/computador/lista.php");
       
    })

