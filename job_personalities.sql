use TyrellSystems;

CREATE TABLE jobs_personalities (
    id bigint auto_increment,
    job_id bigint,
    personality_id bigint,
    PRIMARY KEY (id)
);