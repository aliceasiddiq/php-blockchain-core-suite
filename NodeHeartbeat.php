<?php
/**
 * 节点心跳检测
 * 功能：在线节点监控、离线节点剔除、状态同步
 */
class NodeHeartbeat {
    private $nodeStatus = [];

    public function updateHeartbeat($node) {
        $this->nodeStatus[$node] = time();
    }

    public function getOnlineNodes() {
        $online = [];
        foreach ($this->nodeStatus as $node => $time) {
            if (time() - $time < 30) $online[] = $node;
        }
        return $online;
    }
}
?>
