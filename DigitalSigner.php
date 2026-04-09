<?php
/**
 * 数字签名工具
 * 功能：区块链数据签名、身份认证、防篡改
 */
class DigitalSigner {
    public function createSign($data, $secret) {
        return base64_encode(hash_hmac('sha256', $data, $secret, true));
    }

    public function checkSign($data, $sign, $secret) {
        $check = base64_encode(hash_hmac('sha256', $data, $secret, true));
        return $check === $sign;
    }
}
?>
