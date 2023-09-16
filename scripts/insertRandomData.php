<?php

    require_once ('./MysqliDb/MysqliDb.php');

    $db = new MysqliDb ('3.106.60.17', 'root', 'SG7EP)u%#', 'TyrellSystems');

    $categories = Array(
        Array('name' => 'ｷﾚﾉムんｲ のｱ乇尺ﾑｲの尺'),
        Array('name' => 'キャビンアテンダント'),
        Array('name' => 'ｱﾉﾚのｲ'),
        Array('name' => 'ᄃﾑﾚﾚ ﾑｲｲ乇刀りﾑ刀ｲ'),
        Array('name' => '尺ﾑ刀りのﾶ ｲ乇ﾒｲ'),
        Array('name' => 'ん乇ﾚﾚの'),
        Array('name' => '乃ﾘ乇'),
        Array('name' => 'んのＷ 尺ﾑ乇 ﾘのひ'),
        Array('name' => 'ﾘのひｲひ乃乇'),
        Array('name' => 'ｲＷﾉｲᄃん')
    );

    $category_ids = $db->insertMulti('JobCategories', $categories);
    $personality_ids = $db->insertMulti('Personalities', $categories);
    $practicalskill_ids = $db->insertMulti('PracticalSkills', $categories);
    $basicability_ids = $db->insertMulti('BasicAbilities', $categories);

    $tools = Array(
        Array('name' => 'ｷﾚﾉムんｲ のｱ乇尺ﾑｲの尺', 'type' => 1),
        Array('name' => 'キャビンアテンダント', 'type' => 1),
        Array('name' => 'ｱﾉﾚのｲ', 'type' => 1),
        Array('name' => 'ᄃﾑﾚﾚ ﾑｲｲ乇刀りﾑ刀ｲ', 'type' => 1),
        Array('name' => '尺ﾑ刀りのﾶ ｲ乇ﾒｲ', 'type' => 1),
        Array('name' => 'ん乇ﾚﾚの', 'type' => 1),
        Array('name' => '乃ﾘ乇', 'type' => 1),
        Array('name' => 'んのＷ 尺ﾑ乇 ﾘのひ', 'type' => 1),
        Array('name' => 'ﾘのひｲひ乃乇', 'type' => 1),
        Array('name' => 'ｲＷﾉｲᄃん', 'type' => 1)
    );
    $tool_ids = $db->insertMulti('Tools', $tools);

    $careerpaths = Array(
        Array('name' => 'ｷﾚﾉムんｲ のｱ乇尺ﾑｲの尺', 'type' => 3),
        Array('name' => 'キャビンアテンダント', 'type' => 3),
        Array('name' => 'ｱﾉﾚのｲ', 'type' => 3),
        Array('name' => 'ᄃﾑﾚﾚ ﾑｲｲ乇刀りﾑ刀ｲ', 'type' => 3),
        Array('name' => '尺ﾑ刀りのﾶ ｲ乇ﾒｲ', 'type' => 3),
        Array('name' => 'ん乇ﾚﾚの', 'type' => 3),
        Array('name' => '乃ﾘ乇', 'type' => 3),
        Array('name' => 'んのＷ 尺ﾑ乇 ﾘのひ', 'type' => 3),
        Array('name' => 'ﾘのひｲひ乃乇', 'type' => 3),
        Array('name' => 'ｲＷﾉｲᄃん', 'type' => 3)
    );
    $careerpath_ids = $db->insertMulti('CareerPaths', $careerpaths);

    $recqualifications = Array(
        Array('name' => 'ｷﾚﾉムんｲ のｱ乇尺ﾑｲの尺', 'type' => 2),
        Array('name' => 'キャビンアテンダント', 'type' => 2),
        Array('name' => 'ｱﾉﾚのｲ', 'type' => 2),
        Array('name' => 'ᄃﾑﾚﾚ ﾑｲｲ乇刀りﾑ刀ｲ', 'type' => 2),
        Array('name' => '尺ﾑ刀りのﾶ ｲ乇ﾒｲ', 'type' => 2),
        Array('name' => 'ん乇ﾚﾚの', 'type' => 2),
        Array('name' => '乃ﾘ乇', 'type' => 2),
        Array('name' => 'んのＷ 尺ﾑ乇 ﾘのひ', 'type' => 2),
        Array('name' => 'ﾘのひｲひ乃乇', 'type' => 2),
        Array('name' => 'ｲＷﾉｲᄃん', 'type' => 2)
    );
    $recqualification_ids = $db->insertMulti('RecQualifications', $recqualifications);

    $count = 100;

    for($i = 0; $i < $count; $i++){
        $types[] = Array(
            'name' => "Type $i",
            'job_category_id' => $category_ids[rand(0, count($category_ids) - 1)],
        );
    }

    $jobtype_ids = $db->insertMulti('JobTypes', $types);

    $count = 10000;

    for($i = 0; $i < $count; $i++){
        $job = Array(
            'name' => $categories[rand(0, count($categories) - 1)],
            'job_category_id' => $category_ids[rand(0, count($category_ids) - 1)],
            'job_type_id' => $jobtype_ids[rand(0, count($jobtype_ids) - 1)],
            'description' => $categories[rand(0, count($categories) - 1)],
            'detail' => $categories[rand(0, count($categories) - 1)],
            'business_skill' => $categories[rand(0, count($categories) - 1)],
            'knowledge' => $categories[rand(0, count($categories) - 1)],
            'location' => $categories[rand(0, count($categories) - 1)],
            'activity' => $categories[rand(0, count($categories) - 1)],
            'academic_degree_doctor' => '',
            'academic_degree_master' => '',
            'academic_degree_professional' => '',
            'academic_degree_bachelor' => '',
            'salary_statistic_group' => $categories[rand(0, count($categories) - 1)],
            'salary_range_first_year' => '',
            'salary_range_average' => '',
            'salary_range_remarks' => $categories[rand(0, count($categories) - 1)],
            'restriction' => '',
            'estimated_total_workers' => '',
            'remarks' => $categories[rand(0, count($categories) - 1)],
            'url' => '',
            'seo_description' => '',
            'seo_keywords' => '',
            'sort_order' => rand(0, 100),
            'publish_status' => rand(0, 1)
        );

        $job_id = $db->insert('Jobs', $job);

        $job_personality = Array('job_id', $job_id, 'personality_id' => $personality_ids[rand(0, count($personality_ids) - 1)]);
        $db->insert('JobsPersonalities', $job_personality);

        $job_practical_skill = Array('job_id', $job_id, 'practical_skill_id' => $practicalskill_ids[rand(0, count($practicalskill_ids) - 1)]);
        $db->insert('JobsPracticalSkills', $job_practical_skill);

        $job_basic_ability = Array('job_id', $job_id, 'basic_ability_id' => $basicability_ids[rand(0, count($basicability_ids) - 1)]);
        $db->insert('JobsBasicAbilities', $job_basic_ability);

        $job_tool = Array('job_id', $job_id, 'affiliate_id' => $tool_ids[rand(0, count($tool_ids) - 1)]);
        $db->insert('JobsTools', $job_tool);

        $job_career_path = Array('job_id', $job_id, 'affiliate_id' => $careerpath_ids[rand(0, count($careerpath_ids) - 1)]);
        $db->insert('JobsCareerPaths', $job_career_path);

        $job_rec_qualification = Array('job_id', $job_id, 'affiliate_id' => $recqualification_ids[rand(0, count($recqualification_ids) - 1)]);
        $db->insert('JobsRecQualifications', $job_rec_qualification);
    }
?>
