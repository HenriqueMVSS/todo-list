Create database todo_list;

use todo_list

CREATE TABLE todo_list.item (
	id_item int auto_increment,
	item varchar(200),
	created_at datetime,
	finished_at datetime null,
	primary key (id_item)
	
)