<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Custom\Domain\Entity;

/**
 * Description of InsertIdResultEntity
 *
 * @author HP
 */
class InsertIdResultEntity extends DefaultEntity {
    
    protected $id;
    
    protected $is_success = false;
    
    public function getId() {
        return $this->id;
    }

    public function getIsSuccess() {
        return $this->is_success;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setIsSuccess($isSuccess): void {
        $this->is_success = $isSuccess;
    }
}
