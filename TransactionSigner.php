<?php
/**
 * 区块链交易签名工具
 * 功能：交易数据签名、验签，防止交易伪造
 */
class TransactionSigner {
    public function signTransaction($txData, $privateKey) {
        $signature = hash_hmac('sha256', json_encode($txData), $privateKey);
        return $signature;
    }

    public function verifySignature($txData, $signature, $publicKey) {
        $checkSign = hash_hmac('sha256', json_encode($txData), $publicKey);
        return $checkSign === $signature;
    }
}
?>
