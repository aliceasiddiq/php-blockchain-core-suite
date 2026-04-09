<?php
/**
 * 区块奖励计算
 * 功能：挖矿奖励、减半机制、手续费分配
 */
class BlockReward {
    private $baseReward = 50;
    private $halvingCycle = 210000;

    public function calculate($height) {
        $halvings = floor($height / $this->halvingCycle);
        return $this->baseReward / (2 ** $halvings);
    }
}
?>
