<?php include ROOT . '/views/layouts/header_manager.php'; ?>
<!--views/manager_stat/index-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<section>
    <div class="container">
        <!--<div class="row">-->
            <br/>        
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/manager">Менеджерпанель</a></li>
                    <li class="active">Статистика</li>
                </ol>
            </div>
            
        <div class="row">
            <h3>Просмотр статистики продаж</h3>
            <div class="col-lg-3">
                <p>Выберите год</p>
                    <select name="y">
                        <option value="2016" selected="selected">2016</option>
                        <option value="2015">2015</option>
                    </select>
                    <div class="space"></div>
                     <a href="#" class="btn btn-success"> Пересчитать статистику</a>
                     <div class="space"></div>
            </div>
            <div class="col-lg-3">
                <p>Выберите месяц</p>
                    <select name="k">
                        <option value="1" selected="selected">Все</option>
                        <option value="2">Январь</option>
                    </select>
                 <br/> <br/> 
            </div>  
            <div class="space"></div>
        </div>    
            <div class="row">
            <div class="col-lg-7">
                <div id="chart_div"></div>
            </div>  
            <!--<div class="col-lg-1"></div>--> 
            <div class="col-lg-5">
                <div id="piechart" ></div>
            </div>     
    <br/> 

         <a href="/manager/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
    </div>
</section>

<!--Круговая диаграмма -->
    <script>
//      google.charts.load('current', {'packages':['corechart']});
       google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([        
          ['Brand', 'Quality'],
          ['Acer', 9],
          ['Apple', 5],
          ['Asus', 8],
          ['Dell', 1],
          ['HP', 19],
          ['Lenovo', 23],
          ['MSI', 2]                             
        ]);

        var options = {
          title: '',
          subtitle: 'Продажи по производителям',
          'width': 500,
          'height': 400,
          'is3D': true
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>                
<!--/Круговая диаграмма-->

<!--Столбчатая диаграмма-->
 <script>
     google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Категория', 'Кол-во товара, шт', 'Сумма продаж, руб'],
          ['Начальный уровень', 10, 100000],
          ['Для работы', 12, 250000],
          ['Всегда с собой', 15, 180000],
          ['Ультрабуки', 15, 200000],
          ['Игровые', 15, 140000],
          ['Универсальные', 15, 200000]
        ]);

        var options = {
          chart: {
            title: 'Статистика продаж',
            subtitle: 'Категория, количество проданного товара и сумма продаж: 1 квартал 2016'
          },
          bars: 'vertical',
          vAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        btns.onclick = function (e) {

          if (e.target.tagName === 'BUTTON') {
            options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      }

 </script>
<!--/Столбчатая диаграмма-->

<?php include ROOT . '/views/layouts/footer.php'; ?>

