<?php if(isset($header)) echo $header; ?>

    <main>
        <div class="container">
            <h3 class="row-title">Регистрация нового пользователя</h3>

            <?php if(isset($error_msg)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error_msg; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif(isset($success_msg)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success_msg; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <form class="register-form" method="post">
                        <div class="form-group">
                            <label for="inputLogin">Имя пользователя</label>
                            <input type="text" name="reg_login" class="form-control" id="inputLogin" aria-describedby="emailHelp" placeholder="Имя пользователя" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Пароль</label>
                            <input type="password" name="reg_password" class="form-control" id="inputPassword" placeholder="Пароль" required>
                        </div>
                        <div class="form-group">
                            <label for="inputConfirm">Подтверждение пароля</label>
                            <input type="password" name="reg_confirm" class="form-control" id="inputConfirm" placeholder="Подтверждение пароля" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Регистрация</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php if(isset($footer)) echo $footer; ?>