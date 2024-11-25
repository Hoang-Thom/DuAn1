/* ---------------------------------------- banner ---------------------------------------- */

document.addEventListener("DOMContentLoaded", () => {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.banner-slide, .banner-slide2');
    const prevBtn = document.querySelector('.banner-prev');
    const nextBtn = document.querySelector('.banner-next');

    if (prevBtn && nextBtn) { // Kiểm tra xem các nút có tồn tại không
        function changeSlide(n) {
            currentSlide += n;
            if (currentSlide < 0) {
                currentSlide = slides.length - 1;
            } else if (currentSlide >= slides.length) {
                currentSlide = 0;
            }
            showSlide(currentSlide);
        }

        function showSlide(n) {
            slides.forEach((slide, index) => {
                slide.style.display = index === n ? 'block' : 'none';
            });
        }

        prevBtn.addEventListener('click', () => changeSlide(-1));
        nextBtn.addEventListener('click', () => changeSlide(1));

        // Tự động chuyển slide mỗi 3 giây
        setInterval(() => {
            changeSlide(1);
        }, 3000);
    } else {
        console.error('Nút trước hoặc nút tiếp theo không tồn tại!');
    }
});

/* ---------------------------------------- products ---------------------------------------- */

let currentProduct = 0;
    const products = document.querySelectorAll('.product');
    const productsContainer = document.querySelector('.product-list');
    const prevBtnPro = document.querySelector('.products-prev');
    const nextBtnPro = document.querySelector('.products-next');
    const visibleProductsCount = 4; // Số sản phẩm hiển thị cùng một lúc

    if (prevBtnPro && nextBtnPro && products.length > 0) { // Kiểm tra các nút và sản phẩm có tồn tại không
        // Nhân đôi danh sách sản phẩm để tạo hiệu ứng vòng quanh
        const productsArray = Array.from(products);
        productsArray.forEach((product) => {
            productsContainer.appendChild(product.cloneNode(true));
        });

        function changeProduct(n) {
            currentProduct += n;

            // Quay lại hoặc tiến tới sản phẩm tiếp theo
            if (currentProduct < 0) {
                currentProduct = products.length - 1; // Chuyển về sản phẩm cuối cùng
            } else if (currentProduct >= products.length) {
                currentProduct = 0; // Quay về sản phẩm đầu
            }

            // Cập nhật hiển thị sản phẩm
            updateProductDisplay();
        }

        function updateProductDisplay() {
            // Tính toán vị trí mới của danh sách sản phẩm
            const offset = -currentProduct * (100 / visibleProductsCount);
            productsContainer.style.transform = `translateX(${offset}%)`;
        }

        // Sự kiện cho nút trước và tiếp theo
        prevBtnPro.addEventListener('click', () => changeProduct(-1));
        nextBtnPro.addEventListener('click', () => changeProduct(1));

        // Tự động chuyển sản phẩm mỗi 3 giây
        setInterval(() => {
            changeProduct(1);
        }, 3000);

        // Hiển thị sản phẩm ban đầu
        updateProductDisplay();
    } else {
        console.error('Nút sản phẩm không tồn tại hoặc không có sản phẩm!');
    }


/* ---------------------------------------- cake-types ---------------------------------------- */

const images = [
    "../public/img/cake-type-02.jpg",
    "../public/img/cake-type-03.jpg",
    "../public/img/cake-type-04.jpg",
    "../public/img/cake-type-05.jpg",
    "../public/img/cake-type-06.jpg",
    "../public/img/cake-type-07.jpg",
    "../public/img/cake-type-08.jpg",
    "../public/img/cake-type-09.jpg",
    "../public/img/cake-type-10.jpg",
    "../public/img/cake-type-11.jpg",
    "../public/img/cake-type-12.jpg"
];
let currentIndex = 0;

// Hàm thay đổi ảnh
function changeImage() {
    currentIndex++;

    // Quay lại ảnh đầu tiên nếu đã hết ảnh trong danh sách
    if (currentIndex >= images.length) {
        currentIndex = 0;
    }

    // Thay đổi ảnh bằng chỉ số hiện tại
    document.getElementById("myImage").src = images[currentIndex];
}

// Tự động thay đổi ảnh sau mỗi 3 giây (3000ms)
setInterval(changeImage, 3000);

/* ---------------------------------------- detail image ---------------------------------------- */

// function changeImage(thumbnail) {
//     // Lấy đường dẫn của ảnh nhỏ được nhấp
//     var newSrc = thumbnail.src;
//     // Cập nhật đường dẫn ảnh lớn
//     document.getElementById('mainImage').src = newSrc;
// }
