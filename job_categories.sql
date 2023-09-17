use TyrellSystems;
CREATE TABLE job_categories (
    id bigint auto_increment,
    name varchar(255),
    sort_order int,
    created_by varchar(255),
    created tinyint,
    modified tinyint,
    deleted tinyint,
    PRIMARY KEY (id)
);