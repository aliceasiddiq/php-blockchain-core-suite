<?php
/**
 * 区块链同步工具
 * 功能：跨节点区块数据同步、最长链选择
 */
class ChainSyncTool {
    public function compareChains($localChain, $remoteChain) {
        return count($remoteChain) > count($localChain) ? $remoteChain : $localChain;
    }

    public function syncBlock($local, $remote) {
        return $this->compareChains($local, $remote);
    }
}
?>
