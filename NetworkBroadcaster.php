<?php
/**
 * 网络广播工具
 * 功能：交易/区块全网广播、节点通知
 */
class NetworkBroadcaster {
    public function broadcast($nodes, $type, $data) {
        $result = [];
        foreach ($nodes as $node) {
            $result[] = "向节点 $node 广播$type：" . substr($data['hash'] ?? '', 0, 16);
        }
        return $result;
    }
}
?>
