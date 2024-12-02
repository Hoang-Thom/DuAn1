document.addEventListener("DOMContentLoaded", function() {
    const teamContainer = document.querySelector('.team-container');
    const teamMembers = document.querySelectorAll('.team-member');
    const prevBtn = document.querySelector('.prev-team');
    const nextBtn = document.querySelector('.next-team');

    if (teamMembers.length > 0) {
        // Nhân đôi thành viên
        teamMembers.forEach(member => {
            const clone = member.cloneNode(true);
            teamContainer.appendChild(clone);
        });

        let currentIndex = 0;
        const itemsToShow = 3; // Số lượng thành viên hiển thị
        const totalMembers = teamContainer.querySelectorAll('.team-member').length; // Cập nhật tổng số thành viên
        const intervalTime = 3000; // Thời gian chuyển động (3 giây)

        function updateDisplay() {
            // Tính toán offset dựa trên currentIndex
            const offset = -currentIndex * (100 / itemsToShow);
            const allMembers = teamContainer.querySelectorAll('.team-member');
            allMembers.forEach(member => {
                member.style.transform = `translateX(${offset}%)`;
                member.style.transition = 'transform 0.5s ease';
            });
        }

        function changeIndex(n) {
            currentIndex += n;

            // Cập nhật currentIndex để không vượt quá số lượng thành viên
            if (currentIndex < 0) {
                currentIndex = Math.max(totalMembers - itemsToShow, 0); // Quay lại cuối nếu không đủ thành viên
            } else if (currentIndex >= totalMembers) {
                currentIndex = 0; // Quay về đầu
            }

            updateDisplay();
        }

        prevBtn.addEventListener('click', () => changeIndex(-1));
        nextBtn.addEventListener('click', () => changeIndex(1));

        const intervalId = setInterval(() => changeIndex(1), intervalTime);
        prevBtn.addEventListener('click', () => clearInterval(intervalId));
        nextBtn.addEventListener('click', () => clearInterval(intervalId));

        updateDisplay(); // Khởi tạo hiển thị ban đầu
    } else {
        console.error('Không có thành viên nào!');
    }
});