<?php

class FormatData {

    public function registerForm($userName, $userPasswd) {
        $this->userName = $userName;
        $this->userPasswd = $userPasswd;
    }

    public function loginForm($userName, $userPasswd) {
        $this->userName = $userName;
        $this->userPasswd = $userPasswd;
    }

    public function commentForm($userId, $broadId, $comment) {
        $this->broadId = $broadId;
        $this->userId = $userId;
        $this->message = $comment;
    }

    public function EditCommentForm($broadId, $comment) {
        $this->broadId = $broadId;
        $this->comment = $comment;
    }

}
