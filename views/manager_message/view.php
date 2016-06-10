<?php include ROOT . '/views/layouts/header_manager.php'; ?>
<!--/views/manager_message/view.php-->
<section>
    <div class="container">
        <div class="row">
            <br/>        
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/manager">Менеджерпанель</a></li>
                    <li class="active">Управление сообщениями</li>
                </ol>
            </div>

            <h3>Список сообщений</h3>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID сообщения</th>
                    <th>Дата</th>
                    <th>Имя пользователя</th>
                    <th>E-mail пользователя</th>
                    <th>Сообщение пользователя</th>
                    <th>Текст ответа</th>
                    <th>Статус</th>
                </tr>
                <?php foreach ($messagesList as $message): ?>
                    <tr>
                        <td>
                            <a href="/manager/message/view/<?php echo $message['id']; ?>">
                                <?php echo $message['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $message['date']; ?></td>
                        <td><?php echo $message['user_name']; ?></td>
                        <td><?php echo $message['user_email']; ?></td>
                        <td><?php echo $message['user_message']; ?></td>
                        <td><?php echo $message['response']; ?></td>
                        <td><?php echo Message::getStatusText($message['status']); ?></td>    
                        <td><a href="/manager/message/view/<?php echo $message['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                        <td><a href="/manager/message/update/<?php echo $message['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td class="red-cross" ><a href="/manager/message/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
         <a href="/manager/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

