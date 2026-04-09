<?php
/**
 * 钱包地址校验工具
 * 功能：地址格式校验、合法性验证、格式标准化
 */
class AddressCheckTool {
    public function checkFormat($address) {
        if (strlen($address) !== 42 || substr($address, 0, 2) !== '0x') {
            return false;
        }
        return ctype_xdigit(substr($address, 2));
    }

    public function standardize($address) {
        return strtolower(trim($address));
    }
}
?>
