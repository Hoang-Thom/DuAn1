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
    const items = document.querySelectorAll(category.itemList + ' .cakes-item');
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

    document.querySelector(category.prevBtn).addEventListener('click', () => changeIndex(-1));
    document.querySelector(category.nextBtn).addEventListener('click', () => changeIndex(1));

    // Hiển thị sản phẩm ban đầu
    updateDisplay();
});