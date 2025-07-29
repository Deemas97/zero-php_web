<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Альянс.Продвижение</title>
        <meta name="description" content="AI-инструменты для вирусного контента, обучение SMM и креативное комьюнити">
        <link rel="icon" href="/assets/img/icon.png">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Heebo:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <!-- Custom styles -->
        <link rel="stylesheet" href="/assets/css/styles.css">
        <?= $this->section('styles') ?>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </head>
    <body class="landing-body">
        <!-- Header -->
        <header class="landing-header">
            <?php $this->includeComponent('components/header.html.php', $data ?? []) ?>
        </header>

        <!-- Mobile Menu Overlay -->
        <div class="mobile-menu-overlay"></div>

        <!-- Main Content -->
        <main>
            <?= $this->section('content') ?>
        </main>

        <!-- Footer -->
        <footer class="landing-footer">
            <?php $this->includeComponent('components/footer.html.php', $data ?? []) ?>
        </footer>

        <!-- Additional Scripts -->
        <?= $this->section('scripts') ?>
    </body>
</html>