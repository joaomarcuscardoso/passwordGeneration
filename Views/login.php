<div class="row"  style="margin-top:35px;">
        
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 class="title-validation">Entrar na sua conta</h3>
            <form class="form-validation" method="POST">
                <div class="form-container-validation">

                    <label for="name" >Nome</label>
                    <input class="form-control" id="name" name="name" type="text" />

                </div>
                <div class="form-container-validation">

                    <label for="email">E-mail</label>
                    <input class="form-control" id="email" name="email" type="text" /> 
                </div>
                <div class="form-container-validation">

                    <label for="password">Senha</label>
                    <input class="form-control" id="password" name="password" type="password" /> 

                </div>

                <input type="submit" value="Logar" class="btn btn-info form-control" />

            </form>
            <a href="<?php echo BASE_URL; ?>register" class="btn-other-validation" >Criar Conta</button>

        </div>
        <div class="col-sm-2"></div>

</div>