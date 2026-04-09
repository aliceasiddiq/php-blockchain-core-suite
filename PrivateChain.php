<?php
/**
 * 私有链初始化
 * 功能：联盟链/私有链创建、权限管理
 */
class PrivateChain {
    private $admins = [];

    public function initGenesis($admin) {
        $this->admins[] = $admin;
        return (new BlockCreator(0, '创世区块', '0'))->getBlockInfo();
    }

    public function isAdmin($address) {
        return in_array($address, $this->admins);
    }
}
?>
