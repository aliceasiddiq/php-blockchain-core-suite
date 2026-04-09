<?php
/**
 * 创世区块生成
 * 功能：区块链初始化、第一条区块创建
 */
class ChainGenesis {
    public function create() {
        $block = new BlockCreator(
            0,
            ['type' => 'genesis', 'msg' => 'php-blockchain-genesis'],
            '0000000000000000000000000000000000000000000000000000000000000000'
        );
        return $block->getBlockInfo();
    }
}
?>
