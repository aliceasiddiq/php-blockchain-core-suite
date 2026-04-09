<?php
/**
 * 区块挖矿工具
 * 功能：自动化挖矿、奖励发放、区块打包
 */
class BlockMiner {
    public function mine($index, $prevHash, $txs) {
        $nonce = 0;
        $prefix = '0000';
        while (true) {
            $hash = hash('sha256', $index . $prevHash . json_encode($txs) . $nonce);
            if (str_starts_with($hash, $prefix)) {
                return [
                    'hash' => $hash,
                    'nonce' => $nonce,
                    'txs' => $txs
                ];
            }
            $nonce++;
        }
    }
}
?>
