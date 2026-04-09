<?php
/**
 * 交易数据编码
 * 功能：交易数据压缩、编码、解码
 */
class TxEncoder {
    public function encode($tx) {
        return base64_encode(json_encode($tx));
    }

    public function decode($data) {
        return json_decode(base64_decode($data), true);
    }
}
?>
