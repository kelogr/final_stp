$(document).ready(function(){
    //Recollim les dades d'email per treballar amb elles.
    //També passem a través d'una cadena el que volem trobar que després processarem amb ajax(dataString).
    var email=$("input[name=email]").val();
    var dataString='email='+email;
    
    $("input[name=email]").on('change',function(){ //Cada vegada que fem un canvi a la caixa de texte d'email ens sortirá si aquest email existeix o no a la base de dades.
            var email=$("input[name=email]").val();
            var dataString='email='+email;
            $.ajax({
                type: "POST",
                url: "login/valemail", //Accedim al métode del controlador login.
                data: dataString,
                success: function(data) {
                    dat=JSON.parse(data); //Ens retorna un json amb l'informació que haguem passat pel controlador.
                      
                    $(".msg").html("<h3>"+dat.msg+"</h3>"); //Amb aixó introduïm el missatge a la plantilla de login de forma automàtica. Apunt*=Per a que funcioni s'ha de donar un clic a quasevol lloc de la página per poder veure el canvi de missatge.
                }              
            });
        });
        
    $("#boton").on('click', function(){
        var email=$("input[name=email]").val();
        var password = $.md5($("input[name=email]").val());
        //Recollim els valors de email i contrasenya i les guardem com a dos valors que utilitzarem a la consulta a la base de dades.
        var email='email='+email;
        var passwd = 'password='+password;
            $.ajax({
                type: "POST",
                url: "login/log",
                data: dataString, passwd,
                success: function(data) {
                    dat=JSON.parse(data);   //Ens retorna dos linies de json, una amb un misstage de si es correcte o no que servirá per controlar si ha sortit bé o no y altra que es la redirecció de pagina.
                      
                   if(dat.msg=="Correcto"){
                        window.location.href = dat.redir;
                        
                    }
                    else{
                        window.location = dat.redir;
                    }
                }              
            });
    });

    $("#modificar").on('click', function(){
            var name=$("input[name=name]").val();
            var email = $("input[name=email]").val();
            var password = $("input[name=password]").val();
            //Recollim els valors de email i contrasenya i les guardem com a dos valors que utilitzarem a la consulta a la base de dades.
            var set='email='+email+', password='+password+', usersname='+name;
                $.ajax({
                    type: "POST",
                    url: "editprofile/editar",
                    data: set,
                    success: function(data) {
                        dat=JSON.parse(data);   //Ens retorna dos linies de json, una amb un misstage de si es correcte o no que servirá per controlar si ha sortit bé o no y altra que es la redirecció de pagina.
                          
                       if(dat.msg=="Correcto"){
                            $(".msg").html("<h3>"+dat.msg+"</h3>"); 
                            window.location.href = dat.redir;
                        }
                        else{
                            $(".msg").html("<h3>"+dat.msg+"</h3>"); 
                        }
                    }              
                });
        });

    $(".eli-story").on('click', function(){
        var id=$(this).attr('id');
        
        //Recollim els valors de email i contrasenya i les guardem com a dos valors que utilitzarem a la consulta a la base de dades.
            $.ajax({
                type: "POST",
                url: "editstory/eliminar",
                data: id,
                success: function(data) {
                   
                   dat=JSON.parse(data);   //Ens retorna dos linies de json, una amb un misstage de si es correcte o no que servirá per controlar si ha sortit bé o no y altra que es la redirecció de pagina.
                      
                   if(dat.msg=="Correcto"){
                        window.location.href = dat.redir;
                        
                    }
                    else{
                        window.location = dat.redir;
                    }
                }              
            });
    });

    $(".edi-story").on('click', function(){
        
        var idstories=$("input[name=idstory]").val();
        var usuario=$("input[name=usuario]").val();
        var Path=$("input[name=path]").val();
        var titulo=$("input[name=title]").val();
        var sinopsis=$("input[name=sinopsis]").val();
        var valor=$("input[name=valormedio]").val();

        var sentencia= "idstories="+idstories+", users="+usuario+", path="+Path+", titulo='"+ titulo +"',sinopsis='"+sinopsis+"', medium_values="+valor+" WHERE idstories = "+idstories+";";
        
        $.ajax({
                type: "POST",
                url: "editstory/editar",
                data: sentencia,
                success: function(data) {
                   
                   dat=JSON.parse(data);   //Ens retorna dos linies de json, una amb un misstage de si es correcte o no que servirá per controlar si ha sortit bé o no y altra que es la redirecció de pagina.
                      
                   if(dat.msg=="Correcto"){
                        $(".msg").html("<h3>"+dat.msg+"</h3>");
                        
                    }
                    else{
                        $(".msg").html("<h3>"+dat.msg+"</h3>");
                    }
                }              
            });
    });

    //usuarios

    $(".edi-user").on('click', function(){
        var idusers=$("input[name=iduser]").val();
        var rol=$("input[name=rol]").val();
        var email=$("input[name=email]").val();
        var pass=$("input[name=password]").val();
        var usr=$("input[name=username]").val();

        var sentencia= "idusers="+idusers+", roles="+rol+", email='"+email+"', password='"+pass+"', usersname='"+usr+"' WHERE idusers = "+idusers+";";
        
        //Recollim els valors de email i contrasenya i les guardem com a dos valors que utilitzarem a la consulta a la base de dades.
            $.ajax({
                type: "POST",
                url: "edituser/editar",
                data: sentencia,
                success: function(data) {
                   
                    //alert(data);
                   dat=JSON.parse(data);   //Ens retorna dos linies de json, una amb un misstage de si es correcte o no que servirá per controlar si ha sortit bé o no y altra que es la redirecció de pagina.
                      
                   if(dat.msg=="Correcto"){
                        $(".msg").html("<h3>"+dat.msg+"</h3>");
                        
                    }
                    else{
                        $(".msg").html("<h3>"+dat.msg+"</h3>");
                    }
                }              
            });
    });

    $(".elm-user").on('click', function(){
        
        var id=$(this).attr('id');

        $.ajax({
                type: "POST",
                url: "edituser/eliminar",
                data: id,
                success: function(data) {
                   //alert(data);
                   dat=JSON.parse(data);   //Ens retorna dos linies de json, una amb un misstage de si es correcte o no que servirá per controlar si ha sortit bé o no y altra que es la redirecció de pagina.
                      
                   if(dat.msg=="Correcto"){
                        $(".msg").html("<h3>"+dat.msg+"</h3>");
                        
                    }
                    else{
                        $(".msg").html("<h3>"+dat.msg+"</h3>");
                    }
                }              
            });

        $("#newstory").on('click', function(){
            
            var id=$(this).attr('name');
            
            var texto=$("#texto").val();

            var titulo=$("#titulo").val();

            var set = texto + " " + titulo + " " + id;
            
            $.ajax({
                    type: "POST",
                    url: "addstory/add",
                    data: set,
                    success: function(set) {
                       //alert(data);
                       dat=JSON.parse(data);   
                          
                       if(dat.msg=="Correcto"){
                            window.location.href = dat.redir;
                            
                        }
                        else{
                            window.location.href = dat.redir;
                        }
                    }             
                });
        });

        $("input[name=enviar]").on('click', function(){
            
            $.ajax({
                    
                    url: "story/valorar",
                    success: function(data) {
                       //alert(data);
                       dat=JSON.parse(data);   
                          
                       if(dat.msg=="Correcto"){
                            $(".msg").html("<h3>"+dat.msg+"</h3>");
                            
                        }
                        else{
                            $(".msg").html("<h3>"+dat.msg+"</h3>");
                        }
                    }             
                });
        });
    });
});




