<div class="col-md-12 feature-card">
    <div class="card card-fashion">
        <div class="row g-12">
            <!-- Content Column -->
            <div class="col-lg-5">
                <div class="card-content p-4 p-lg-5 h-100">
                    <h3 class="card-title">Fashion-видео</h3>
                    <p class="card-text">
                        Визуальное искусство<br>для индустрии моды:
                    </p>
                    <ul class="fashion-features">
                        <li><i class="fas fa-camera"></i> Съёмка лукбуков, кампейнов, контента для брендов</li>
                        <li><i class="fas fa-lightbulb"></i> Профессиональное освещение, работа с моделями</li>
                        <li><i class="fas fa-edit"></i> Тщательная композиция и обработка</li>
                    </ul>
                </div>
            </div>
            
            <!-- Gallery Column -->
            <div class="col-lg-7">
                <div class="card-gallery card-fashion-gallery swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-slide" data-bs-toggle="modal" data-bs-target="#fashionModal" data-img="/assets/img/fashion/1.JPG">
                                <img src="/assets/img/fashion/1.JPG" alt="Fashion превью 1" class="img-fluid">
                                <div class="slide-overlay">
                                    <i class="fas fa-expand"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide" data-bs-toggle="modal" data-bs-target="#fashionModal" data-img="/assets/img/fashion/2.JPG">
                                <img src="/assets/img/fashion/2.JPG" alt="Fashion превью 2" class="img-fluid">
                                <div class="slide-overlay">
                                    <i class="fas fa-expand"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide" data-bs-toggle="modal" data-bs-target="#fashionModal" data-img="/assets/img/fashion/3.JPG">
                                <img src="/assets/img/fashion/3.JPG" alt="Fashion превью 3" class="img-fluid">
                                <div class="slide-overlay">
                                    <i class="fas fa-expand"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide" data-bs-toggle="modal" data-bs-target="#fashionModal" data-img="/assets/img/fashion/4.JPG">
                                <img src="/assets/img/fashion/4.JPG" alt="Fashion превью 4" class="img-fluid">
                                <div class="slide-overlay">
                                    <i class="fas fa-expand"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for fullscreen images -->
<div class="modal fade" id="fashionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="modalImage" src="" alt="" class="img-fluid" style="max-height: 80vh; width: auto;">
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-outline-light mx-2" id="prevImage">
                    <i class="fas fa-chevron-left"></i> Назад
                </button>
                <button type="button" class="btn btn-outline-light mx-2" id="nextImage">
                    Вперед <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>