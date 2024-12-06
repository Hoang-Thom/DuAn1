<main>
        <div class="row1">
            <div class="summoney">
                <p>Tổng tiền</p>
                <div class="quantity">
                    <h1><?=number_format($SumMoney['Sum_Money'],0,',','.'). ' VND';?></h1>
                </div>
                <a href="?page=Oder">xem chi tiết</a>
            </div>
            <div class="order">
                <p>Tổng đơn hàng</p>
                <div class="quantity">
                    <h1><?=$totalOrders['total_donhang']?></h1>
                </div>
                <a href="?page=Oder">xem chi tiết</a>
            </div>
            <div class="product">
                <p>Tổng sản phẩm</p>
                <div class="quantity">
                    <h1><?=$Totalproduct['total_product']?></h1>
                </div>
                <a href="?page=Product">xem chi tiết</a>
            </div>
            <div class="blog">
                <p>Tổng bài viết</p>
                <div class="quantity">
                    <h1><?=$totalArticles['total_baiviet'] ?></h1>
                </div>
                <a href="?page=Article">xem chi tiết</a>
            </div>
            <div class="user">
                <p>Tổng người dùng</p>
                <div class="quantity">
                    <h1><?= $totalAccounts['total_nguoidung'] ?></h1>
                </div>
                <a href="?page=Account">xem chi tiết</a>
            </div>
        </div>
        <div class="row2">
            <div class="pro">
                <h1>Top 4 sản phẩm bán chạy</h1>
                <?php foreach($Best as $key=>$value) { ?>
                <div class="chart">
                    <img src="../public/img/<?= $value['Anh_san_pham']; ?>" alt="">
                    <p class="nm"><?= $value['Ten_san_pham']; ?></p>
                    <p class="mm"><?= $value['Tong_so_luong']; ?></p>
                </div>
                <?php } ?>
            </div>
           
            <!-- <h1>Biểu đồ cột - Trang Admin</h1> -->
            <div id="myChartNew" style="width:55%;height:600px;"></div>

                <!-- bieu do tron -->
                <script>
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChartNew);

                    function drawChartNew() {

                    // Set Data
                    const dataNew = google.visualization.arrayToDataTable([
                        ['Tên danh mục', 'Số lượng'],
                        <?php foreach ($countProByCate as $c){ ?>
                        ['<?=$c['Ten_danh_muc']?>',<?=$c['Soluong']?>],
                    <?php } ?>
                        ])
                    // Set Options
                    const optionsNew = {
                    title:'Thống kê số lượng sản phẩm theo danh mục'
                    };

                    // Draw
                    const chartNew = new google.visualization.PieChart(document.getElementById('myChartNew'));
                    chartNew.draw(dataNew, optionsNew);

                    }
                </script>
        
        </div>
        <div id="myChart" style="width:100%; min-height:1000px;"></div>
            <!-- bieu do cot -->

            <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                // Set Data
                const data = google.visualization.arrayToDataTable([
                    
                    ['Tên sản phẩm', 'Số lượng'],
                    <?php foreach ($Products as $p){ ?>
                        ['<?=$p['Ten_san_pham']?>',<?=$p['So_luong']?>],
                    <?php } ?>
                ]);

                // Set Options
                const options = {
                title:'Thông kê số lượng sản phẩm'
                };

                // Draw
                const chart = new google.visualization.BarChart(document.getElementById('myChart'));
                chart.draw(data, options);

                }
            </script>
    </main>