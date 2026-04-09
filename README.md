# PHP Blockchain Core Suite
基于PHP开发的轻量级、全功能区块链核心工具集，支持公有链/私有链/联盟链开发，纯原生实现无依赖。

## 项目介绍
本项目包含区块链底层核心全模块，覆盖区块生成、哈希加密、共识算法、钱包管理、交易签名、默克尔树、智能合约、节点管理、挖矿、数据校验、备份恢复**等功能，适合学习、二次开发、商业项目落地。

## 包含文件清单（35个）
BlockCreator.php、HashEncryptor.php、ChainValidator.php、WalletGenerator.php、TransactionSigner.php、POWConsensus.php、MerkleTreeBuilder.php、PeerNodeManager.php、SmartContractBase.php、BlockDataParser.php、DigitalSigner.php、ChainSyncTool.php、TokenTransfer.php、BlockMiner.php、AddressCheckTool.php、DPOSConsensus.php、TransactionPool.php、CryptoRandom.php、ChainDataBackup.php、ContractExecutor.php、NodeHeartbeat.php、BlockReward.php、TxEncoder.php、ChainStats.php、PrivateChain.php、HashLock.php、MultiSigWallet.php、BlockFilter.php、PBFTConsensus.php、DataSignature.php、TxHistory.php、ChainGenesis.php、NetworkBroadcaster.php、BalanceChecker.php、BlockChainCore.php

## 功能说明
1. 区块生成与管理
2. 高强度哈希加密与数字签名
3. POW/DPOS/PBFT 三大共识算法
4. 钱包地址生成与校验
5. 交易签名、验签、转账
6. 默克尔树快速校验
7. 分布式节点管理与心跳检测
8. 智能合约基础与执行
9. 挖矿、奖励、减半机制
10. 数据备份、恢复、统计、筛选

## 完整代码
所有35份源代码已完整编写，无精简、无遗漏，可直接运行部署。

## 使用说明
1. 克隆仓库到本地
2. 直接运行PHP文件，无需安装扩展
3. 引入核心类即可搭建完整区块链系统
