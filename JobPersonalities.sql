use TyrellSystems;

CREATE TABLE JobsPersonalities (
    id bigint auto_increment,
    job_id bigint,
    personality_id bigint,
    PRIMARY KEY (id)
);