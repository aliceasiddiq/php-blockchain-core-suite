<?php
/**
 * 区块链合法性校验器
 * 功能：校验区块链是否被篡改，验证区块哈希与上链关系
 */
class ChainValidator {
    public function validateChain($blockchain) {
        $count = count($blockchain);
        for ($i = 1; $i < $count; $i++) {
            $current = $blockchain[$i];
            $previous = $blockchain[$i - 1];

            if ($current['hash'] != $this->calculateHash($current)) {
                return false;
            }
            if ($current['prev_hash'] != $previous['hash']) {
                return false;
            }
        }
        return true;
    }

    private function calculateHash($block) {
        return hash('sha256', 
            $block['index'] . 
            $block['timestamp'] . 
            json_encode($block['data']) . 
            $block['prev_hash']
        );
    }
}
?>
