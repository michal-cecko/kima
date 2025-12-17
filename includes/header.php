<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - My Website' : 'My Website'; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="site-header">
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="/">My Website</a>
            </div>
            <ul class="nav-menu">
                <li><a href="/">Domov</a></li>
                <li><a href="/about">Produkty</a></li>
            </ul>
        </div>
    </nav>
</header>