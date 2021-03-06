<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/brand">Управление производителями</a></li>
                    <li class="active">Добавить бренд</li>
                </ol>
            </div>


            <h4>Добавить новый бренд</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="">
                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>


        </div>
        <a href="/admin/brand/" class="btn btn-default back" title="Выйти без сохранения"><i class="fa fa-arrow-left"></i> Назад</a>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

