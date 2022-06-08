<?php try {

    echo \App\Service::getFooService()->findByEmail("foo@mail.ru");

} catch (Exception $e) {
    echo "error: ".$e->getMessage();
}