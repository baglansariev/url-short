<?php if(isset($header)) echo $header; ?>

<main>
    <section class="main-section">
        <div class="container">
            <h3 class="row-title">Список ссылок</h3>
            <div class="row">
                <div class="col-lg-12">
                    <?php if(isset($url_list)) echo $url_list; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php if(isset($footer)) echo $footer; ?>
