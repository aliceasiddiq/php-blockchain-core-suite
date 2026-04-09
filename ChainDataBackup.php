<?php
/**
 * 区块链数据备份
 * 功能：区块数据导出、备份、恢复
 */
class ChainDataBackup {
    public function backup($chain, $path) {
        file_put_contents($path, json_encode($chain, JSON_PRETTY_PRINT));
        return true;
    }

    public function restore($path) {
        $data = file_get_contents($path);
        return json_decode($data, true);
    }
}
?>
