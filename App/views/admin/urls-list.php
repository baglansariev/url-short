<?php if(isset($urls)): ?>
    <table class="url-table" cellspacing="0">
        <thead>
        <tr>
            <th>№</th>
            <th>URL клиента</th>
            <th>Короткий URL</th>
            <th>Дата</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($urls as $url): ?>
                <tr class="<?php echo $url['class'] ?>">
                    <td><?php echo $url['num'] ?></td>
                    <td><?php echo $url['client_url'] ?></td>
                    <td><?php echo $url['shorten_url'] ?></td>
                    <td><?php echo $url['date_insert'] ?></td>
                    <td>
                        <a href="?del=<?php echo $url['id'] ?>" class="action-btn d-flex justify-content-center" title="Удалить">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
