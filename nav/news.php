<?php require "header.php";?>
        <main>
            <section>
                <h2>Новости</h2>

                <article>
                    <div id="date">08.01.2005</div>
                    <a href="#">Статья 1 - article</a>
                    <p>Текст статьи бла бла бла</p>
                </article>

                <article>
                    <div id="date">09.01.2009</div>
                    <a href="#">Статья 2 - article</a>
                    <p>Текст статьи бла бла бла</p>
                </article>

                <article>
                    <div id="date">22.03.2021</div>
                    <a href="#">Статья 3 - article</a>
                    <p>Текст статьи бла бла бла</p>
                </article>

                <article>
                    <div id="date">29.11.2025</div>
                    <a href="#">Статья 4 - article</a>
                    <p>Текст статьи бла бла бла</p>
                </article>

                <article>
                    <div id="date">06.06.2006</div>
                    <a href="#">Статья 5 - article</a>
                    <p>Текст статьи бла бла бла</p>
                </article>
            </section>

            <section>
                <h1>Задачи PHP</h1>
                <h3>Уровень 1.10</h3>

                <div>
                <p>№1 - Случайные числа</p>
                <?php
                    $arr = [];

                    for ($i = 1; $i < 11; $i++)
                    {
                        array_push($arr, mt_rand(1, 100));
                    }

                    foreach ($arr as $i)
                    {
                        echo $i, " ";
                    }
                ?>
                </div>

                <div>
                <p>№2 - Число задом наперед</p>
                <?php
                    $num = 12345;

                    while (intdiv($num, 10) != 0)
                    {
                        echo $num % 10;
                        $num = intdiv($num, 10);
                    }

                    echo $num % 10;
                ?>
                </div>

                <div>
                <p>№3 - Пары</p>
                <?php
                    $arr = [1, 2, 3, 4, 5, 6];

                    for ($i = 0; $i < count($arr); $i+=2)
                    {
                        ?> <p> <?php echo $arr[$i], " ", $arr[$i + 1];?> </p> <?php
                    }
                ?>
                </div>

                <div>
                <p>№4 - Слияние массивов</p>
                <?php
                    $arr1 = [1, 2, 3];
                    $arr2 = [4, 5, 6];
                    $arr = array_merge($arr1, $arr2);

                    foreach ($arr as $i)
                    {
                        echo $i, " ";
                    }
                ?>
                </div>

                <h3>Уровень 2.2</h3>

                <div>
                <p>№1 - Количество отрицательных элементов </p>
                <?php
                    $arr = [];

                    for ($i = 1; $i < 11; $i++)
                    {
                        array_push($arr, mt_rand(-100, 100));
                    }

                    foreach ($arr as $i)
                    {
                        echo $i, " ";
                    }
                    echo " - массив. ";

                    $sum = 0;

                    foreach ($arr as $i)
                    {
                        if ($i < 0)
                        {
                            $sum++;
                        }
                    }

                    echo "Отрицательных: ", $sum;
                ?>
                </div>

                <div>
                <p>№2 - Удаление отрицательных </p>
                <?php
                    $arr = [];

                    for ($i = 1; $i < 11; $i++)
                    {
                        array_push($arr, mt_rand(-100, 100));
                    }

                    foreach ($arr as $i)
                    {
                        echo $i, " ";
                    }
                    echo " - массив. ";

                    $sum = 0;

                    foreach ($arr as $i)
                    {
                        if ($i < 0)
                        {
                            $sum++;
                        }
                    }

                    echo "Отрицательных: ", $sum;
                ?>
                </div>
            </setction>
        </main>
<?php require "footer.php";?>
