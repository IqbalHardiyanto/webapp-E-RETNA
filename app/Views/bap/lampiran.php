<!DOCTYPE html>
<html>

<head>
    <title>Lampiran RM Dimusnahkan</title>
</head>

<body>
    <h1>Daftar RM Yang Telah Dimusnahkan</h1>

    <?php if (empty($files)) : ?>
        <p>Tidak ada lampiran tersedia.</p>
    <?php else : ?>
        <ul>
            <?php foreach ($files as $file) : ?>
                <li>
                    <a href="<?= site_url('upload/downloadLampiran/' . $file) ?>">
                        <?= $file ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>

</html>