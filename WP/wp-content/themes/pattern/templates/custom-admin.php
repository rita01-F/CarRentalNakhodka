<?php
/**
 * Template Name: Админ-панель
 * Post Type: page
*/ 
?>
<?php
    require (dirname(__DIR__).'/includes/db.php');

    //if (!isset($_SESSION['logged_user']))
    //{
    //    header('Location: /');
    //}
    //else
    //{
    //    echo $_SESSION['logged_user'];
    //}

    $data = $_POST;
    if (isset($data['do_reg']))
    {
        $car = R::dispense($wpdb->base_prefix.'cars');
        $car->car_name = $data['car_name'];
        $car->manufacture_year = $data['m_year'];
        $car->deposit = $data['deposit'];
        $car->price = $data['price'];
        $car->auto_trans = $data['auto_trans'];
        $car->seats = $data['seats'];
        $car->case_type = $data['case_type'];
        $car->gas_use = $data['gas_use'];
        $car->trunk = $data['trunk'];
        $car->power = $data['power'];
        $car->drive = $data['drive'];
        $car->steer = $data['steer'];
        $car->status = 0;
        R::store($car);
        echo '<p>Машина зарегистрирована</p>';
    }

    if (isset($data['do_finish']))
    {
        $car = R::load($wpdb->base_prefix.'cars', $data['edit_id']);
        $car->car_name = $data['car_name'];
        $car->manufacture_year = $data['year'];
        $car->deposit = $data['deposit'];
        $car->price = $data['price'];
        $car->auto_trans = $data['auto_trans'];
        $car->seats = $data['seats'];
        $car->case_type = $data['case_type'];
        $car->gas_use = $data['gas_use'];
        $car->trunk = $data['trunk'];
        $car->power = $data['power'];
        $car->drive = $data['drive'];
        $car->steer = $data['steer'];
        $car->status = 0;
        R::store($car);
        echo '<p>Машина отредактирована</p>';
    }

    if (isset($_POST['new_status']))
    {
        $new_status = R::load($wpdb->base_prefix.'cars', $_POST['id']);
        $new_status->status = $_POST['new_status'];
        R::store($new_status);
    }

    if (isset($_POST['do_edit']))
    {
        $editing = R::findOne($wpdb->base_prefix.'cars', 'id = ?', array($_POST['edit_id']));
    }


    $cars = R::find($wpdb->base_prefix.'cars');

    $reserve = R::find($wpdb->base_prefix.'reserve');

?>
<head>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(function() {
            <?
                foreach ($reserve as $item)
                {
                    echo 'makeCalenar("daterange'. $item->car_id .'", "'. $item->from .'", "'. $item->to .'");';
                }
            ?>
        });
    </script>

    <style>
		.daterangepicker{
			color: black !important;
		}
		.table-condensed {
			color: black !important;
		}
        .available {
            cursor: default !important;
            pointer-events: none !important;
        }
        .today {
            background-color: burlywood !important;
            color: white !important;
        }
        .disabled {
            text-decoration: none !important;
        }
    </style>
</head>
<?php get_header(); ?>
<main id="content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="header">
			<h1 class="entry-title"><?php the_title(); ?></h1> 
		</header>	
		<a href="logout.php">Log out</a>
    <form action="/admin-panel/" method="post">
        <div>
            <p>Модель машины</p>
            <input type="text" name="car_name" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->car_name .'"' : '' ?> required>
        </div>
        <div>
            <p>Год выпуска</p>
            <input type="text" class="numbers-only" name="m_year" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->manufacture_year .'"' : '' ?> required>
        </div>
        <div>
            <p>Залог</p>
            <input type="text" class="numbers-only" name="deposit" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->deposit .'"' : '' ?> required>
            ₽
        </div>
        <div>
            <p>Цена в день</p>
            <input type="text" class="numbers-only" name="price" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->price .'"' : '' ?> required>
            ₽
        </div>
        <hr>
        <p><strong>Характеристики</strong></p>
        <div>
            <p>Авто-трансмиссия</p>
            <input type="checkbox" name="auto_trans" <?php echo $editing->auto_trans == 'on' ? 'checked' : '' ?>>
        </div>
        <div>
            <p>Кузов</p>
            <input type="text" name="case_type" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->case_type .'"' : '' ?> required>
        </div>
        <div>
            <p>Количество мест</p>
            <input type="text" class="numbers-only" name="seats" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->seats .'"' : '' ?> required>
        </div>
        <div>
            <p>Затраты топлива на 100 км.</p>
            <input type="text" class="numbers-only" name="gas_use" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->gas_use .'"' : '' ?> required> л.
        </div>
        <div>
            <p>Объем багажника</p>
            <input type="text" class="numbers-only" name="trunk" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->trunk .'"' : '' ?> required> л.
        </div>
        <div>
            <p>Мощность двигателя</p>
            <input type="text" class="numbers-only" name="power" <?php echo isset($_POST['do_edit']) ? 'value="'. $editing->power .'"' : '' ?> required> л. с.
        </div>
        <div>
            <p>Привод</p>
            <select name="drive">
                <option <?php echo $editing->drive == 'Задний' ? 'selected' : '' ?>>Задний</option>
                <option <?php echo $editing->drive == 'Передний' ? 'selected' : '' ?>>Передний</option>
                <option <?php echo $editing->drive == 'Полный' ? 'selected' : '' ?>>Полный</option>
            </select>
        </div>
        <div>
        <p>Руль</p>
            <select name="steer">
                <option <?php echo $editing->drive == 'Справа' ? 'selected' : '' ?>>Справа</option>
                <option <?php echo $editing->drive == 'Слева' ? 'selected' : '' ?>>Слева</option>
            </select>
        </div>
        <hr>
        <?php echo isset($_POST['do_edit']) ? '<input type="text" name="edit_id" readonly value="'. $_POST['edit_id'] .'" style="display: none">' : '' ?>
        <p><button type="submit" name="<?php echo isset($_POST['do_edit']) ? 'do_finish' : 'do_reg' ?>"><?php echo isset($_POST['do_edit']) ? 'Редактировать машину' : 'Зарегистрировать машину' ?></button></p>
        <p><?php echo isset($_POST['do_edit']) ? '<a href="admin-panel" name="cancel">Отмена</a>' : '' ?></p>
    </form>
    <hr width="100%" size="5px" color="black">

    <?php

        if(!count($cars))
        {
            echo 'Нет машин';
        }
        else
        {
            foreach ($cars as $item)
            {
                $on = $item->auto_trans == 'on' ? 'v' : 'x';

                $status = $item->status;
                $free = $status == 0 ? 'selected' : '';
                $reserved = $status == 1 ? 'selected' : '';
                $taken = $status == 2 ? 'selected' : '';

                $is_reserved = R::find($wpdb->base_prefix.'reserve', 'car_id = ?', array($item->id));
                $calendar = $is_reserved ? '<input type="text" name="daterange'. $item->id .'" readonly="readonly" required/>' : '';

                echo '<div style="display: flex; flex-direction: row; align-items: center">
                        <div style="display: flex; flex-direction: column; align-items: center">
                            <div style="margin: 10px;">Название: '. $item->car_name .'</div>
                            <div style="margin: 10px;">Год: '. $item->manufacture_year .'</div>
                            <div style="margin: 10px;">Взнос: '. $item->deposit .' ₽</div>
                            <div style="margin: 10px;">Плата в день: '. $item->price .' ₽</div>
                        </div>
                        <div style="display: flex; flex-direction: column; align-items: center">
                            <div style="margin: 10px;">Авто-трансмиссия: '. $on .'</div>
                            <div style="margin: 10px;">Кол-во мест: '. $item->seats .'</div>
							<div style="margin: 10px;">Кузов: '. $item->case_type .'</div>
                            <div style="margin: 10px;">Затраты топлива: '. $item->gas_use .' л./100км.</div>
                            <div style="margin: 10px;">Объем багажника: '. $item->trunk .' л.</div>
                            <div style="margin: 10px;">Мощность: '. $item->power .' л. с.</div>
                            <div style="margin: 10px;">Привод: '. $item->drive .'</div>
                            <div style="margin: 10px;">Руль: '. $item->steer .'</div>
                        </div>
                        
                        <div style="margin: 10px;">
                            <select class="status" onchange="getStatus(this, '. $item->id .');">
                                <option '. $free .'>Свободна</option>
                                <option '. $reserved .'>Забронирована</option>
                                <option '. $taken .'>Занята</option>
                            </select>
                        </div>
                        '. $calendar .'
                        <form action="/admin-panel" style="margin: 10px; background-color: bisque" method="post">
                            <button name="do_edit">Edit</button>
                            <input type="text" name="edit_id" readonly value="'. $item->id .'" style="display: none">
                        </form>
                     </div>
                     <hr style="color: cornflowerblue; width: 100%">
                ';
            }
        }
    ?>
	</article>
</main>
<?php get_footer(); ?>