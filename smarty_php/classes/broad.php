<?php

class Broad extends Dbh{

    # Create a new Broad
    public function createPost($message) {

        # Find user ID
        $row = $this->getUserDataBySession();
        $userId = $row['user_id'];
    
        # Make a new Broad/Post
        $sql = "INSERT INTO `broad` (`user_id`,`message`) VALUES (?,?)";
        $param = array($userId,$message);
        if(!$this->insert($sql, $param)) {
            return false;
        } 

        return true;
    }

    public function disablePost($broadId) {

        $sql = "UPDATE `broad` SET `broad_enabled` = 0 WHERE `broad_id` = ?";
        $param = array($broadId);
        $result = $this->insert($sql, $param);
        if (!$result) {
            return false;
        }

        $sql = "UPDATE `message` SET `message_enabled` = 0 WHERE `broad_id` = ?";
        $param = array($broadId);
        $result = $this->insert($sql, $param);
        
        return $result;
    }

    public function modifyPost($data) {

        $sql = "UPDATE `broad` SET `message` = ? WHERE `broad_id` = ?";
        $param = array($data->comment, $data->broadId);
        $result = $this->insert($sql, $param);

        return $result;
    }

    # Insert a new message
    public function newComment($data) {

        $sql = "INSERT INTO `message` (`broad_id`,`user_id`,`message_content`) VALUES (? ,? ,?)";
        $param = array($data->broadId ,$data->userId ,$data->message);
        $result = $this->insert($sql, $param);

        return $result;
    }

    # Delete message, acuattly is just disable
    public function disableComment($messageId) {

        $sql = "UPDATE `message` SET `message_enabled` = 0 WHERE `message_id` = ?";
        $param = array($messageId);
        $result = $this->insert($sql, $param);

        return $result;
    }

    # Edit message using by message's ID
    public function modifyComment($data){

        $sql = "UPDATE `message` SET `message_content` = ? WHERE `message_id` = ?";
        $param = array($data->comment, $data->broadId);
        $result = $this->insert($sql, $param);

        return $result;
    }

    # Get a broad with broad's id
    public function showBoard($broadId) {

        $sql = "SELECT broad.*, users.user_name,
                COUNT(CASE WHEN message.message_enabled = 1 THEN 1 ELSE NULL END) AS message_count FROM broad
                LEFT JOIN message ON broad.broad_id = message.broad_id
                JOIN users ON users.user_id = broad.user_id
                WHERE broad.broad_enabled = 1 AND (broad.broad_id = ?)
                GROUP BY broad.broad_id
                ORDER BY broad.create_time DESC";
        $param = array($broadId);
        $result = $this->select($sql, $param);

        return $result;
    }

    # This method is show all broad from db,
    # we can create one showBoard is only show friend's broad
    public function showAllBroad() {

        $sql = "SELECT broad.*, users.user_name,
                COUNT(CASE WHEN message.message_enabled = 1 THEN 1 ELSE NULL END) AS message_count FROM broad
                LEFT JOIN message ON broad.broad_id = message.broad_id
                JOIN users ON users.user_id = broad.user_id
                WHERE broad.broad_enabled = 1
                GROUP BY broad.broad_id
                ORDER BY broad.create_time DESC";
        $result = $this->selectAll($sql);

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
