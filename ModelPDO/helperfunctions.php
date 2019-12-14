<?php
function get_userid($email)
{
    global $db;
    $query = 'SELECT * FROM usersIS218 WHERE email = :email';           //column name ... :placeholder

    $statements = $db->prepare($query);
    $statements->bindValue(':email',$email);
    $statements->execute();
    $userinfo = $statements->fetch();
    $statements->closeCursor();
    $idvalue = $userinfo[0]['id'];
    return $idvalue;

}



function get_userinfo($id)
{
    global $db;
    $query = 'SELECT * FROM usersIS218 WHERE id = :id';

    $statements = $db->prepare($query);
    $statements->bindValue(':id',$id);
    $statements->execute();
    $userinfo = $statements->fetchAll();
    $statements->closeCursor();
    return $userinfo;

}

function get_email($userid)             //should be querying from accounts table b/c everything in questions table is just a copy
{                                       //b/c the newly inserted question was inserted into a row with a NULL email
    global $db;
    $query = 'SELECT email FROM accountsIS218 WHERE id =: id';

    $statement = $db->prepare($query);
    $statement->bindValue(':id',$userid);
    $statement->execute();
    $emailvalue = $statement->fetch();
    $statement->closeCursor();
    $emailresult = $emailvalue['email'];
    return $emailresult;
}

function get_name($userid)
{
    global $db;
    $query = 'SELECT fname,lname FROM accountsIS218 WHERE id =: id';

    $statement = $db->prepare($query);
    $statement->bindValue(':id',$userid);
    $statement->execute();
    $namevalue = $statement->fetch();
    $statement->closeCursor();
    $first = $namevalue['fname'];
    $second = $namevalue['lname'];
    $fullname = $first.' '.$second;
    echo "$fullname";
    return $fullname;



}


?>