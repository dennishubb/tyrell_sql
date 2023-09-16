use TyrellSystems;

CREATE TABLE RecQualifications (
    id bigint auto_increment,
    name varchar(255),
    type tinyint
    deleted tinyint,
    PRIMARY KEY (id)
);