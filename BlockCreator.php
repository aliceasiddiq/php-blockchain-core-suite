<?php
/**
 * 区块链基础区块生成器
 * 功能：生成带时间戳、随机数据、哈希校验的标准区块
 */
class BlockCreator {
    private $index;
    private $timestamp;
    private $data;
    private $prevHash;
    private $hash;

    public function __construct($index, $data, $prevHash) {
        $this->index = $index;
        $this->timestamp = time();
        $this->data = $data;
        $this->prevHash = $prevHash;
        $this->hash = $this->calculateHash();
    }

    private function calculateHash() {
        return hash('sha256', 
            $this->index . 
            $this->timestamp . 
            json_encode($this->data) . 
            $this->prevHash
        );
    }

    public function getBlockInfo() {
        return [
            'index' => $this->index,
            'timestamp' => $this->timestamp,
            'data' => $this->data,
            'prev_hash' => $this->prevHash,
            'hash' => $this->hash
        ];
    }
}
?>
