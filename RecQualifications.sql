use TyrellSystems;

CREATE TABLE RecQualifications (
    id bigint auto_increment,
    name varchar(255),
    personality_id bigint,
    deleted tinyint,
    PRIMARY KEY (id)
);