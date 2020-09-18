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
        
        $comment = $this->formatText($comment);
        
        $this->broadId = $broadId;
        $this->userId = $userId;
        $this->message = $comment;
    }

    public function EditCommentForm($broadId, $comment) {

        $comment = $this->formatText($comment);

        $this->broadId = $broadId;
        $this->comment = $comment;
    }

    public function formatText($content) {
        $content = nl2br($content);
        $content = preg_replace("/\r|\n/", "", $content);

        return $content;
    }
    

}
