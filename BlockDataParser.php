<?php
/**
 * 区块数据解析器
 * 功能：解析区块原始数据，提取交易、时间、哈希信息
 */
class BlockDataParser {
    public function parseBlock($block) {
        return [
            'block_index' => $block['index'],
            'create_time' => date('Y-m-d H:i:s', $block['timestamp']),
            'block_hash' => $block['hash'],
            'previous_hash' => $block['prev_hash'],
            'transaction_count' => is_array($block['data']) ? count($block['data']) : 0
        ];
    }

    public function exportBlockJson($block) {
        return json_encode($this->parseBlock($block), JSON_PRETTY_PRINT);
    }
}
?>
