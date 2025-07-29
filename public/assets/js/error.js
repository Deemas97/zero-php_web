document.addEventListener('DOMContentLoaded', function() {
    // Анимация для кнопок при загрузке
    const buttons = document.querySelectorAll('.error-actions .btn');
    buttons.forEach((btn, index) => {
        setTimeout(() => {
            btn.style.opacity = '1';
            btn.style.transform = 'translateY(0)';
        }, index * 200);
    });
});