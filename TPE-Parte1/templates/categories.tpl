{include file="header.tpl"}

<ul class="uk-list uk-list-divider">
    {foreach $categories as $categorie}
        <li><a href="product/{$categorie->categoria}">{$categorie->categoria}</a></li>
    {/foreach}
</ul>


{include file="footer.tpl"}