<?php
    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/helpers/validateTopics.php');
    include(ROOT_PATH . '/app/helpers/middlewear.php');

    $table = 'topics';

    $errors = [];
    $id = '';
    $name = '';
    $description = '';

    $topics = selectAll($table);

    if (isset($_POST['create-topic'])) {
        adminOnly();
        $errors = validateTopic($_POST, $errors);
        if (count($errors) === 0) {
            unset($_POST['create-topic']);
            $topic_id = create($table, $_POST);
            $_SESSION['message'] = 'Topic created successfully';
            $_SESSION["type"] = "success";
            header('location: '. BASE_URL . '/admin/topics/index.php');
            exit();
        }else{
            $name = $_POST["name"];
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $topic = selectOne($table, ['id' => $id]);
        $id = $topic['id'];
        $name = $topic['name'];
        $description = $topic['description'];
        
    }
    if (isset($_GET['del_id'])) {
        adminOnly();
        $id = $_GET['del_id'];
        $count = delete($table, $id);
        $_SESSION['message'] = 'Topic was deleted successfully';
        $_SESSION["type"] = "success";
        header('location: '. BASE_URL . '/admin/topics/index.php');
        exit();
    }

    if (isset($_POST['edit-topic'])) {
        adminOnly();
        $errors = validateTopic($_POST, $errors);
        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['id'], $_POST['edit-topic']);
            $topic_id = update($table, $id,  $_POST);
            $_SESSION['message'] = 'Topic updated successfully';
            $_SESSION["type"] = "success";
            header('location: '. BASE_URL . '/admin/topics/index.php');
            exit();   
        }else{
            $id = $_POST["id"];
            $name = $_POST["name"];
            $description = $_POST["description"];
        }
    }
?>