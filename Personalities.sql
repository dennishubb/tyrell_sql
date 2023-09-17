use TyrellSystems;

CREATE TABLE personalities (
    id bigint auto_increment,
    name varchar(255),
    deleted tinyint,
    PRIMARY KEY (id)
);