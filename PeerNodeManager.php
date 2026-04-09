<?php
/**
 * 区块链节点管理
 * 功能：节点注册、节点同步、节点列表维护
 */
class PeerNodeManager {
    private $nodes = [];

    public function registerNode($nodeUrl) {
        if (!in_array($nodeUrl, $this->nodes)) {
            $this->nodes[] = $nodeUrl;
            return true;
        }
        return false;
    }

    public function removeNode($nodeUrl) {
        $this->nodes = array_filter($this->nodes, function($n) use ($nodeUrl) {
            return $n !== $nodeUrl;
        });
    }

    public function getNodeList() {
        return $this->nodes;
    }
}
?>
