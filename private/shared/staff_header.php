<?php
if (!isset($page_title)) {
    $page_title = 'Staff Area';
}
?>

<!doctype html>

<html lang="en" class="h-full">
<head>
    <title>Chain Gang - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col h-full">
<div class="flex-1">
    <header class="bg-teal-700 p-3 shadow">
        <h1 class="text-white text-2xl font-thin">Chain Gang | Staff Area</h1>
    </header>

    <nav class="bg-gray-300 p-3">
        <ul>
            <li><a class="px-2 py-1 rounded font-semibold hover:text-white hover:bg-teal-800"
                   href="<?php echo url_for('/staff/index.php'); ?>">Home</a></li>
        </ul>
    </nav>

<?php echo display_session_message(); ?>
