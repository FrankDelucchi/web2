{include file="header.tpl"}

<hr class="uk-divider-icon">

<form class="uk-grid-small" uk-grid action="add" method="POST">
   
    <div class="uk-width-1-5@s">
        <input class="uk-input" type="text" placeholder="Producto" name="producto" required>
    </div>
    <div class="uk-width-1-5@s">
        <input class="uk-input" type="text" placeholder="Descripcion" name="descripcion" required>
    </div>
    <div class="uk-width-1-5@s">
        <input class="uk-input" type="text" placeholder="Precio" name="precio" required>
    </div>
    <div class="uk-width-1-5@s">
        <input class="uk-input" type="text" placeholder="Imagen asociada (URL)" name="imagen" required>
    </div>
    <div class="uk-width-1-5@s">
    <input class="uk-input" type="number" placeholder="ID_REFERENCIA" name="fk" required>
    </div>
    <div class="uk-width-1-1">
        <input class="uk-input uk-button uk-button-secondary"  type="submit" name="Add" value="Add">
    </div>
    
</form>

<hr class="uk-divider-icon">

<table class="uk-table uk-table-middle uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">Producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
       
        {foreach $products as $product}
                <tr>
                    <td>{$product->id_producto}
                    <td>{$product->producto}</td>
                    <td>{$product->descripcion|truncate:100}</td>
                    <td>{$product->precio}</td>
                    <td>{$product->imagen}</td>
                    <td><button class="uk-button uk-button-primary"><a class ="button-link" href="edit">Edit</a></button></td>
                    <td><button class="uk-button uk-button-danger"><a class ="button-link" href="delete/{$product->id_producto}">Delete</a></button></td>
                </tr>
        {/foreach}

    </tbody>
</table>    

{include file="footer.tpl"}