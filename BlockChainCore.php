<?php
/**
 * 区块链核心引擎
 * 功能：整合所有模块，完整区块链运行环境
 */
class BlockChainCore {
    private $chain = [];
    private $pool;
    private $miner;

    public function __construct() {
        $this->chain[] = (new ChainGenesis())->create();
        $this->pool = new TransactionPool();
        $this->miner = new BlockMiner();
    }

    public function addTx($tx) {
        $this->pool->addTransaction($tx);
    }

    public function mineBlock() {
        $last = end($this->chain);
        $txs = $this->pool->getPendingTxs();
        $block = $this->miner->mine(count($this->chain), $last['hash'], $txs);
        $this->chain[] = [
            'index' => count($this->chain),
            'timestamp' => time(),
            'data' => $txs,
            'prev_hash' => $last['hash'],
            'hash' => $block['hash'],
            'nonce' => $block['nonce']
        ];
        $this->pool->clearTxs($txs);
        return true;
    }

    public function getChain() {
        return $this->chain;
    }
}
?>
