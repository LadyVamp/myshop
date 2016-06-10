<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>


            <h4>Добавить новый товар</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <!--<div class="col-lg-4">-->
                <div class="login-form admin">
                    <!--<form action="#" method="post" enctype="multipart/form-data">-->
                    <form action="#" method="post">
                      <div class="col-lg-4">
                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="">

                        <p>Стоимость, руб.</p>
                        <input type="text" name="price" placeholder="" value="">

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Производитель</p>
                         <select name="brand_id">
                            <?php if (is_array($brandsList)): ?>
                                <?php foreach ($brandsList as $brand): ?>
                                    <option value="<?php echo $brand['id']; ?>">
                                        <?php echo $brand['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <p>Изображение товара</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Детальное описание</p>
                        <textarea class="description"></textarea>
                        <br/><br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                 </div>    
                 <div class="col-lg-4">       
                        <p>Размер экрана, "</p>
                        <textarea name="screen_size"></textarea>
                        
                        <p>Частота процессора, МГц</p>
                       <input type="text" name="CPU" placeholder="" value="">
                        
                        <p>Объем оперативной памяти, Гб</p>
                        <input type="text" name="RAM" placeholder="" value="">
                        
                        <p>Объем жесткого диска, Гб</p>
                        <input type="text" name="hard_disk" placeholder="" value="">
                                                
                        <p>Оптический привод</p>
                         <select name="drive">
                            <option value="1" selected="selected">Есть</option>
                            <option value="0">Нет</option>
                        </select>
                        
                        <p>Время автономной работы, ч</p>
                        <input type="text" name="battery_life" placeholder="" value="">
                        
                        <p>Вес, кг</p>
                        <input type="text" name="weight" placeholder="" value="">

                        <br/><br/>
                 </div>    
                 <div class="col-lg-4">  
                        <p>Наличие на складе</p>
                        <select name="availability">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <br/><br/>

                        <p>Новинка</p>
                        <select name="is_new">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <br/><br/>

                        <p>Лидер продаж</p>
                        <select name="is_hit">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>
                 </div>        

                        <br/><br/>
             </div>  <!--/login-form admin-->  
            </form> 
        </div> <!--/row-->
        <a href="/admin/product/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
    </div><!--/container-->

    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

