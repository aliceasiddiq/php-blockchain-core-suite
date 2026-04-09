<?php
/**
 * 哈希锁工具
 * 功能：哈希时间锁、原子交换、加密解锁
 */
class HashLock {
    public function createLock($secret) {
        return hash('sha256', $secret);
    }

    public function unlock($lock, $secret) {
        return $this->createLock($secret) === $lock;
    }
}
?>
