<div class="container production-section">
    <h2 class="section-title">Видеопродакшн</h2>
    <p class="section-subtitle">Cоздаём визуальные истории, которые работают</p>
    
    <!-- Fashion Block -->
    <div class="row">
        <?php $this->includeComponent('components/main/production/fashion_block.html.php', $data ?? []) ?>
    </div>
    
    <!-- Celebrations Block -->
    <div class="row">
        <?php $this->includeComponent('components/main/production/celebrations_block.html.php', $data ?? []) ?>
    </div>

    <!-- Adverts Block -->
    <div class="row">
        <?php $this->includeComponent('components/main/production/adverts_block.html.php', $data ?? []) ?>
    </div>
    
    <!-- Carousel for md-3 cards -->
    <div class="row">
        <?php $this->includeComponent('components/main/production/other_block.html.php', $data ?? []) ?>
    </div>
</div>