<?php
/**
 * @var SiteController $this
 */
?>

<div class="midWrap">

    <div class="feedback">
        <h3 class="drive_title">Тест-драйв</h3>
			<span class="title">Пожалуйста, заполните форму, чтобы поучаствовать в тест-драйве автомобиля LUXGEN.
		Мы обязательно свяжемся с вами.</span>

        <form accept-charset="utf-8" enctype="multipart/form-data" name="test_drive" action="" id="test_drive_form"
              method="post" target="">
            <table class="test_drive_form">
                <tr>
                    <td width="240px" style="vertical-align: top;"><label for="test_drive_surname">Фамилия</label><span
                            style="color: red">*</span></td>
                    <td width="400px">
                        <input type="text" name="surname" value="" id="test_drive_surname" class=""/></td>
                </tr>
                <tr>
                    <td width="240px" style="vertical-align: top;"><label for="test_drive_name">Имя</label><span
                            style="color: red">*</span></td>
                    <td width="400px">
                        <input type="text" name="name" value="" id="test_drive_name" class=""/></td>
                </tr>
                <tr>
                    <td width="240px" style="vertical-align: top;"><label
                            for="test_drive_patronymic">Отчество</label><span style="color: red">*</span></td>
                    <td width="400px">
                        <input type="text" name="patronymic" value="" id="test_drive_patronymic" class=""/></td>
                </tr>
                <tr>
                    <td width="240px" style="vertical-align: top;"><label for="test_drive_age">Возраст (полных
                            лет)</label><span style="color: red">*</span></td>
                    <td width="400px">
                        <input type="text" name="age" value="" id="test_drive_age" class=""/></td>
                </tr>
                <tr>
                    <td width="240px" style="vertical-align: top;"><label for="test_drive_city">Город проживания</label><span
                            style="color: red">*</span></td>
                    <td width="400px">
                        <input type="text" name="city" value="" id="test_drive_city" class=""/></td>
                </tr>
                <tr>
                    <td width="240px" style="vertical-align: top;"><label for="test_drive_start_time">Удобное время для
                            связи</label><span style="color: red">*</span></td>
                    <td width="400px">
                        с <select name="start_time" id="test_drive_start_time" class="">
                            <option value="">...</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
                        </select>
                        <label for="test_drive_end_time">по</label> <select name="end_time" id="test_drive_end_time"
                                                                            class="">
                            <option value="">...</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
                        </select></td>
                </tr>
                <tr>
                    <td width="240px" style="vertical-align: top;"><label for="test_drive_phone">Контактный
                            телефон</label><span style="color: red">*</span></td>
                    <td width="400px">
                        <input type="text" name="phone" value="" id="test_drive_phone" class=""/></td>
                </tr>
                <tr>
                    <td width="240px" style="vertical-align: top;"><label for="test_drive_email">Электронная
                            почта</label><span style="color: red">*</span></td>
                    <td width="400px">
                        <input type="text" name="email" value="" id="test_drive_email" class=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="test_drive_button" type="submit" value="Отправить"></td>
                </tr>
            </table>

        </form>
    </div>


</div>
