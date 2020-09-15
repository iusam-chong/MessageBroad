<?php

class Broad extends Dbh{

    # Create a new Broad
    public function createPost($message) {

        # Find user ID
        $row = $this->getUserDataBySession();
        $userId = $row['user_id'];
    
        # Make a new Broad
        $sql = "INSERT INTO `broad` (`user_id`) VALUES (?)";
        $param = array($userId);
        if(!$this->insert($sql, $param)) {
            return false;
        } 

        # Get this new broad id
        $sql = "SELECT `broad_id` FROM `broad` WHERE `user_id` = (?) ORDER BY `create_time` DESC LIMIT 1";
        $param = array($userId);
        $row = $this->select($sql,$param);

        # Set data to OBJ and send to newComment method
        $data = (object)['broadId' => $row['broad_id'],
                         'userId'  => $userId,
                         'message' => $message];
        if(!$this->newComment($data)) {
            return false;
        }
        return true;
    }

    # Insert a new message
    public function newComment($data) {

        $sql = "INSERT INTO `message` (`broad_id`,`user_id`,`message_content`) VALUES (? ,? ,?)";
        $param = array($data->broadId ,$data->userId ,$data->message);
        $result = $this->insert($sql, $param);

        return $result;
    }

    # Delete message, acuattly is just disable
    public function disableMessage($messageId) {

        $sql = "UPDATE `message` SET `message_enabled` = 0 WHERE `message_id` = ?";
        $param = array($messageId);
        $result = $this->insert($sql, $param);

        return $result;
    }

    # Edit message
    public function modifyMessage(){

    }

    # This method is show all broad from db,
    # we can create one showBoard is only show friend's broad
    public function showAllBroad() {

        # Just let it simple, make hard core later
        $sql = "SELECT * FROM `broad` ";
        $param = array(null);
        $result = $this->selectAll($sql, $param);

        return $result;
    }

    # Get Message from broadId
    public function showMessage($broadId) {

        # All select has benn used!
        $sql = "SELECT `message_id`,`message_content`,`create_time`, message.user_id,`user_name` 
                FROM `message`,`users` WHERE message.user_id = users.user_id AND `broad_id` = ? AND `message_enabled` = 1";
        $param = array($broadId);
        $result = $this->selectAll($sql, $param);
        
        return $result;
    }

    # Get current user's session
    public function getUserDataBySession() {
        
        $sql = "SELECT * FROM `user_sessions`, `users` 
                WHERE (user_sessions.user_id = users.user_id) 
                AND (user_sessions.session_id = ? )";
        $param = array(session_id());
        $result = $this->select($sql, $param);
    
        return $result;
    }
}
