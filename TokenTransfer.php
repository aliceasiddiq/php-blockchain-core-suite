<?php
/**
 * 代币转账交易
 * 功能：区块链代币转账、余额计算、交易记录
 */
class TokenTransfer {
    private $ledger = [];

    public function transfer($from, $to, $amount) {
        if (!isset($this->ledger[$from]) || $this->ledger[$from] < $amount) {
            return false;
        }
        $this->ledger[$from] -= $amount;
        $this->ledger[$to] = ($this->ledger[$to] ?? 0) + $amount;
        return true;
    }

    public function setBalance($address, $amount) {
        $this->ledger[$address] = $amount;
    }

    public function getBalance($address) {
        return $this->ledger[$address] ?? 0;
    }
}
?>
