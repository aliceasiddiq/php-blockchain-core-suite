<?php
/**
 * 区块链加密随机数
 * 功能：安全随机数生成、密钥种子、随机哈希
 */
class CryptoRandom {
    public function randomHex($length = 16) {
        return bin2hex(random_bytes($length / 2));
    }

    public function randomHash() {
        return hash('sha256', $this->randomHex(32));
    }
}
?>
