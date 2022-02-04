-- reset everything
-- drop the chatroom database
DROP DATABASE IF EXISTS chatroom;

-- and to create a new one
CREATE DATABASE IF NOT EXISTS chatroom;

-- use chatroom database
USE chatroom;

-- create user table
CREATE TABLE user (
	user_id int(6) unsigned auto_increment,
	username char(25),
	PRIMARY KEY (user_id)
);

-- create message table
CREATE TABLE message (
	msg_id int(6) unsigned auto_increment,
	user_id int(6) unsigned,
    chat_id char(2),
	time datetime,
    text text,
	PRIMARY KEY (user_id, msg_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (chat_id) REFERENCES chat(chat_id)
);

-- create chat table
create table chat (
	chat_id char(2),
    name char(50),
    description char(256),
	PRIMARY KEY (chat_id)
);
