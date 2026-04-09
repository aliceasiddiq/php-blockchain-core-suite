<?php
/**
 * 多签钱包
 * 功能：多签名验证、联合转账
 */
class MultiSigWallet {
    private $required = 2;
    private $signers = [];

    public function addSigner($address) {
        $this->signers[] = $address;
    }

    public function verify($signatures) {
        return count(array_intersect($signatures, $this->signers)) >= $this->required;
    }
}
?>
