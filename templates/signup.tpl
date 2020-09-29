{include file="./head.tpl"}

<body>
{include file="./navbar.tpl"}
    <section class="container-fluid bg">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-6">
                <form class="form-container" action="signup" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password-repeat" placeholder="Repeat Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="signup-submit">SignUp</button>
                    </div>
                    {if $error_code != null}
                        <div class="alert alert-danger" role="alert">
                            {$error_code}
                        </div>
                    {/if}
                </form>
            </section>
        </section>
    </section>
</body>