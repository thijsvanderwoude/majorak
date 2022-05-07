<?php
/*
 * Response.php
 * -----------
 * Code that deals with getting a response back from the server.
 */
namespace Majorak\Http;

class Response {
    protected $content, $status;

    public function __construct(string $content = "", int $status = 200) {
        $this->setContent($content);
        $this->setStatus($status);
    }
    
    public function setContent(string $content) {
        $this->content = $content;
        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function sendContent() {
        echo $this->content;
        return $this;
    }

    public function setStatus(int $status) {
        $this->status = $status;
        http_response_code($this->status);
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function send() {
        $this->sendContent();
        return $this;
    }
}

?>
