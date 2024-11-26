const categories = [
    {
        prevBtn: '.cakes-prev',
        nextBtn: '.cakes-next',
        itemList: '.cakes-list',
    },
    {
        prevBtn: '.pies-prev',
        nextBtn: '.pies-next',
        itemList: '.pies-list',
    },
    {
        prevBtn: '.bread-prev',
        nextBtn: '.bread-next',
        itemList: '.bread-list',
    },
    {
        prevBtn: '.tiramisu-prev',
        nextBtn: '.tiramisu-next',
        itemList: '.tiramisu-list',
    },
    {
        prevBtn: '.cupcakes-prev',
        nextBtn: '.cupcakes-next',
        itemList: '.cupcakes-list',
    },
    {
        prevBtn: '.pudding-prev',
        nextBtn: '.pudding-next',
        itemList: '.pudding-list',
    },
    {
        prevBtn: '.chees-prev',
        nextBtn: '.chees-next',
        itemList: '.chees-list',
    },
    {
        prevBtn: '.cookies-prev',
        nextBtn: '.cookies-next',
        itemList: '.cookies-list',
    }
];

categories.forEach(category => {
    let currentIndex = 0;
    const items = document.querySelectorAll(category.itemList + ' .item'); // Adjust for item class
    const visibleCount = 4;

    function updateDisplay() {
        items.forEach((item, index) => {
            item.style.display = (index >= currentIndex && index < currentIndex + visibleCount) ? 'block' : 'none';
        });
    }

    function changeIndex(n) {
        currentIndex += n;
        if (currentIndex < 0) {
            currentIndex = Math.max(items.length - visibleCount, 0);
        } else if (currentIndex >= items.length) {
            currentIndex = 0;
        }
        updateDisplay();
    }

    const prevButton = document.querySelector(category.prevBtn);
    const nextButton = document.querySelector(category.nextBtn);
    
    if (prevButton) {
        prevButton.addEventListener('click', () => changeIndex(-1));
    }
    if (nextButton) {
        nextButton.addEventListener('click', () => changeIndex(1));
    }

    // Initial display
    updateDisplay();
});


document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id'); // Lấy giá trị từ URL

    // Kiểm tra và cuộn đến phần tử
    if (id) {
        const element = document.getElementById(id);
        if (element) {
            console.log(`Scrolling to element with id: ${id}`);
            element.scrollIntoView({ behavior: 'smooth' });

            // Tính toán vị trí cuộn
            const offset = 120; // Khoảng cách từ top
            const elementPosition = element.getBoundingClientRect().top + window.scrollY; // Vị trí của phần tử
            const offsetPosition = elementPosition - offset; // Vị trí cuộn với offset

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        } else {
            console.error(`Element with id '${id}' not found.`);
        }
    } else {
        console.warn('No id parameter found in the URL.');
    }
});
