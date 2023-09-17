use TyrellSystems;
CREATE TABLE career_paths (
    id bigint auto_increment,
    name varchar(255),
    type tinyint,
    deleted tinyint,
    PRIMARY KEY (id)
);