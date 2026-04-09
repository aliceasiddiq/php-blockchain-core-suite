<?php
/**
 * 区块链钱包地址生成器
 * 功能：生成唯一钱包地址、公钥、私钥对
 */
class WalletGenerator {
    public function generateKeyPair() {
        $privateKey = bin2hex(random_bytes(32));
        $publicKey = hash('sha256', $privateKey);
        $address = '0x' . substr($publicKey, 0, 40);
        
        return [
            'private_key' => $privateKey,
            'public_key' => $publicKey,
            'address' => $address
        ];
    }

    public function validateAddress($address) {
        return preg_match('/^0x[0-9a-fA-F]{40}$/', $address);
    }
}
?>
