<?php
/**
 * 区块链专用哈希加密工具
 * 功能：支持SHA256/MD5双重加密，区块数据加密
 */
class HashEncryptor {
    public function sha256Encrypt($data) {
        return hash('sha256', $data);
    }

    public function md5Encrypt($data) {
        return md5($data);
    }

    public function doubleEncrypt($data) {
        return $this->sha256Encrypt($this->md5Encrypt($data));
    }

    public function randomSaltEncrypt($data) {
        $salt = bin2hex(random_bytes(8));
        return $this->sha256Encrypt($data . $salt) . ':' . $salt;
    }
}
?>
