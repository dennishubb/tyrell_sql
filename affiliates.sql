use TyrellSystems;

CREATE TABLE affiliates (
    id bigint auto_increment,
    name varchar(255),
    type tinyint,
    affiliate_id bigint,
    sort_order int,
    created_by varchar(255),
    created tinyint,
    modified tinyint,
    deleted tinyint,
    PRIMARY KEY (id)
);