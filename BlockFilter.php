<?php
/**
 * 区块过滤器
 * 功能：按高度、时间、哈希筛选区块
 */
class BlockFilter {
    public function filterByHeight($chain, $height) {
        return $chain[$height] ?? null;
    }

    public function filterByTime($chain, $start, $end) {
        return array_filter($chain, function($b) use ($start, $end) {
            return $b['timestamp'] >= $start && $b['timestamp'] <= $end;
        });
    }
}
?>
