<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
                    if( isset( $_POST['q5'] ) )
                    {
                        switch( $_POST['q5'] )
                        {
                            case 'one':
                                echo "Ваш выбор - универсальные ноутбуки без оптического привода!";                              
                                echo '<br/><br/>';   
                                echo "<p>Мощный, но тяжелый или легкий, но слабый? Для игр или для работы? А может, для всего сразу и по доступной цене? "
                                         . "Модели этой категории подойдут тем, кто хочет получить ноутбук,одинаково справляющийся с вычислительной работой, "
                                         . "офисными нуждами, игровыми и развлекательными приложениями, стационарным или мобильным использованием.</p>";                                   
                                echo '<a href = "http://myshop/category/6">Перейти к каталогу универсальных ноутбуков</a>';    
                                exit;
                                
                            case 'two':
                               case 'one':
                                echo "Ваш выбор - универсальные ноутбуки с оптическим приводом!";                              
                                echo '<br/><br/>';   
                                echo "<p>Мощный, но тяжелый или легкий, но слабый? Для игр или для работы? А может, для всего сразу и по доступной цене? "
                                         . "Модели этой категории подойдут тем, кто хочет получить ноутбук,одинаково справляющийся с вычислительной работой, "
                                         . "офисными нуждами, игровыми и развлекательными приложениями, стационарным или мобильным использованием."
                                        . "Также, у данных ноутбуков присутствует оптический привод.</p>";                                          
                                echo '<a href = "http://myshop/category/6">Перейти к каталогу универсальных ноутбуков</a>';
                               exit;                             
                        }
                    }
                    ?> 
 
                        <form method="post">
                            <h4>Вопрос 5. Вы будете смотреть фильмы с дисков?</h4>
                            <label><input type="radio" name="q5" value="one" /> Нет</label><br />
                            <label><input type="radio" name="q5" value="two" /> Да</label><br />
                            <button type="submit" class="btn btn-success">Далее</button>
                        </form>       
            </div>
             <div class="col-sm-3"></div>  
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?>    
    
</body>



