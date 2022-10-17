
{include file="header.tpl"}

<hr class="uk-divider-icon">

<form class="uk-grid-small" uk-grid action="addCategorie" method="POST">

    <div class="uk-width-1-3@s">
        <input class="uk-input" type="text" placeholder="Categoria" name="categoria" required>
    </div>

    <div class="uk-width-1-3@s">
        <input class="uk-input uk-button uk-button-secondary"  type="submit" name="addCategorie" value="Add">
    </div>
    
</form>

<hr class="uk-divider-icon">

<table class="uk-table uk-table-middle uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">ID_categoria</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
       
        {foreach $categories as $categorie}
                <tr>
                    <td>{$categorie->id_categoria}</td>
                    <td>{$categorie->categoria}</td>
                    <td><button class="uk-button uk-button-primary"><a class ="button-link" href="editCategorie/{$categorie->id_categoria}">Edit</a></button></td>
                    <td><button class="uk-button uk-button-danger"><a class ="button-link" href="deleteCategorie/{$categorie->id_categoria}">Delete</a></button></td>
                </tr>
        {/foreach}

    </tbody>
</table>    

{include file="footer.tpl"}