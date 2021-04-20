
<?php 
include (HTML_DIR. 'include/head.php');
if(isset($_GET['success']))
    echo "<script>swal('La Operacion ha sido realizada con exito','Se ha ".$_GET['success']." un producto','success')</script>"
?>
<div class="container">
    <div class="row">
      <a href="./index.php?view=add" class="btn btn-success new-item"><span class="fa fa-plus-square" aria-hidden="true"></span> Nuevo Item</a>
    </div>    
 <?php if(!empty($items)): ?>
    <div class="row">
      <div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped">
          <thead>
            <th>Codigo</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Editar</th> 
            <th>Eliminar</th>
          </thead>
          <tbody>
      <?php 
        foreach ($items  as $item):
      ?>
            <tr class="registro">
              <td class="codigo"><?=$item['id']?></td>
              <td class="table-titulo"><?=$item['titulo']?></td>
              <td class="parrafo"><?=string_limit($item['descripcion'], 250)?></td>
              <td><a class="btn btn-primary btn-sm" href="index.php?view=edit&id=<?=$item['id']?>" ><span class="glyphicon glyphicon-pencil"></span></a></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-sm borrar" data-title="Delete" data-toggle="modal" data-target="#delete" data-id="<?=$item['id']?>" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr>
        <?php 
          endforeach; 
        ?>  
          </tbody>
        </table>
      </div>
    </div>
 	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
       <div class="modal-dialog">
     <div class="modal-content">
           <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
         <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
       </div>
           <div class="modal-body">
           <div class="form-group">
         <input class="form-control " type="text" placeholder="Mohsin">
         </div>
         <div class="form-group">

         <input class="form-control " type="text" placeholder="Irshad">
         </div>
         <div class="form-group">
         <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


         </div>
       </div>
           <div class="modal-footer ">
         <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
       </div>
         </div>
     <!-- /.modal-content -->
   </div>
       <!-- /.modal-dialog -->
     </div>

           <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
             <div class="modal-dialog">
           <div class="modal-content">
                 <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
               <h4 class="modal-title custom_align" id="Heading">Borrar Producto</h4>
             </div>
                 <div class="modal-body">
              <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Esta seguro de que quiere borrar este producto?</div>

             </div>
               <div class="modal-footer ">
               <button type="button" class="btn btn-success" id='confirmar-borrar'><span class="glyphicon glyphicon-ok-sign"></span> Si</button>
               <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
             </div>
               </div>
           <!-- /.modal-content -->
         </div>
             <!-- /.modal-dialog -->
       </div>
       <!-- hidden form --> 
       <form method="POST" action="index.php?view=database&accion=eliminar" id='form-borrar'>
          <input type="hidden" name="id" value="" id="borrar-id">
       </form>
  </div>
<?php endif; ?>
<?php include(HTML_DIR.'include/footer.php'); ?>
