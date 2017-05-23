<?php

require "modules/mod_zapis_na_priem/processing.php";

?>

<div class="zapis">
    <form action="" method="post">
        <div class="input">
            <label for="">Фамилия*</label>
            <input autocomplete="on" name="firstname" placeholder="Введите Вашу фамилию" required type="text">
        </div>
        <div class="input">
            <label for="">Имя*</label>
            <input autocomplete="on" name="name" placeholder="Введите Ваше имя" required type="text">
        </div>
        <div class="input">
            <label for="">Отчество*</label>
            <input autocomplete="on" name="fathername" placeholder="Введите Ваше отчество" required type="text">
        </div>
        <div class="input">
            <label for="">Дата рождения*</label>
            <input autocomplete="on" name="dateborn" placeholder="Введите Вашу дату рождения" required type="text">
        </div>
        <div class="input">
            <label for="">Адрес регистрации*</label>
            <input autocomplete="on" name="adress" placeholder="Введите Ваш адрес" required type="text">
        </div>
        <div class="input">
            <label for="">Телефон*</label>
            <input autocomplete="on" name="phone" placeholder="Введите Ваш номер телефона" required type="text">
        </div>
        <div class="input">
            <label for="">Электронная почта*</label>
            <input autocomplete="on" name="email" placeholder="Введите Ваш E-mail" required type="text">
        </div>

        <div class="input">
            <label for="">Специлаист</label>
            <select name="specialist" id="specialist" size=1 onChange='StatusSelect();'>
                <option value="врач">врач</option>
                <option value="завотделением">заведующий отделением</option>
            </select>
        </div>
        <div id="doc">
            <div class="input">
                <label for="cdoctor">Выбор врача</label>
                <select name="cdoctor">
                    <option value="Врач-аллерголог (дети)">Врач-аллерголог (дети)</option>
                    <option value="Врач-хирург (дети)">Врач-хирург (дети)</option>
                    <option value="Врач-гастроэнтеролог (дети)">Врач-гастроэнтеролог (дети)</option>
                    <option value="Врач-нефролог (дети)">Врач-нефролог (дети)</option>
                    <option value="Врач-невролог (дети)">Врач-невролог (дети)</option>
                    <option value="Врач-травматолог-ортопед (дети)">Врач-травматолог-ортопед (дети)</option>
                    <option value="Врач-нейрохирург (дети, взрослые)">Врач-нейрохирург (дети, взрослые)</option>
                    <option value="Врач-фониатр (дети, взрослые)">Врач-фониатр (дети, взрослые)</option>
                    <option value="Врач-челюстно-лицевой хирург (дети, взрослые)">Врач-челюстно-лицевой хирург (дети, взрослые)</option>
                    <option value="Врач-травматолог-ортопед (дети, взрослые)">Врач-травматолог-ортопед (дети, взрослые)</option>
                    <option value="Врач-уролог (дети, взрослые)">Врач-уролог (дети, взрослые)</option>
                    <option value="Врач-нефролог (взрослые)">Врач-нефролог (взрослые)</option>
                    <option value="Врач-терапевт (взрослые)">Врач-терапевт (взрослые)</option>
                    <option value="Врач-гастроэнтеролог (взрослые)">Врач-гастроэнтеролог (взрослые)</option>
                    <option value="Врач-акушер-гинеколог (взрослые)">Врач-акушер-гинеколог (взрослые)</option>
                    <option value="Врач-невролог (взрослые)">Врач-невролог (взрослые)</option>
                    <option value="Врач-оториноларинголог (взрослые)">Врач-оториноларинголог (взрослые)</option>
                    <option value="Врач-профпатолог (взрослые)">Врач-профпатолог (взрослые)</option>
                    <option value="Врач-ревматолог (взрослые)">Врач-ревматолог (взрослые)</option>
                    <option value="Врач-сурдолог (взрослые)">Врач-сурдолог (взрослые)</option>
                    <option value="Врач-оториноларинголог и ушного протезирования (взрослые)">Врач-оториноларинголог и ушного протезирования (взрослые)</option>
                    <option value="Врач-стоматолог (взрослые)">Врач-стоматолог (взрослые)</option>
                    <option value="Врач-хирург (взрослые)">Врач-хирург (взрослые)</option>
                    <option value="Врач-терапевт (внебюджет) (взрослые)">Врач-терапевт (внебюджет) (взрослые)</option>
                    <option value="Врач-нейрохирург, вертебролог (взрослые)">Врач-нейрохирург, вертебролог (взрослые)</option>
                    <option value="Врач-невролог (внебюджет) (взрослые)">Врач-невролог (внебюджет) (взрослые)</option>
                    <option value="Врач-невролог (кабинет прогнозирования мозговых инсультов) (взрослые)">Врач-невролог (кабинет прогнозирования мозговых инсультов) (взрослые)</option>
                    <option value="Врач-сосудистый хирург, флеболог (внебюджет) (взрослые)">Врач-сосудистый хирург, флеболог (внебюджет) (взрослые)</option>
                    <option value="Учитель-логопед (взрослые)">Учитель-логопед (взрослые)</option></select>
                </select>
            </div>
            <div class="input" >
                <label for="cday_of_week">День недели</label>
                <select name="cday_of_week">
                    <option value="Понедельник">Понедельник</option>
                    <option value="Вторник">Вторник</option>
                    <option value="Среда">Среда</option>
                    <option value="Четверг">Четверг</option>
                    <option value="Пятница">Пятница</option>
                    <option value="Суббота">Суббота</option>
                </select>
            </div>
            <div class="input">
                <label for="ctime">Время</label>
                <select name="ctime">
                    <option value="8:00">8:00</option>
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                </select>
            </div>
        </div>
        <div id="maindoc">
            <div class="input">
                <label for="mdoctor">Выбор заведующего отделением</label>
                <select name="mdoctor">
                    <option value="Хирургическое отделение № 2">Хирургическое отделение № 2</option>
                    <option value="Отделение челюстно-лицевой хирургии и стоматологии">Отделение челюстно-лицевой хирургии и стоматологии</option>
                    <option value="Оториноларингологическое отделение">Оториноларингологическое отделение</option>
                    <option value="Урологическое отделение">Урологическое отделение</option>
                    <option value="Гинекологическое отделение">Гинекологическое отделение</option>
                    <option value="Нейрохирургическое отделение № 1">Нейрохирургическое отделение № 1</option>
                    <option value="Нейрохирургическое отделение № 2 (вертебролог)">Нейрохирургическое отделение № 2 (вертебролог)</option>
                    <option value="Травматолого-ортопедическое отделение">Травматолого-ортопедическое отделение</option>
                    <option value="Ревматологическое отделение">Ревматологическое отделение</option>
                    <option value="Гастроэнтерологическое отделение">Гастроэнтерологическое отделение</option>
                    <option value="Неврологическое отделение">Неврологическое отделение</option>
                    <option value="Терапевтическое отделение">Терапевтическое отделение</option>
                    <option value="Детское хирургическое отделение">Детское хирургическое отделение</option>
                    <option value="Детское гастроэнтерологическое отделение">Детское гастроэнтерологическое отделение</option>
                    <option value="Детское пульмонологическое отделение">Детское пульмонологическое отделение</option>
                    <option value="Детское нефрологическое отделение">Детское нефрологическое отделение</option>
                    <option value="Детское неврологическое отделение">Детское неврологическое отделение</option>
                </select>
            </div>
            <div class="input">
                <label for="mday_of_week">День недели</label>
                <select name="mday_of_week">
                    <option value="Понедельник">Понедельник</option>
                    <option value="Вторник">Вторник</option>
                    <option value="Среда">Среда</option>
                    <option value="Четверг">Четверг</option>
                    <option value="Пятница">Пятница</option>
                    <option value="Суббота">Суббота</option>
                </select>
            </div>
            <div class="input">
                <label for="mtime">Время</label>
                <select name="mtime">
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                </select>
            </div>
        </div>
        <div class="input">
            <label for="complaint">Жалобы</label>
            <textarea autocomplete="on" name="complaint" placeholder="Сообщите, что Вас беспокоит."></textarea>
        </div>

        <input type="submit" name="submit" value="Отправить заявку">
        <input type="hidden" name="appointment">

        <div id="text">
            <p style="color:rgb(255, 102, 0); font-size: 12px;">В заявке указывайте данные того человека, которому требуется консультация.</p>
            <p style="font-size: 12px;">В случае, если на заявляемое время талонов не будет, Вам предложат талон на имеющееся время. </p>
            <p style="font-size: 12px;">Ваш запрос будет обработан в течение рабочего дня, ответ придет на Ваш электронный адрес.</p>

            <p style="font-size: 12px;"><b>Обязательно при визите обращаться в <span style="color:rgb(255, 102, 0);">РЕГИСТРАТУРУ</span> консультативной поликлиники, предоставить <span style="color:rgb(255, 102, 0);">ПАСПОРТ</span>. В случае отсутствия направления - будет предложен прием на платной основе. В случае отсутствия паспорта - в приеме будет отказано.</b></p>

            <p style="font-size: 12px;"><b>В соответствии со ст. 44, ст. 18 закона РБ о здравоохранении, несовершеннолетние дети консультируются врачом в присутствии законного представителя (родители). <span style="color:rgb(255, 102, 0);">Присутствие одного из родителей обязательно</span>.</b></p>
        </div>
    </form>
</div>