<?php $this->extend('base.html.php') ?>

<?php $this->startSection('content') ?>
<div class="error-container">
    <div class="error-content text-center">
        <div class="container">
            <div class="error-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <h1 class="error-title">404 - Страница не найдена</h1>
            <p class="error-text">
                Кажется, мы не можем найти то, что вы ищете. Возможно, страница была перемещена или удалена.
                Попробуйте вернуться на главную или воспользуйтесь навигацией.
            </p>
            <div class="error-actions">
                <a href="/" class="btn btn-primary me-3">
                    <i class="fas fa-home me-2"></i>На главную
                </a>
                <a href="https://t.me/alliance_prodvigenie" class="btn btn-outline-primary" target="_blank">
                    <i class="fab fa-telegram me-2"></i>Наш Telegram-канал
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->startSection('styles') ?>
<link rel="stylesheet" href="/assets/css/error.css">
<?php $this->endSection() ?>

<?php $this->startSection('scripts') ?>
<script src="/assets/js/error.js"></script>
<?php $this->endSection() ?>