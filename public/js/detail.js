// detail.js
const btnIncreaseDetail = document.querySelector('.btn-increase-detail');
const btnDecreaseDetail = document.querySelector('.btn-decrease-detail');
const quantityInputDetail = document.querySelector('.quantity');

// Lấy giá trị min và max từ thuộc tính của input
const minValueDetail = parseInt(quantityInputDetail.getAttribute('min'));
const maxValueDetail = parseInt(quantityInputDetail.getAttribute('max'));

// Tăng số lượng
btnIncreaseDetail.addEventListener('click', (event) => {
    event.preventDefault(); // Ngăn chặn hành vi mặc định
    let currentValue = parseInt(quantityInputDetail.value);
    if (currentValue < maxValueDetail) { // Kiểm tra nếu chưa vượt quá giá trị tối đa
        quantityInputDetail.value = currentValue + 1;
    }
});

// Giảm số lượng
btnDecreaseDetail.addEventListener('click', (event) => {
    event.preventDefault(); // Ngăn chặn hành vi mặc định
    let currentValue = parseInt(quantityInputDetail.value);
    if (currentValue > minValueDetail) { // Kiểm tra nếu chưa giảm xuống dưới giá trị tối thiểu
        quantityInputDetail.value = currentValue - 1;
    }
});