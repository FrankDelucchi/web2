<div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s uk-text-center" uk-grid>
    <ul>
        {foreach $products as $product}
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <a href="product"><img src="assets/images/adidas-dame-8.jpg"></a>
                    <h4>{$product->producto}</h4>
                    <h5>{$product->descripcion|truncate:50}</h5>
                </div>
            </div>
        {/foreach}
    </ul>
</div>
