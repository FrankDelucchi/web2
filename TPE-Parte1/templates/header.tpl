<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>FranZket</title>
</head>

<body>
    <nav class="uk-navbar-container" uk-navbar>

            <div class="logo">
                <a class="uk-logo" href="home">
                    <img src="assets/images/logo.jpg" width="60%" alt="logo ecommerce">
                </a>
            </div>

        <div class="uk-navbar-left">
            
            <ul class="uk-navbar-nav">
                <li><a href="home">Home</a></li>
                <li>
                    <a>Categorias</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            {foreach $categories as $categorie}
                                <li class="uk-active"><a href="categorias/{$categorie->id_categoria}">{$categorie->categoria}</a></li>
                            {/foreach}
                        </ul>
                    </div>
                </li>
                {if isset($smarty.session.USERNAME)}
                    <li><a href="adminProducts">Administrar productos</a></li>
                    <li><a href="adminCategories">Administrar categorias</a></li>
                    <li><a href="exit">Logout</a></li>
                {else}
                    <li><a href="login">Administrador</a></li>
                {/if}
            </ul>

        </div>
        
    </nav>