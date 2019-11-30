<?php if(isset($header)) echo $header; ?>

<main>
    <div class="container">
        <h3 class="row-title">Вход в личный кабинет</h3>
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <form method="post" class="login-form">
                    <div class="form-group">
                        <label for="inputLogin">Имя пользователя</label>
                        <input type="text" name="login" class="form-control" id="inputLogin" aria-describedby="emailHelp" placeholder="Имя пользователя" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Пароль</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Пароль" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php if(isset($footer)) echo $footer; ?>
