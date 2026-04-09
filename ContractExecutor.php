<?php
/**
 * 智能合约执行器
 * 功能：合约调用、参数解析、结果返回
 */
class ContractExecutor {
    public function run($contract, $method, $params = []) {
        if (!class_exists($contract)) return false;
        $instance = new $contract();
        return call_user_func_array([$instance, $method], $params);
    }
}
?>
