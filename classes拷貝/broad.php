<?php

class Broad extends Dbh{

    public function createBroad($message) {

        # Find user ID
        $row = $this->getUserDataBySession();
        $userId = $row['user_id'];
    
        # Make a new Broad
        $sql = "INSERT INTO `broad` (`user_id`) VALUES (?)";
        $param = array($userId);
        $this->insert($sql, $param); 

        # Get this new broad id
        $sql = "SELECT `broad_id` FROM `broad` WHERE `user_id` = (?) ORDER BY `create_time` DESC LIMIT 1";
        $param = array($userId);
        $row = $this->select($sql,$param);

        # Set data to OBJ and send to newMessage method
        $data = (object)['broadId' => $row['broad_id'],
                         'userId'  => $userId,
                         'message' => $message];
        $this->newMessage($data);
    }

    public function newMessage($data) {

        $sql = "INSERT INTO `message` (`broad_id`,`user_id`,`message_content`) VALUES (? ,? ,?)";
        $param = array($data->broadId ,$data->userId ,$data->message);
        $this->insert($sql, $param); 
    }

    public function showBroad() {

        $row = $this->getUserDataBySession();
        $userId = $row['user_id'];

        # Just let it simple, make hard core later
        $sql = "SELECT * FROM `broad`,`message` WHERE broad.user_id = ?";
        $param = array($userId);
        $result = $this->selectAll($sql, $param);

        print_r($result);
        die();

        return $result;
    }

    public function getUserDataBySession() {
        
        $sql = "SELECT * FROM `user_sessions`, `users` 
                WHERE (user_sessions.user_id = users.user_id) 
                AND (user_sessions.session_id = ? )";
        $param = array(session_id());
        $result = $this->select($sql, $param);
    
        return $result;
    }
}

?>