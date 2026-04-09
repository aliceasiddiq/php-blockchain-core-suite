<?php
/**
 * 委托权益证明(DPOS)共识
 * 功能：节点投票、代理节点选举、区块生成
 */
class DPOSConsensus {
    private $votes = [];
    private $witnesses = [];

    public function vote($voter, $witness) {
        $this->votes[$voter] = $witness;
    }

    public function electWitnesses($count = 5) {
        $voteCount = array_count_values($this->votes);
        arsort($voteCount);
        $this->witnesses = array_slice(array_keys($voteCount), 0, $count);
        return $this->witnesses;
    }
}
?>
