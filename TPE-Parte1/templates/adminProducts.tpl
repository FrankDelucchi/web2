
{include file="header.tpl"}


<hr class="uk-divider-icon">

<form class="uk-grid-small" uk-grid action="addProduct" method="POST">
   
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
            <select class="uk-select" name="fk" required>
                {foreach $categories as $categorie}
                    <option value="{$categorie->id_categoria}">{$categorie->categoria}</option>
                {/foreach}
            </select>
    </div>
    <div class="uk-width-1-1">
        <input class="uk-input uk-button uk-button-secondary"  type="submit" name="addProduct" value="Add">
    </div>
    
</form>

<hr class="uk-divider-icon">

<table class="uk-table uk-table-middle uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">ID_producto</th>
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
       
        {foreach $products as $product}
                <tr>
                    <td>{$product->id_producto}</td>
                    <td>{$product->producto}</td>
                    <td>{$product->descripcion|truncate:100}</td>
                    <td>{$product->precio}</td>
                    <td>{$product->imagen}</td>
                    <td><button class="uk-button uk-button-primary"><a class ="button-link" href="editProduct/{$product->id_producto}">Edit</a></button></td>
                    <td><button class="uk-button uk-button-danger"><a class ="button-link" href="deleteProduct/{$product->id_producto}">Delete</a></button></td>
                </tr>
        {/foreach}

    </tbody>
</table>    

{include file="footer.tpl"}