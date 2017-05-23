<?php

class Mail {
    public $firstname = null;
    public $name = null;
    public $fathername = null;
    public $dateborn = null;
    public $adress = null;
    public $phone = null;
    public $email = null;
    public $referral = null;
    public $specialist = null;
    public $day = null;
    public $time = null;
    public $doctor = null;
    public $complaint = null;
    public $to = "gokpzapis@reghosp.gorodgomel.by";
    //public $to = "akravchenko@medialine.by";
    //public $subject = "Запись на прием к врачу";

    //функция по формированию, отправке и проверке письма
    public function sendmail() {
        //формируем тело письма в $message

        $message = "Фамилия - ".$this->firstname.'<br/><br/>';
        $message .= "Имя - ".$this->name.'<br/><br/>';
        $message .= "Отчество - ".$this->fathername."<br/><br/>";
        $message .= "Дата рождения - ".$this->dateborn."<br/><br/>";
        $message .= "Адрес регистрации - ".$this->adress."<br/><br/>";
        $message .= "Номер телефона - ".$this->phone."<br/><br/>";
        $message .= "E-mail - ".$this->email."<br/><br/>";

        if ($_POST['referral'] == "yes") {
            $message .= "Направление есть<br/><br/>";
        } else {
            $message .= "Без направления<br/><br/>";
        }

        $message .= "Специалист - ".$this->specialist."<br/><br/>";
        $message .= "День приема - ".$this->day."<br/><br/>";
        $message .= "Время приема - ".$this->time."<br/><br/>";
        $message .= "Специализация врача - ".$this->doctor."<br/><br/>";
        $message .= "Жалобы - ".$this->complaint."<br/><br/>";

        $zapis1 = strpos($_SERVER['REQUEST_URI'], '401');
        $zapis = strpos($_SERVER['REQUEST_URI'], '402');

        //собираем тему письма в зависимости от того, с какой страницы отправлено
        if ($zapis == true) {
            $subject = "Запись на платный прием";
        } elseif ($zapis1 == true) {
            $subject = "Запись на бесплатный прием";
        } else {
            $subject = "Отказ от записи на прием";
        }

        //устанавливаем заголовки, чтобы пришедшее письмо нормально отображалось
        $headers  = 'Content-Type: text/html; charset=UTF-8';

        //производим отправку письма
        if ($_POST['submit'] != null) {
            $mail = mail($this->to, $subject, $message, $headers);
        }

        //проверяем, что письмо точно ушло
        if($mail == true) {
            echo "Запись на прием успешно осуществлена.";
        } else {
            "Не удалось произвести запись на прием. Попробуйте еще раз или свяжитесь с нашими специалистами по телефону.";
        }
    }

    //функция выбирающая значения в зависимости от специалиста
    function lish ($c, $m) {
        if ($_POST['specialist'] == "врач") {
            $finish = $c;
        } elseif ($_POST['specialist'] == "завотделением") {
            $finish = $m;
        }
        return $finish;
    }
}

//принимаем данные из формы и отправляем их на почту
$sendmail = new Mail();

$sendmail->firstname = $_POST['firstname'];
$sendmail->name = $_POST['name'];
$sendmail->fathername = $_POST['fathername'];
$sendmail->dateborn = $_POST['dateborn'];
$sendmail->adress = $_POST['adress'];
$sendmail->phone = $_POST['phone'];
$sendmail->email = $_POST['email'];
$sendmail->referral = $_POST['referral'];
$sendmail->specialist = $_POST['specialist'];
$sendmail->complaint = $_POST['complaint'];

//добавляем двойственные значения
$sendmail->doctor = $sendmail->lish($_POST['cdoctor'], $_POST['mdoctor']);;
$sendmail->day = $sendmail->lish($_POST['cday_of_week'], $_POST['mday_of_week']);
$sendmail->time = $sendmail->lish($_POST['ctime'], $_POST['mtime']);

//вызываем отправку формы из класса
$sendmail->sendmail();