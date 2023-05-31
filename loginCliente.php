<main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <form class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Identifique-se, por favor</h1>

                        <div class="form-floating mb-3">
                            <input type="email" id="txtEmail" class="form-control" placeholder=" " autofocus>
                            <label for="txtEmail">E-mail</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="txtSenha" class="form-control" placeholder=" ">
                            <label for="txtSenha">Senha</label>
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" value="" id="chkLembrar">
                            <label for="chkLembrar" class="form-check-label">Lembrar de mim</label>
                        </div>

                        <button type="button" onclick="window.location.href='/cliente_pedidos.html'"
                            class="btn btn-lg btn-danger">Entrar</button>

                        <p class="mt-3">
                            Ainda não é cadastrado? <a href="index.php?link=3">Clique aqui</a> para se cadastrar.
                        </p>

                        <p class="mt-3">
                            Esqueceu sua senha? <a href="index.php?link=4">Clique aqui</a> para recuperá-la.
                        </p>
                    </form>
                </div>
            </div>
        </main>