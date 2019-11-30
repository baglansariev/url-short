<?php if(isset($header)) echo $header; ?>

<main>
    <section class="main-section">
        <div class="container">
            <h3 class="row-title">Введите вашу ссылку</h3>
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <form method="post" class="url-form d-flex justify-content-between">
                        <input type="text" name="url" class="url-input" placeholder="http://example-domain.com">
                        <button type="button" class="gen-btn" onclick="myUrl.shorten()">Укоротить</button>
                    </form>
                </div>
                <div class="col-sm-12">
                    <h3 class="row-subtitle">Результат:</h3>
                </div>
                <div class="result-row col-sm-12">
                    <div class="url-form d-flex justify-content-between">
                        <p id="url-result" class="url-input">http://ls/ссылка</p>
                        <button type="button" class="gen-btn custom-btn copy-btn" data-clipboard-target="#url-result">Скоприровать</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php if(isset($footer)) echo $footer; ?>

