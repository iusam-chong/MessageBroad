<?php

class Users extends Dbh {

# Method to create a new user to db
public function createUser($data): bool {
    
    # do something check function here 
    #
    #
    #
    # maybe?
    # Check username if exist from db then return FALSE
    if ($this->getUser($data->userName)) {
       return false;
    }

    # Password Hash
    $hash = password_hash($data->userPasswd, PASSWORD_DEFAULT);

    # Start insert data into users table
    $sql = "INSERT INTO `users` (`user_name`,`user_passwd`) VALUES (?, ?)";
    $param = array($data->userName, $hash);
    $this->insert($sql, $param);
    # End

    return true;
}

# Method login
public function manualLogin($data): bool {
    
    # Check user if not exist then return FALSE
    $result = $this->getUser($data->userName);
    if (!$result) {
       return false;
    }

    # Check input password with password from db result, if not match return FALSE
    if (!password_verify($data->userPasswd, $result['user_passwd'])) {
        return false;
    }

    # Call session register method
    $this->registerLoginSession($result['user_id']);
   
    return true;
}

# Session login, without user manual login
public function sessionLogin(): bool {

    # If session has enable/start this should be true
    if(session_status() == PHP_SESSION_ACTIVE) {
        
        # Search conditions if set session from db 
        # And login haven't timeout and user still enabled
        $sql = "SELECT * FROM `user_sessions`, `users` WHERE (user_sessions.session_id = ?) 
                AND (user_sessions.login_time >= (NOW() - INTERVAL 15 MINUTE)) 
                AND (user_sessions.user_id = users.user_id) 
                AND (users.user_enabled = 1)";
        $param = array(session_id());
        $result = $this->select($sql, $param);

        # if query above data exist from db, logged in
        if ($result) {

            # renew login session 
            $this->registerLoginSession($result['user_id']);
            return true;
        }
    }

    # Session login failed
    return false;
}

# Save session to db 
public function registerLoginSession($userId) {

    # If session has enable/start this should be true
    if(session_status() == PHP_SESSION_ACTIVE) {

        # NOW() is mysql func, not php
        $sql = "REPLACE INTO `user_sessions` (`user_id`, `session_id`, `login_time`) 
                VALUES (?, ?, NOW())";
        $param = array($userId, session_id());
        $this->insert($sql, $param);
    }
}

# Delete session from db, that means logout
public function logout() {

    if(session_status() == PHP_SESSION_ACTIVE) {

        $sql = 'DELETE FROM `user_sessions` WHERE (`session_id` = ?)';
        $param = array(session_id());
        $this->insert($sql, $param);
    }
}

public function getUser($userName) {
        
    $sql = "SELECT * FROM users WHERE (`user_name` = ?)";
    $param = array($userName);
    $row = $this->select($sql, $param);
    
    return $row;
}

# Get all user except myself 
public function getSuggestUser() {

    $row = $this->getUserDataBySession();
    $userId = $row['user_id'];

    $sql = "SELECT users.user_id, users.user_name FROM users,follower 
            WHERE (users.user_id != ?) AND follower.follower_id != users.user_id";
    $param = array($userId);
    $result = $this->selectAll($sql, $param);
    
    return $result;
}

public function addFollower($followerId) {

    $row = $this->getUserDataBySession();
    $userId = $row['user_id'];

    $sql = "INSERT INTO `follower` (`user_id`,`follower_id`) VALUES (?,?)";
    $param = array($userId, $followerId);
    $result = $this->insert($sql, $param);

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
