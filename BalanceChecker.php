<?php
/**
 * 余额查询工具
 * 功能：地址余额实时查询、账本校验
 */
class BalanceChecker {
    public function check($chain, $address) {
        $balance = 0;
        foreach ($chain as $block) {
            foreach ($block['data'] ?? [] as $tx) {
                if ($tx['to'] === $address) $balance += $tx['amount'];
                if ($tx['from'] === $address) $balance -= $tx['amount'];
            }
        }
        return $balance;
    }
}
?>
