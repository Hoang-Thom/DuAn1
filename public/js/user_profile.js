document.getElementById("updatePasswordBtn").addEventListener("click", function (event) {
    event.preventDefault(); // Ngăn chặn reload trang

    // Lấy giá trị từ các trường input
    const oldPassword = document.getElementById("oldPassword").value.trim();
    const newPassword = document.getElementById("newPassword").value.trim();
    const confirmPassword = document.getElementById("confirmPassword").value.trim();

    // Kiểm tra trường hợp mật khẩu cũ để trống
    if (!oldPassword) {
        alert("Vui lòng nhập mật khẩu cũ!");
        return;
    }

    // Kiểm tra mật khẩu mới
    if (!newPassword) {
        alert("Vui lòng nhập mật khẩu mới!");
        return;
    }
    if (newPassword.length < 6) {
        alert("Mật khẩu mới phải có ít nhất 6 ký tự!");
        return;
    }

    // Kiểm tra xác nhận mật khẩu
    if (newPassword !== confirmPassword) {
        alert("Mật khẩu mới và xác nhận mật khẩu không khớp!");
        return;
    }

    // Nếu tất cả hợp lệ
    alert("Đổi mật khẩu thành công!");
});

// Lấy tất cả các mục trong menu và các phần nội dung
const menuItems = document.querySelectorAll('.menu-item');
const contentSections = document.querySelectorAll('.box-right');

// Ẩn tất cả nội dung
function hideAllSections() {
    contentSections.forEach(section => {
        section.style.display = 'none';
    });
}

// Hiển thị mặc định chỉ "Tài khoản của tôi" khi vào trang
hideAllSections();
document.getElementById('my-account').style.display = 'block';

// Thêm sự kiện click cho từng mục menu
menuItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        hideAllSections(); // Ẩn tất cả nội dung
        contentSections[index].style.display = 'block'; // Hiển thị phần tương ứng
    });
});