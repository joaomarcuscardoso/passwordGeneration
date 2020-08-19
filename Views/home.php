<div class="row" id="container-month">
    <div class="col-sm-7 passowrd-col">
        <div class="select-generation-col">

            <?php if(!empty($messages_error)): ?>
                <div class="alert alert-danger" style="margin-top:10px;" role="alert"><?php echo $messages_error; ?></div>
                
            <?php endif; ?>
            <form action="<?php echo BASE_URL ?>"  method="GET" class="form-group form-password-generation">
                <input type="hidden" value="1" name="form_submit" />

                <label for="password_length" class="labelGeneration">Tamanho</label>
                <input type="text"class="inputGeneration" id="password_length" name="password_length" />
                <div class="container-checkbox">

                    <div class="list-checkbox">
                        <input type="checkbox" id="upperLetters" name="upperLetters" />
                        <label for="upperLetters" class="labelGeneration">Letras maiúsculas </label>

                    </div>

                    <div class="list-checkbox">
                        <input type="checkbox" id="lowerLetters"  name="lowerLetters" />
                        <label for="lowerLetters" class="labelGeneration">Letras minúscula </label>

                    </div>
                    <div class="list-checkbox">
        
                        <input type="checkbox" id="numbers" name="numbers" />
                        <label  for="numbers" class="labelGeneration">Números</label>

                    </div>
                    <div class="list-checkbox">
        
                        <input type="checkbox" id="symbolos" name="symbolos" />
                        <label for="symbolos" class="labelGeneration">Símbolos</label>

                    </div>
    
                </div>
                <input style="margin-top:10px;" type="submit"  class="btn btn-success form-control" value="Gerar senha" />
            </form>

        </div>


        <div class="form-group container-result-generation">
            <label for="passwordResult"  class="labelPasswordResult">Senha Gerada</label>
            <div class="cols-result-generation">

                <input type="text" name="password" id="passwordResult" class="form-control" value="<?php echo utf8_encode($user_password_generation); ?>"/>
                <a href="#" onclick="clickCopyBoard()" class="link-container-copyboard">              
                    <div class="container-copyboard">
        
                        <svg width="2.2em" height="2.2em" color="#ccc" viewBox="0 0 16 16" class="bi bi-clipboard" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                            <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                            <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        <div class="container-verification-seguration">
              <div id="progressbar" class="cols-verification-seguration">
                <div id="pass-info1"></div>
                <div id="pass-info2"></div>
                <div id="pass-info3"></div>
                <div id="pass-info4"></div>
                <div id="pass-info5"></div>
              </div>  
        
        </div>


    </div> 
</div>


