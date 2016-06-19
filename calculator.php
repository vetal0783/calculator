<?php

class calculator {

    private $result;
    
    public function plus($a, $b) {
        $this->result = $a + $b;
    }

    public function minus($a, $b) {
        $this->result = $a - $b;
    }

    public function multiple($a, $b) {
        $this->result = $a * $b;
    }

	public function pow($a, $b) {
        $this->result = pow($a, $b);
    }
	
    public function getResult() {
        return $this->result;
    }
}
