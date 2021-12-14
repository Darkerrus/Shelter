<?php
    session_start();

    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['header']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);


    function redir () {
        header("Location: contacts.php");
        exit();
    }

    $user_name = htmlspecialchars(trim($_POST['name']));
    $from = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['header']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['name'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['header'] = $subject;
    $_SESSION['message'] = $message;

    if (strlen($user_name) <= 1)
    {
        $_SESSION['error_username'] = "Введите корректное имя";
        redir();
    }
    elseif (strlen($from) < 5 || strpos($from, "@") == false)
    {
        $_SESSION['error_email']  = "Вы ввели некорректный email";
        redir();
    }
    elseif (strlen($subject) < 5 )
    {
        $_SESSION['error_subject'] = "Тема сообщения слишком маленькая!";
        redir();
    }
    elseif (strlen($message) < 15 )
    {
        $_SESSION['error_message'] = "Сообщение слишком маленькое!!";
        redir();
    }
    else
    {
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8 \r\n";
        mail("stepan.kondalenko@yandex.ru", $subject, $message, $headers);
        $_SESSION['success_email'] = "Вы успешно отправили письмо!";
        redir();
    }