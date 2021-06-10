<table class="table">
  <thead id="thead" style='background:#dc3545;color:white;'>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Referencia</th>
      <th scope="col">precio</th>
      <th scope="col">Peso</th>
      <th scope="col">Categoria</th>
      <th scope="col">Stock</th>
      <th scope="col">Fecha de creación</th>
      <th scope="col">Fecha de  ultima venta</th>
      
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $key => $value): ?>
    	<tr>
    		<td><?= $value->id ?></td>
    		<td><?= $value->nombre_producto ?></td>
        <td><?= $value->referencia ?></td>
    		<td><?= $value->precio ?></td>
    		<td><?= $value->peso ?></td>
    		<td><?= $value->categoria ?></td>
    		<td><?= $value->stock ?></td>
    		<td><?= $value->fecha_creacion ?></td>
        <td><?= $value->fecha_venta ?></td>
    		
    		<td>
        <a class="btn btn-danger" href="./index.php?controller=main&action=delete&id=<?= $value->id ?>">Borrar</a>
        <a class="btn btn-danger" href="./index.php?controller=main&action=update&id=<?= $value->id ?>">Actualizar</a>
        </td>
    	</tr>
    <?php endforeach;?>
  </tbody>
</table>
<a class="btn btn-danger" href="index.php?controller=main&action=create">Crear</a>