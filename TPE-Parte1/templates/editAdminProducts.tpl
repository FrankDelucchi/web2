{include file="header.tpl"}

<table class="uk-table uk-table-middle uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">ID_Producto</th>
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
       
        {foreach $products as $product}
            <tr>
                <form class="uk-grid-small" uk-grid action="updateProduct/{$product->id_producto}" method="POST">
                    <td class="uk-width-1-5@s">
                        <input class="uk-input" type="text" placeholder="Producto" name="producto" value="{$product->id_producto}" disabled>
                    </td>
                    <td class="uk-width-1-5@s">
                        <input class="uk-input" type="text" placeholder="Producto" name="producto" value="{$product->producto}">
                    </td>
                    <td class="uk-width-1-5@s">
                        <input class="uk-input" type="text" placeholder="Descripcion" name="descripcion" value="{$product->descripcion|truncate:100}">
                    </td>
                    <td class="uk-width-1-5@s">
                        <input class="uk-input" type="text" placeholder="Precio" name="precio" value="{$product->precio}">
                    </td>
                    <td class="uk-width-1-5@s">
                        <input class="uk-input" type="text" placeholder="Imagen asociada (URL)" name="imagen" value="{$product->imagen}">
                    </td>
                    <td>
                        <div class="uk-width-1-1">
                            <input class="uk-input uk-button uk-button-primary" type="submit" name="updateProduct" value="modify">
                        </div>
                    </td>
                </form>
            </tr>
        {/foreach}

    </tbody>
</table>

{include file="footer.tpl"}