// esto se encarga de abrir el modal 
$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    $("[data-toggle=tooltip]").tooltip();
});


$(document).ready(function(){
    $('.borrar').click(function(){
        $('#borrar-id').val($(this).data('id')); 
    }); 
});

$(document).ready(function(){
    $('#confirmar-borrar').click(function(){
        $('#form-borrar').submit(); 
    }); 
});


function read_checks() {
    // picker para talles 
    if($('.talle-picker:checked').length > 0){
        var talles = []; 
        for (var i = 0; i < $('.talle-picker:checked').length; i++) 
            talles.push($('.talle-picker:checked')[i].value);
        $('#power-talles').val(talles.toString());
        console.log($('#power-talles').val()); 
    }
    // picker para colores
    if($('.color-picker:checked').length > 0){
        var colores = []; 
        for (var i = 0; i < $('.color-picker:checked').length; i++) 
            colores.push($('.color-picker:checked')[i].value);
        $('#power-colours').val(colores.toString());
        console.log($('#power-colours').val()); 
    }
    // comprueva si esta destacado 
    if($('#destacado-picker').is(':checked'))
        $('#power-destacado').val(1); 
    else    
        $('#power-destacado').val(0);
}

// setea los talles 
function set_talles(jsum)
{
    talles = JSON.parse(jsum); 
    for(i=0; i < talles.length; i++){
       $('.talle-picker').each(function(idx){
           if($(this).val() == talles[i]){
               $(this).prop( "checked", true );   
           }
       });      
    }
}

function set_colores(jsum)
{
    colores = JSON.parse(jsum); 
    for(i=0; i < colores.length; i++){
       $('.color-picker').each(function(idx){
           if($(this).val() == colores[i]){
               $(this).prop( "checked", true );       
           }
       });      
    }
}