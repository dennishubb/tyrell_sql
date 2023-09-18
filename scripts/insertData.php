<?php

    require_once ('./MysqliDb/MysqliDb.php');

    $db = new MysqliDb ('3.106.60.17', 'root', 'SG7EP)u%#', 'TyrellSystems');

    $randomtext = Array('ｷﾚﾉムんｲ のｱ乇尺ﾑｲの尺', 'キャビンアテンダント', 'ｱﾉﾚのｲ', 'ᄃﾑﾚﾚ ﾑｲｲ乇刀りﾑ刀ｲ',
     '尺ﾑ刀りのﾶ ｲ乇ﾒｲ', 'ん乇ﾚﾚの', '乃ﾘ乇', 'んのＷ 尺ﾑ乇 ﾘのひ', 'ﾘのひｲひ乃乇', 'ｲＷﾉｲᄃん');

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

    //$category_ids = $db->get('job_categories', null, ['id'])->toArray;
    // $personality_ids = $db->get('personalities', null, ['id']);
    // $practicalskill_ids = $db->get('practical_skills', null, ['id']);
    // $basicability_ids = $db->get('basic_abilities', null, ['id']);
    // $tool_ids = $db->where('type', 1)->get('affiliates', null, ['id']);
    // $careerpath_ids = $db->where('type', 3)->get('affiliates', null, ['id']);
    // $recqualification_ids = $db->where('type', 2)->get('affiliates', null, ['id']);

    $category_ids = $db->rawQueryValue('SELECT id from job_categories');
    $personality_ids = $db->rawQueryValue('SELECT id from personalities');
    $practicalskill_ids = $db->rawQueryValue('SELECT id from practical_skills');
    $basicability_ids = $db->rawQueryValue('SELECT id from basic_abilities');
    $tool_ids = $db->rawQueryValue('SELECT id from affiliates WHERE type = 1');
    $careerpath_ids = $db->rawQueryValue('SELECT id from affiliates WHERE type = 2');
    $recqualification_ids = $db->rawQueryValue('SELECT id from affiliates WHERE type = 3');

    // $count = 10000;

    // for($i = 0; $i < $count; $i++){
    //     $types[] = Array(
    //         'name' => "Type $i",
    //         'job_category_id' => $category_ids[rand(0, count($category_ids) - 1)],
    //     );
    // }

    // $jobtype_ids = $db->insertMulti('job_types', $types);

    // echo "job type insert complete\n"; unset($types);

    $jobtype_ids = $db->rawQueryValue('SELECT id from job_types');
    $count = 10000;

    for($i = 0; $i < $count; $i++){
        $jobs[] = Array(
            'name' => $randomtext[rand(0, count($randomtext) - 1)],
            'media_id' => 0,
            'job_category_id' => $category_ids[rand(0, count($category_ids) - 1)],
            'job_type_id' => $jobtype_ids[rand(0, count($jobtype_ids) - 1)],
            'description' => $randomtext[rand(0, count($randomtext) - 1)],
            'detail' => $randomtext[rand(0, count($randomtext) - 1)],
            'business_skill' => $randomtext[rand(0, count($randomtext) - 1)],
            'knowledge' => $randomtext[rand(0, count($randomtext) - 1)],
            'location' => $randomtext[rand(0, count($randomtext) - 1)],
            'activity' => $randomtext[rand(0, count($randomtext) - 1)],
            'academic_degree_doctor' => '',
            'academic_degree_master' => '',
            'academic_degree_professional' => '',
            'academic_degree_bachelor' => '',
            'salary_statistic_group' => $randomtext[rand(0, count($randomtext) - 1)],
            'salary_range_first_year' => '',
            'salary_range_average' => '',
            'salary_range_remarks' => $randomtext[rand(0, count($randomtext) - 1)],
            'restriction' => '',
            'estimated_total_workers' => '',
            'remarks' => $randomtext[rand(0, count($randomtext) - 1)],
            'url' => '',
            'seo_description' => '',
            'seo_keywords' => '',
            'sort_order' => rand(1, 100),
            'publish_status' => rand(0, 1)
        );
    }

    $jobs_ids = $db->insertMulti('jobs', $jobs);

    echo "jobs insert complete\n"; unset($jobs);

    foreach($jobs_ids as $index => $job_id){

        $jobs_personalities[] = Array('job_id' => $job_id, 'personality_id' => $personality_ids[rand(0, count($personality_ids) - 1)]);
        $jobs_practical_skills[] = Array('job_id' => $job_id, 'practical_skill_id' => $personality_ids[rand(0, count($personality_ids) - 1)]);
        $jobs_basic_abilities[] = Array('job_id' => $job_id, 'basic_ability_id' => $basicability_ids[rand(0, count($basicability_ids) - 1)]);

        $type = rand(1,3);

        switch($type){
            case 1:
                $jobs_tools[] = Array('job_id' => $job_id, 'affiliate_id' => $tool_ids[rand(0, count($tool_ids) - 1)]);
                break;
            case 2:
                $jobs_rec_qualifications[] = Array('job_id' => $job_id, 'affiliate_id' => $recqualification_ids[rand(0, count($recqualification_ids) - 1)]);
                break;
            case 3:
                $jobs_career_paths[] = Array('job_id' => $job_id, 'affiliate_id' => $careerpath_ids[rand(0, count($careerpath_ids) - 1)]);
                break;
            default:
                break;
        }
    }

    $db->insertMulti('jobs_personalities', $jobs_personalities);

    echo "job personalities insert complete\n"; unset($jobs_personalities);

    $db->insertMulti('jobs_practical_skills', $jobs_practical_skills);

    echo "jobs_practical_skills insert complete\n"; unset($jobs_practical_skills);

    $db->insertMulti('jobs_basic_abilities', $jobs_basic_abilities);

    echo "jobs_basic_abilities insert complete\n"; unset($jobs_basic_abilities);

    $db->insertMulti('jobs_tools', $jobs_tools);

    echo "jobs_tools insert complete\n"; unset($jobs_tools);

    $db->insertMulti('jobs_rec_qualifications', $jobs_rec_qualifications);

    echo "jobs_rec_qualifications insert complete\n"; unset($jobs_rec_qualifications);

    $db->insertMulti('jobs_career_paths', $jobs_career_paths);

    echo "jobs_career_paths insert complete\n"; unset($jobs_career_paths);

?>
