
/*************modal ver detalles de usuario***********/
function cargarModalVer(id,controlador,absoluteUrl){
    $.ajax({
           type: 'POST',
           url: absoluteUrl+'/'+controlador+'/'+id,
           beforeSend:function(){
                 $('#modal'+id).modal('show');
                 $('#modal'+id+' .modal-body').html('');
                 $('#modal'+id+' .titulo_modal').html('Detalles');
                 $('#modal'+id+' .modal-body').addClass('loading');

                },

           success: function(data) {
                  $('#modal'+id+' .modal-body').removeClass("loading");
                  $('#modal'+id+' .modal-body').html(data);

              },
           error : function(jqXHR, status, error) {
                  $('#modal'+id+' .modal-body').removeClass("loading");
                  if(error=="Forbidden"){
                      $('#modal'+id+' .modal-body').html('<div class="alert in alert-block fade alert-error"><strong>Oops!</strong> Usted no esta Autorizado a realizar esta accion</div>');
                  }else{
                      $('#modal'+id+' .modal-body').html('<div class="alert in alert-block fade alert-error"><strong>Oops!</strong> Ha ocurrido un error inesperado</div>');
                  }
                 },
            });

}

/*************modal editar usuarios,cursos //* para administrar///***********/
function cargarModalEditar(id,controlador,absoluteUrl){
    $.ajax({
           type: 'POST',
           url:absoluteUrl+'/'+controlador+'/update?id='+id,
           beforeSend:function(){
                 $('#modal .modal-body').html('');
                 $('#modal .titulo_modal').html('Editar');
                 $('#modal .modal-body').addClass('loading');

                },

           success: function(data) {
                        $("#modal .modal-body").removeClass("loading");
                        $("#modal .modal-body").html(data);
              },
           error : function(jqXHR, status, error) {
                        $("#modal .modal-body").removeClass("loading");
                        if(error=="Forbidden"){
                            $("#modal .modal-body").html('<div class="alert in alert-block fade alert-error"><strong>Oops!</strong> Usted no esta Autorizado a realizar esta accion</div>');
                        }else{
                            $("#modal .modal-body").html('<div class="alert in alert-block fade alert-error"><strong>Oops!</strong> Ha ocurrido un error inesperado</div>');
                        }
                       },
            });

}

function cargarModalCrear(controlador,absoluteUrl){
    $.ajax({
           type: 'POST',
           url:absoluteUrl+'/'+controlador+'/create/',
           beforeSend:function(){
                 $('#modal .modal-body').html('');
                 $('#modal .titulo_modal').html('Crear');
                 $('#modal .modal-body').addClass('loading');

                },

           success: function(data) {
                        $("#modal .modal-body").removeClass("loading");
                        $("#modal .modal-body").html(data);
              },
           error : function(jqXHR, status, error) {
                        $("#modal .modal-body").removeClass("loading");
                        if(error=="Forbidden"){
                            $("#modal .modal-body").html('<div class="alert in alert-block fade alert-error"><strong>Oops!</strong> Usted no esta Autorizado a realizar esta accion</div>');
                        }else{
                            $("#modal .modal-body").html('<div class="alert in alert-block fade alert-error"><strong>Oops!</strong> Ha ocurrido un error inesperado</div>');
                        }
                       },
            });

}


function cargarModalEliminar(id,controlador,absoluteUrl){
     if(confirm('¿Desea eliminar este elemento?')) {
      jQuery('#modal').modal({'show':true});
      $.ajax({
             type: 'POST',
             url:absoluteUrl+'/'+controlador+'/delete/'+id+'/',
             
             beforeSend:function(){

                   $('#modal .modal-body').html('');
                   $('#modal .titulo_modal').html('Eliminar');
                   $('#modal .modal-body').addClass('loading');
                  },

             success: function(data) {
                          $('#content').html(data);
                          $('#modal .modal-body').removeClass("loading");
                          $('#modal .modal-body').html('<div class="alert in alert-block fade alert-success"><strong>Bien hecho!</strong> Dato eliminado con exito.. </div>');
                          $('.modal-backdrop').css('display','none');
                            setTimeout( function() {
                              document.location.href = absoluteUrl+'/'+controlador+'/admin/';
                            }, 2000);
                          
             },
             error : function(jqXHR, status, error) {
                          $("#modal .modal-body").removeClass("loading");
                          if(error=="Forbidden"){
                              $("#modal .modal-body").html('<div class="alert in alert-block fade alert-error"><strong>Oops!</strong> Usted no esta Autorizado a realizar esta accion</div>');
                          }else{
                              $("#modal .modal-body").html('<div class="alert in alert-block fade alert-error"><strong>Oops!</strong> Error al intentar eliminar</div>');
                          }
                         },
              });
     }
}


