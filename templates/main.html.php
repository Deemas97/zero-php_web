<?php $this->extend('base.html.php') ?>

<?php $this->startSection('content') ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <?php $this->includeComponent('components/main/hero_section.html.php', $data ?? []) ?>
    </section>

    <!-- Platform Section -->
    <section id="platform">
        <?php $this->includeComponent('components/main/platform_section.html.php', $data ?? []) ?>
    </section>

    <!-- Platform About Section -->
    <section id="platform_about" class="solutions-section">
        <?php $this->includeComponent('components/main/platform_about_section.html.php', $data ?? []) ?>
    </section>

    <!-- Production -->
    <section id="production">
        <?php $this->includeComponent('components/main/production_section.html.php', $data ?? []) ?>
    </section>

    <!-- Production Pricing Section -->
    <section id="production_pricing" class="solutions-section">
        <?php $this->includeComponent('components/main/production_pricing_section.html.php', $data ?? []) ?>
    </section>

    <!-- Producing Section -->
    <section id="producing" class="features-section">
        <?php $this->includeComponent('components/main/producing_section.html.php', $data ?? []) ?>
    </section>

    <!-- Producing Pricing Section -->
    <section id="producing_pricing" class="solutions-section">
        <?php $this->includeComponent('components/main/producing_pricing_section.html.php', $data ?? []) ?>
    </section>

    <!-- Contact Section -->
    <section id="contacts" class="contact-section">
        <?php $this->includeComponent('components/main/contacts_section.html.php', $data ?? []) ?>
    </section>
<?php $this->endSection() ?>

<?php $this->startSection('scripts') ?>
<script src="/assets/js/main.js"></script>
<?php $this->endSection() ?>