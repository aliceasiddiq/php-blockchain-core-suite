<?php
/**
 * 交易历史查询
 * 功能：地址交易记录、流水查询、统计
 */
class TxHistory {
    public function getHistory($chain, $address) {
        $history = [];
        foreach ($chain as $block) {
            foreach ($block['data'] ?? [] as $tx) {
                if ($tx['from'] === $address || $tx['to'] === $address) {
                    $history[] = $tx;
                }
            }
        }
        return $history;
    }
}
?>
