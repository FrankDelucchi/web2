{include file="header.tpl"}



<div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s uk-text-center" uk-grid>
    {foreach $products as $product}
        <div>
            <div class="uk-card uk-card-default uk-card-body" style="height:450px">
                <a href="producto/{$product->id_producto}"><img class="image-product" style="height:150px" src="{$product->imagen}"></a>
                <h4>{$product->producto}</h4>
                <h5>{$product->descripcion|truncate:100}</h5>
            </div>
        </div>
    {/foreach}
</div>



{include file="footer.tpl"}