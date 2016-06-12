<?php include ROOT . '/views/layouts/header.php'; ?>
<?php //include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
                    <div class="history">
                        <h3>История заказов</h3>
                            <table class="table-bordered table-striped table">
                                <tr>
                                    <th>Номер заказа</th>
                                    <th>Дата заказа</th>
                                    <th>Статус заказа</th>
                                    <th>В заказе</th>
                                    <th>Сумма</th>
                                </tr>
                                <!--<?php foreach ($ordersList as $order): ?>
                                    <tr>
                                        <td>
                                            <a href="/manager/order/view/<?php echo $order['id']; ?>">
                                                <?php echo $order['id']; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $order['user_name']; ?></td>
                                        <td><?php echo $order['user_phone']; ?></td>
                                        <td><?php echo $order['date']; ?></td>
                                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                                        <td><a href="/manager/order/view/<?php echo $order['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                                        <td><a href="/manager/order/update/<?php echo $order['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                                        <td class="red-cross" ><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                                -->
                            </table>  
                        
                        <a href="/cabinet/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
                    </div>
                
                <br/>
                <br/>
            </div>
        </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>