<?php
/**
 * 工作量证明(POW)共识算法
 * 功能：区块链挖矿核心，难度值动态调整
 */
class POWConsensus {
    private $difficulty = 4;

    public function mineBlock($blockData) {
        $nonce = 0;
        while (true) {
            $hash = hash('sha256', json_encode($blockData) . $nonce);
            if (substr($hash, 0, $this->difficulty) === str_repeat('0', $this->difficulty)) {
                return [
                    'hash' => $hash,
                    'nonce' => $nonce
                ];
            }
            $nonce++;
        }
    }

    public function setDifficulty($diff) {
        $this->difficulty = $diff;
    }
}
?>
