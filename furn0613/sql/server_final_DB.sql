DROP DATABASE IF EXISTS server_final_DB;
CREATE DATABASE IF NOT EXISTS server_final_DB;
USE server_final_DB;

/* Table structure */

CREATE TABLE furniture_table (
  id int PRIMARY KEY auto_increment,

  item_name char(100),
  price decimal(7,2),
  SMLdescript char(255),
  descript text,
  large_img char(50),
  sml_img char(50)
)ENGINE=InnoDB auto_increment=796853 ;



CREATE TABLE user_table(
	id int PRIMARY KEY AUTO_INCREMENT,
	username CHAR(25),
	password CHAR(25),
	privilege ENUM ("normal","admin","super")

);



/* data for table */

INSERT INTO furniture_table
	VALUES 
	(null, 'Ergonomic Executive Leather Office Chair', 250.00,'This highback office chair will take your office to a whole new level.
        With padded armrests, fully adjustable height, and...', 'This highback office chair will take your office to a whole new level.
        With padded armrests, fully adjustable height, and a cushioned headrest; this is comfort, quality, and functionality at an amazing price.', 'leth_office_lrg.jpg', 'leth_office_sml.jpg'),
	
	(null, 'Office Chair',100.00,'Contoured seat and back provides support and helps relieve back strain. Padded arms add extra support. Adjustable arms...','Contoured seat and back provides support and helps relieve back strain. Padded arms add extra support. Adjustable arms, back, and seat make this chair fully
                    customizable to your body, comfort, and needs.', 'office_lrg.jpg', 'office_sml.jpg'),
	
	
	(null, 'Modern Comfort Chair and Ottoman Set',175.00,'This mix of brushed aluminum and crisp white linen give this set a beautiful, contemporary look. Versatile and...','This mix of brushed aluminum and crisp white linen give this set a beautiful, contemporary look. Versatile and comfortable, it is perfect for any room in your home.', 'whitechair_lrg.jpg', 'whitechair_sml.jpg'),

	(null, 'Modern Orange Chair', 225.00,'This chair features low arms and a cushioned back. Upholstered in burnt orange velour fabric with...','This chair features low arms and a cushioned back. Upholstered in
        burnt orange velour fabric with espresso finished legs; this is the perfect piece to finish any room.','orangechair_lrg.jpg', 'orangechair_sml.jpg'),

	(null, 'Vibrant, Contemporary Chair Set', 250.00,'These chairs feature a stainless steel frame, structured arms, and a high back...','These chairs feature a stainless steel frame, structured arms, and a high back.
        Their wool upholstery makes them easy to clean and durable.','redchair_lrg.jpg', 'redchair_sml.jpg'),
	

	(null, 'Classic French Colonial Desk', 125.00,'This solid wood desk will make a great addition to any classic decor. The crisp, clean...', 'This solid wood desk will make a great addition to any classic decor.
        The crisp, clean white finish is elegant and brightens up any space', 'wDesk_lrg.jpg', 'wDesk_sml.jpg'),
	(null, 'Double Pedestal Desk', 800.00,'Cherry Stained Oak desk. Desk features 3 drawers on each side and one in the center...', 'Cherry Stained Oak desk. Desk features 3 drawers on each side and one in the center. This desk  has ample storage with a total of seven drawers; one with a key lock feature.
        Striking the perfect balance between elegance and functionality, this desk will be the focal point of your office.', 'PedalDesk_lrg.jpg', 'PedalDesk_sml.jpg'),
	(null,'Sleek, Frosted Glass Desk',235.00,'This desk features a stainless steel frame and a snow-white smooth glass top. At 1/2 inch thick...','This desk features a stainless steel frame and a snow-white smooth glass top. At 1/2 inch thick, the desk is virtually unbreakable. This is a simple piece that leaves a big impression.','glasstop_lrg.jpg','glasstop_sml.jpg'),
	(null,'Modern White Desk',175.00,'This solid piece desk creates a sturdy work space that offers a bold statement...','This solid piece desk creates a sturdy work space that offers a bold statement.
        The seamless appearance is sleek and modern, yet will fit perfectly into any room.','modernwht_lrg.jpg','modernwht_sml.jpg'),
	(null,'Vintage Wooden Letter Desk',100.00,'This unfinished solid wood desk will fit perfectly into any room. It features several drawers...','This unfinished solid wood desk will fit perfectly into any room. It features several drawers for storage and an easy fold up work area.
        The tapered legs and thin body make it perfect for rooms without much space.','woodstrg_lrg.jpg','woodstrg_sml.jpg');
	



INSERT INTO user_table
	VALUES
	(null,"boss","boss","admin");



/* SHOW DATA: */


select * from furniture_table;

SELECT * from user_table;
