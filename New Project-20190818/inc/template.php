<?php
class Template {
    private $template;
    private $content;
    private $hasNext;
    
    public function __construct($template, $content) {
        $this.load($template, $content);
    }
    
    public function __get($val) {
        if($val == "hasNext") {
            return $this->$val;
        }
        else {
            die("Cannot access private property template::$val");
        }
    }
    
    public function load($template, $content) {
        $this->template = file_get_contents("http://localhost/shapify5/templates/$template", true);
        $this->content = $content;
        $this->hasNext = TRUE;
    }
    
    public function output() {
        $record = curent($this->content);
        $html = $this->template;
        
        foreach($record as $key=>$val) {
            $html = str_replace("{".$key."}", $val, $html);
        }
        if(!next($this->content)) {
            $this->hasNext = FALSE;
        }
        return $html;
    }
}