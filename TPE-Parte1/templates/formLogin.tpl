{include file="header.tpl"}

<form class="uk-position-center" action="login" method="POST">

    <div class="uk-margin">
        <div class="uk-inline" >
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="email" placeholder="Usuario" name="user" required>
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon" uk-icon="icon: lock"></span>
            <input class="uk-input" type="password" placeholder="Password" name="pass">
        </div>
    </div>

    {if $error}
        <div class="uk-margin">
            <div class="uk-inline" >
                <span class="uk-form-icon" uk-icon="icon: warning"></span>
                <input class="uk-input" type="text" placeholder="Usuario" value="{$error}">
            </div>
        </div>
    {/if}

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: sign-in"></span>
            <input class="uk-input uk-button uk-button-primary" type="submit" name="login" value="Iniciar Sesion">
        </div>
    </div>

</form>

{include file="footer.tpl"}