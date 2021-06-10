<form id="formulario" action="./index.php?controller=main&action=create" method="post">

  <div class="form-group">
    <label> Nombre del producto </label>
    <input type='text' class="form-control" id="nombre" name="prueba[nombre_producto]" id='nombre_producto'  value="<?= isset($row) ? $row->nombre_producto : null ?>" required/>
  </div>
  <div class="form-group">
    <label> Referencia </label>
    <input type='text' class="form-control" id="referencia" name="prueba[referencia]" value="<?= isset($row) ? $row->referencia : null ?>" required/>
  </div>
  <div class="form-group">
    <label> Precio </label>
    <input type='number' class="form-control" id="precio" name="prueba[precio]" value="<?= isset($row) ? $row->precio : null ?>" required/>
  </div>
  <div class="form-group">
    <label> Peso </label>
    <input type='number' class="form-control" id="peso" name="prueba[peso]" value="<?= isset($row) ? $row->peso : null ?>" required pattern=[0-9]/>
  </div>
  <div class="form-group">
    <label> Categoría </label>
    <input type='text' class="form-control" id="categoria" name="prueba[categoria]"  value="<?= isset($row) ? $row->categoria : null ?>" required/>
  </div>
  <div class="form-group">
    <label> Stock </label>
    <input type='number'class="form-control" id="stock" name="prueba[stock]" value="<?= isset($row) ? $row->stock : null ?>" required/>
  </div>
  <div class="form-group">
    <label> Fecha de Creacion </label>
    <input type='date'class="form-control" id="fecha_creacion" name="prueba[fecha_creacion]" value="<?= date('Y-m-d')?>" required/>
  </div>
  <div class="form-group">
    <label> Fecha de ultima venta </label>
    <input type='datetime'class="form-control" id="fecha_venta" name="prueba[fecha_venta]" value="<?= isset($row) ? $row->fecha_venta : null ?>" />
  </div>
  <input type="submit" value="Guardar" class="btn btn-success" />

</form>