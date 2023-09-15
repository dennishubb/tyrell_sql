use TyrellSystems;

CREATE TABLE Jobs (
    id bigint auto_increment,
    name varchar(255),
    media_id bigint,
    job_category_id bigint,
    job_type_id bigint,
    description text,
    detail varchar(255),
    business_skill varchar(255),
    knowledge varchar(255),
    location varchar(255),
    activity varchar(255),
    academic_degree_doctor varchar(255),
    academic_degree_master varchar(255),
    academic_degree_professional varchar(255),
    academic_degree_bachelor varchar(255),
    salary_statistic_group varchar(255),
    salary_range_first_year varchar(255),
    salary_range_average varchar(255),
    salary_range_remarks varchar(255),
    restriction varchar(255),
    estimated_total_workers varchar(255),
    remarks text,
    url varchar(255),
    seo_description varchar(255),
    seo_keywords varchar(255),
    sort_order int,
    publish_status tinyint,
    version varchar(255),
    created_by varchar(255),
    created tinyint,
    modified tinyint,
    deleted tinyint
);