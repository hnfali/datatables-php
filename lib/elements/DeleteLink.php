<?php

namespace datatables\elements;

use datatables\ElementInterface;

class DeleteLink implements ElementInterface {
    
    protected $url;
    protected $class;
    protected $label;
    
    /* ______________________________________________________________________ */
    
    public function __construct($url = '', $class = 'icon delete', $label = 'Delete') {
        $this->url = $url;
        $this->class = $class;
        $this->label = $label;
    }
    
    /* ______________________________________________________________________ */
    
    public function __toString() {
        return (string) $this->render();
    }
    
    /* ______________________________________________________________________ */
    
    public function render() {
        return "<a href='{$this->url}' class='{$this->class}'>{$this->label}</a>";
    }
}