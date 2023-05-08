<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1">
        <title><?= $page->title() ?> &mdash; <?= $site->og_title() ?></title>

        <link rel="shortcut icon" href="/assets/favicons/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="/assets/favicons/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-touch-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon-180x180.png" />

        <link rel="stylesheet" href="/assets/styles/styles.css">

        <meta property="og:title" content="<?= $page->title() ?> &mdash; <?= $site->og_title() ?>"/>
        <?php if($site->og_description() != ''): ?>
        <meta property="og:description" content="<?= $site->og_description() ?>"/>
        <?php endif ?>
        <?php if($site->og_image()->notEmpty()): ?>
        <meta property="og:image" content="<?= $site->og_image()->toFile()->crop(1200, 630, [
            'quality' => '90',
            'crop' => 'center'
        ])->url() ?>"/>
        <meta property="og:image:width" content="1200"/>
        <meta property="og:image:height" content="630"/>
        <?php endif ?>

    </head>
    <body class="overflow-x-hidden">