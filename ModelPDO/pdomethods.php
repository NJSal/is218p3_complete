<?php
function get_questions($userid)
{

    global $db;
    $query = 'SELECT * FROM questions WHERE ownerid = :id'; //experimental


    $statement = $db->prepare($query);
    $statement->bindValue(':id', $userid);
    $statement->execute();
    $accountquestion = $statement->fetchAll();
    $statement->closeCursor();

    return $accountquestion;
}


function validate_login($email, $password)
{
    global $db;
    $query = 'SELECT * FROM accountsIS218 WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $user = $statement->fetch();
    $isValidLogin = count($user) > 0;
    if (!$isValidLogin) {
        $statement->closeCursor();
        return false;
    } else {
        $userId = $user['id'];
        $statement->closeCursor();
        return $userId;
    }
}

function registeruser($email, $firstname, $lastname, $birthday, $password){
    global $db;

    $query = 'INSERT INTO accountsIS218 (email, fname, lname, birthday, password)
          VALUES (:email, :fname, :lname, :birthday, :password)';

//Create PDO statement
    $statement = $db->prepare($query);

//Bind form values to SQL
    $statement->bindValue(':email', $email);
    $statement->bindValue(':fname', $firstname);
    $statement->bindValue(':lname', $lastname);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':password', $password);


    $statement->execute();

    $statement->closeCursor();
}


function validate_registration($email, $firstname, $lastname, $birthday, $lastname, $birthday, $password){
    global $db;
    $query = 'SELECT * FROM accountsIS218 WHERE fname = :fname AND lname = :lname AND birthday = :birthday AND email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':fname', $firstname);
    $statement->bindValue(':lname', $lastname);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':birthday', $birthday);
    $statement->execute();
    $user = $statement->fetch();
    $isValidLogin = count($user) > 0;
    if (!$isValidLogin) {
        $statement->closeCursor();
        return false;
    } else {
        $userId = $user['id'];
        $statement->closeCursor();
        return $userId;
    }
}


function delete_question($id) {
    global $db;
    $query = 'DELETE FROM questions
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}


function get_users_questions($ownerId) {
    global $db;

    $query = 'SELECT * FROM questions WHERE ownerId = :ownerId';

    $statement = $db->prepare($query);

    $statement->bindValue(':ownerId', $ownerId);
    $statement->execute();

    $questions = $statement->fetchAll();
    $statement->closeCursor();

    return $questions;
}

function add_question($userId, $questionname, $questionbody, $questionskills){
    global $db;
    $query = 'INSERT INTO questions
          (ownerid, title, body, skills)
          VALUES
          (:ownerid,:title, :body, :skills)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ownerid', $userId);
    $statement->bindValue(':title', $questionname);
    $statement->bindValue(':body', $questionbody);
    $statement->bindValue(':skills', $questionskills);
    $statement->execute();

    $statement -> closeCursor();
}

?>