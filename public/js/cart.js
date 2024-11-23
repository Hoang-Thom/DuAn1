//tăng giảm số lượng
const btnIncrease = document.querySelector('.btn-increase');
const btnDecrease = document.querySelector('.btn-decrease');
const quantityInput = document.querySelector('.quantity-input');

// Lấy giá trị min và max từ thuộc tính của input
const minValue = parseInt(quantityInput.getAttribute('min'));
const maxValue = parseInt(quantityInput.getAttribute('max'));

// Tăng số lượng
btnIncrease.addEventListener('click', () => {
    let currentValue = parseInt(quantityInput.value);
    if (currentValue < maxValue) { // Kiểm tra nếu chưa vượt quá giá trị tối đa
        quantityInput.value = currentValue + 1;
    }
});

// Giảm số lượng
btnDecrease.addEventListener('click', () => {
    let currentValue = parseInt(quantityInput.value);
    if (currentValue > minValue) { // Kiểm tra nếu chưa giảm xuống dưới giá trị tối thiểu
        quantityInput.value = currentValue - 1;
    }
});