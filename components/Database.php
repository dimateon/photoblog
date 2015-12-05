<?php

class Database extends PDO
{
    protected $transactionCounter = 0;
    function beginTransaction()
    {
        if(!$this->transactionCounter++)
            return parent::beginTransaction();
        return $this->transactionCounter >= 0;
    }

    function commit()
    {
        if(!--$this->transactionCounter)
            return parent::commit();
        return $this->transactionCounter >= 0;
    }

    function rollBack()
    {
        if($this->transactionCounter >= 0)
        {
            $this->transactionCounter = 0;
            return parent::rollBack();
        }
        $this->transactionCounter =0;
        return false;
    }
}