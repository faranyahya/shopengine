CREATE TABLE apps (
  id               INT(11)   NOT NULL AUTO_INCREMENT,
  title            VARCHAR(250)       DEFAULT NULL,
  created_datetime TIMESTAMP NULL     DEFAULT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE categories (
  id   INT(11)      NOT NULL AUTO_INCREMENT,
  name VARCHAR(250) NOT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE categories_relations (
  id                 INT(11) NOT NULL AUTO_INCREMENT,
  category_id        INT(11)          DEFAULT NULL,
  parent_category_id INT(11)          DEFAULT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE users (
  id              INT(11)   NOT NULL AUTO_INCREMENT,
  first_name      VARCHAR(250)       DEFAULT NULL,
  last_name       VARCHAR(250)       DEFAULT NULL,
  email           VARCHAR(250)       DEFAULT NULL,
  password        VARCHAR(250)       DEFAULT NULL,
  registerd_date  TIMESTAMP NULL     DEFAULT NULL,
  last_seen       TIMESTAMP NULL     DEFAULT NULL,
  city            VARCHAR(250)       DEFAULT NULL,
  country         VARCHAR(250)       DEFAULT NULL,
  billing_address VARCHAR(250)       DEFAULT NULL,
  phone           VARCHAR(250)       DEFAULT NULL,
  status          INT(11)            DEFAULT NULL,
  role            INT(11)            DEFAULT NULL,
  pic_url         VARCHAR(250)       DEFAULT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE fields (
  id               INT(11)   NOT NULL AUTO_INCREMENT,
  fieldTypes_id    INT(11)   NOT NULL,
  apps_id          INT(11)   NOT NULL,
  title            VARCHAR(50)        DEFAULT NULL,
  created_datetime TIMESTAMP NULL     DEFAULT NULL,
  PRIMARY KEY (id),
  KEY apps_id (apps_id),
  KEY fieldTypes_id (fieldTypes_id),
  CONSTRAINT fields_ibfk_1 FOREIGN KEY (apps_id) REFERENCES apps (id),
  CONSTRAINT fields_ibfk_2 FOREIGN KEY (fieldTypes_id) REFERENCES fieldtypes (id)
);


CREATE TABLE fieldtypes (
  id   INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(250)     DEFAULT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE nodes (
  id              INT(11)   NOT NULL AUTO_INCREMENT,
  apps_id         INT(11)   NOT NULL,
  categories_id   INT(11)            DEFAULT NULL,
  title           INT(11)            DEFAULT NULL,
  quantity        INT(11)            DEFAULT NULL,
  datetime        INT(11)            DEFAULT NULL,
  status          INT(11)            DEFAULT NULL,
  price           INT(11)            DEFAULT NULL,
  thumb           VARCHAR(250)       DEFAULT NULL,
  image           VARCHAR(250)       DEFAULT NULL,
  modify_datetime TIMESTAMP NULL     DEFAULT NULL,
  PRIMARY KEY (id),
  KEY apps_id (apps_id),
  CONSTRAINT nodes_ibfk_1 FOREIGN KEY (apps_id) REFERENCES apps (id)
);


CREATE TABLE orders (
  id              INT(11)   NOT NULL AUTO_INCREMENT,
  nodes_id        INT(11)   NOT NULL,
  customers_id    INT(11)   NOT NULL,
  datetime        TIMESTAMP NULL     DEFAULT NULL,
  shipping_status INT(11)            DEFAULT NULL,
  quantity        INT(11)            DEFAULT NULL,
  prod_total      INT(11)            DEFAULT NULL,
  modify_datetime INT(11)            DEFAULT NULL,
  PRIMARY KEY (id),
  KEY customers_id (customers_id),
  KEY nodes_id (nodes_id),
  CONSTRAINT orders_ibfk_1 FOREIGN KEY (customers_id) REFERENCES customers (id),
  CONSTRAINT orders_ibfk_2 FOREIGN KEY (nodes_id) REFERENCES nodes (id)
);