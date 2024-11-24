// Dữ liệu cho biểu đồ
const labels = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"]; // Trục X
const data = {
    labels: labels,
    datasets: [
        {
            label: "Sản phẩm",
            data: [50, 60, 70, 90, 100, 120], // Dữ liệu cột Sản phẩm
            backgroundColor: "rgba(75, 192, 192, 0.8)", // Màu xanh lá cây
        },
        {
            label: "Đơn hàng",
            data: [40, 55, 60, 80, 85, 110], // Dữ liệu cột Đơn hàng
            backgroundColor: "rgba(54, 162, 235, 0.8)", // Màu xanh biển
        },
        {
            label: "Doanh thu",
            data: [100, 120, 150, 200, 190, 160], // Dữ liệu cột Doanh thu
            backgroundColor: "rgba(255, 99, 132, 0.8)", // Màu đỏ
        },
    ],
};

// Cấu hình biểu đồ
const config = {
    type: "bar",
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: "right",
            },
            title: {
                display: true,
                text: "Biểu đồ Doanh số",
            },
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: "Tháng",
                },
            },
            y: {
                title: {
                    display: true,
                    text: "Số lượng",
                },
                beginAtZero: true,
            },
        },
    },
};

// Khởi tạo biểu đồ
const barChart = new Chart(
    document.getElementById("barChart"),
    config
);
