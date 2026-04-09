<?php
/**
 * 智能合约基础类
 * 功能：轻量级智能合约执行、状态存储
 */
class SmartContractBase {
    private $state = [];

    public function setValue($key, $value) {
        $this->state[$key] = $value;
        return true;
    }

    public function getValue($key) {
        return $this->state[$key] ?? null;
    }

    public function executeContract($func, $params) {
        if (method_exists($this, $func)) {
            return call_user_func_array([$this, $func], $params);
        }
        return '函数不存在';
    }
}
?>
