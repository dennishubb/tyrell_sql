use TyrellSystems;
CREATE TABLE CareerPaths (
    id bigint auto_increment,
    name varchar(255),
    type tinyint,
    deleted tinyint,
    PRIMARY KEY (id)
);