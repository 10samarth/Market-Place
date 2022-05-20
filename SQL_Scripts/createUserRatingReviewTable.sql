USE 272CosmoDB;

CREATE TABLE IF NOT EXISTS `tbl_users_ratings` (

  `rating_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  
  `product_id` int(5) NULL DEFAULT NULL,
  
  `product_name` varchar(255) NOT NULL,
  
  `product_company_id` int(5) NULL DEFAULT NULL,

  `product_company` varchar(255) NOT NULL,

  `ratings` smallint(3) NOT NULL,
  
  `user_id` int(3) NOT NULL,
  
  `remark` varchar(255),

  `created_at` timestamp NULL DEFAULT NULL,

  `updated_at` timestamp NULL DEFAULT NULL,

  PRIMARY KEY (`rating_id`)

) AUTO_INCREMENT=100 ;