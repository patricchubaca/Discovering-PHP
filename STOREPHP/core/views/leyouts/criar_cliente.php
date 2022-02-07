<div class="container">
    <div class="row my-5">
        <div class="col-sm-6 offset-sm-3">
            <h3 class="text-center">Registo de Novo Cliente</h3>

            <form action="?a=criar_cliente" method="post">

                <!-- email -->
                <div class="my-3">
                    <label>Email</label>
                    <input type="email" name="text_email" placeholder="Email" class="form-control" required>
                </div>

                <!-- senha_1 -->
                <div class="my-3">
                    <label>Senha</label>
                    <input type="password" name="text_senha_1" placeholder="Senha" class="form-control" required>
                </div>

                <!-- senha_2 -->
                <div class="my-3">
                    <label>Repetir a senha</label>
                    <input type="password" name="text_senha_2" placeholder="Repetir a senha" class="form-control" required>
                </div>

                <!-- nome_completo -->
                <div class="my-3">
                    <label>Nome completo</label>
                    <input type="text" name="text_nome_completo" placeholder="Nome completo" class="form-control" required>
                </div>
                
                <!-- morada -->
                <div class="my-3">
                    <label>Morada</label>
                    <input type="text" name="text_morada" placeholder="Morada" class="form-control" required>
                </div>

                <!-- cidade -->
                <div class="my-3">
                    <label>Cidade</label>
                    <input type="text" name="text_cidade" placeholder="Cidade" class="form-control" required>
                </div>

                <!-- telefone -->
                <div class="my-3">
                    <label>Telefone</label>
                    <input type="text" name="text_telefone" placeholder="Telefone" class="form-control">
                </div>

                <!-- submit -->
                <div class="my-4">
                    <input type="submit" value="Criar conta" class="btn btn-primary">
                </div>

                <?php if(isset($_SESSION['erro'])):?>
                    <div class="alert alert-danger text-center p-2">
                        <?= $_SESSION['erro'] ?>
                        <?php unset($_SESSION['erro']); ?>
                        <?php ?>
                        
                    </div>
                <?php endif; ?>

            </form>


        </div>
    </div>
</div>

<!-- 

email *
senha_1 *
senha_2 *
nome_completo *
morada *
cidade *
telefone
 -->