<?php include ROOT . '/views/layouts/header_manager.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 center"> 
            <br/>
            
            <h2 class="admin-title">Панель менеджера</h2>
            <br/>
            <ul class="admin-buttons">
                <li><a class="btn btn-default" href="/manager/order" role="button" ><span class="glyphicon glyphicon-shopping-cart"></span> Управление заказами</a></li>       
                <li><a class="btn btn-default" href="/manager/message" role="button" ><span class="glyphicon glyphicon-envelope"></span> Просмотр сообщений от покупателей</a></li>       
                <li><a class="btn btn-default" href="/manager/statistics" role="button" ><span class="glyphicon glyphicon-stats"></span> Просмотр статистики продаж</a></li>       
            </ul>
            </div>
            <div class="col-sm-3"></div>   
        </div><!--/row-->
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

