SET NAMES UTF8;
DROP DATABASE IF EXISTS meitu;
CREATE DATABASE meitu CHARSET=UTF8;
USE meitu;

CREATE TABLE meitu_user( #创建用户表
  uid INT PRIMARY KEY AUTO_INCREMENT,
  uname VARCHAR(32),#用户名
  upwd VARCHAR(32)#用户密码
);
INSERT INTO meitu_user VALUES(NULL,"15531006501","123456aa");
SELECT * FROM meitu_user;


CREATE TABLE meitu_product( #创建产品列表
  pid INT PRIMARY KEY AUTO_INCREMENT, #产品编号
  pic VARCHAR(128),#产品图片
  pname VARCHAR(64),#产品名称
  price FLOAT(10,2)#产品价格
);
INSERT INTO meitu_product VALUES
(1,'images/57a9a8cf86cb727541.jpg!thumb220.jpg','气球恐龙绿帽子',188),
(2,'images/57a7f01f9cb6085162.jpg!thumb220.jpg','美图V4s高透手机壳',49),
(3,'images/57a06a2a9621c72275.jpg!thumb220.jpg','美图M6 3D屏幕保护膜',19.9),
(4,'images/5795a7f688e8313351.jpg!thumb220.jpg','美图M6手机数据线',188),
(5,'images/579f0829b30f234760.jpg!thumb220.jpg','MeituFamily笔记本',20),
(6,'images/57b57aef8494e47741.jpg!thumb220.jpg','MeituFamily萌趣贴纸',29),
(7,'images/5791bd559b61164756.jpg!thumb220.jpg','MeituFamily小笼包鸡购物袋',99),
(8,'images/5791bc543cde790377.jpg!thumb220.jpg','MeituFamily雨伞',189),
(9,'images/577a4e1717c8c41387.jpg!thumb220.jpg','MeituFamily印花移动电源',198),
(10,'images/5735400e523ca84322.jpg!thumb220.jpg','MeituFamily X MLGB 夏日潮TEE',198),
(11,'images/570c92e64879a59695.jpg!thumb220.jpg','美图V4/V4s 360度旋转支架',79),
(12,'images/56efc9c440cbd49231.jpg!thumb220.jpg','美图V4/V4s钢化玻璃贴膜',49),
(13,'images/56d80b511c3ce57438.jpg!thumb220.jpg','美图V4/V4s/M6电源适配器',29),
(14,'images/5694bafec3f0072720.jpg!thumb220.jpg','美图V4透明手机壳',49),
(15,'images/5637448bccc0d12917.jpg!thumb220.jpg','美图遥控器第二代',89),
(16,'images/563740ce3335452331.jpg!thumb220.jpg','美图自拍补光灯',99),
(17,'images/5621b24e25e6248824.jpg!thumb220.jpg','Meitu x MLGB潮牌手机壳',129),
(18,'images/561e03a60e3cb47662.jpg!thumb220.jpg','美图手机专属耳机',79),
(19,'images/5577fd81cb20c65594.jpg!thumb220.jpg','美图M4皮革手机壳',79),
(20,'images/5555a36cde5d272584.jpg!thumb220.jpg','美图M4TPU手机壳',198),
(21,'images/5555a19d6f46e70436.jpg!thumb220.jpg','美图M4编织手机壳',99),
(22,'images/546d96814a45a31634.jpg!thumb220.jpg','MLGB x meitu 2016 睡眠装备',99),
(23,'images/5436601baee3893413.jpg!thumb220.jpg','Meitu x MLGB 2016 Mirror T-shirt',168),
(24,'images/5360648abca9a49725.jpg!thumb220.jpg','美图手机2专属手机壳',59),
(25,'images/5640734b8d52c37246.jpg!thumb220.jpg','限量版美图公仔',199),
(26,'images/52bd19692ea8821441.jpg!thumb220.jpg','美图手机1S原装电池',99),
(27,'images/52be697436e8161628.jpg!thumb220.jpg','美图手机1代原装电池',99);

CREATE TABLE meitu_cart( #创建购物车
  cid INT PRIMARY KEY AUTO_INCREMENT,
  userId INT
);


CREATE TABLE meitu_cart_detail(
  did INT PRIMARY KEY AUTO_INCREMENT,#添加编号
  cartId INT, 
  productId INT, #产品编号
  count INT #购买数量
);

