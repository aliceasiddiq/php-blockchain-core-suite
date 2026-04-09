<?php
/**
 * 区块链数据签名
 * 功能：数据认证、防篡改、身份验证
 */
class DataSignature {
    public function sign($data, $key) {
        return hash('sha256', $data . $key);
    }

    public function verify($data, $sign, $key) {
        return $this->sign($data, $key) === $sign;
    }
}
?>
