{include file="header.tpl"}

<table class="uk-table uk-table-middle uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">ID_Producto</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
       
        {foreach $singleCategories as $singlecategorie}
            <tr>
                <form class="uk-grid-small" uk-grid action="updateCategorie/{$singlecategorie->id_categoria}" method="POST">
                    <td class="uk-width-1-5@s">
                        <input class="uk-input" type="text" name="id_categoria" value="{$singlecategorie->id_categoria}" disabled>
                    </td>
                    <td class="uk-width-1-5@s">
                        <input class="uk-input" type="text" name="categoria" value="{$singlecategorie->categoria}">
                    <td>
                        <div class="uk-width-1-1">
                            <input class="uk-input uk-button uk-button-primary" type="submit" name="updateCategorie" value="modify">
                        </div>
                    </td>
                </form>
            </tr>
        {/foreach}

    </tbody>
</table>

{include file="footer.tpl"}