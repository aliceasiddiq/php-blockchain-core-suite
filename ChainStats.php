<?php
/**
 * 区块链统计工具
 * 功能：高度、算力、交易数、节点数统计
 */
class ChainStats {
    public function getStats($chain, $nodes) {
        return [
            'height' => count($chain) - 1,
            'total_transactions' => array_sum(array_map(function($b) {
                return is_array($b['data']) ? count($b['data']) : 0;
            }, $chain)),
            'node_count' => count($nodes)
        ];
    }
}
?>
