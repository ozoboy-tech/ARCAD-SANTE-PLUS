<?php

declare(strict_types=1);

require_once __DIR__ . '/functions.php';

$basePath = $basePath ?? '';
$pageTitle = $pageTitle ?? 'ARCAD Santé PLUS';
$pageDescription = $pageDescription ??
    'ARCAD Santé PLUS, organisation de santé communautaire au Mali.';
$currentPage = $currentPage ?? '';

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0b3d91">
    <meta name="description" content="<?= e($pageDescription) ?>">
    <title><?= e($pageTitle) ?> | ARCAD Santé PLUS</title>
    <link rel="icon" type="image/svg+xml"
          href="<?= e($basePath) ?>favicon.svg">
    <link rel="stylesheet" href="<?= e($basePath) ?>style.css">
    <script src="<?= e($basePath) ?>java.js" defer></script>
</head>
<body>
<?php require __DIR__ . '/header.php'; ?>

