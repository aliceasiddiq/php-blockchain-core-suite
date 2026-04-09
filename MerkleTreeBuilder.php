<?php
/**
 * 默克尔树构建工具
 * 功能：区块链交易快速校验，生成默克尔根
 */
class MerkleTreeBuilder {
    public function buildTree($transactions) {
        if (count($transactions) === 0) return '';
        
        $hashes = array_map(function($tx) {
            return hash('sha256', json_encode($tx));
        }, $transactions);

        while (count($hashes) > 1) {
            $temp = [];
            for ($i = 0; $i < count($hashes); $i += 2) {
                $left = $hashes[$i];
                $right = isset($hashes[$i + 1]) ? $hashes[$i + 1] : $left;
                $temp[] = hash('sha256', $left . $right);
            }
            $hashes = $temp;
        }
        return $hashes[0];
    }
}
?>
