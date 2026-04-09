<?php
/**
 * 交易内存池
 * 功能：未上链交易存储、交易排队、打包交易
 */
class TransactionPool {
    private $pool = [];

    public function addTransaction($tx) {
        $this->pool[] = $tx;
    }

    public function getPendingTxs($limit = 10) {
        return array_slice($this->pool, 0, $limit);
    }

    public function clearTxs($txs) {
        $this->pool = array_diff($this->pool, $txs);
    }
}
?>
