<?php

/**
 * Gets all the metadate for a given courseid
 * @param int $courseid Course ID
 * @return array Array of metadata values indexed by the field's shortname.
 */
function get_course_metadata($courseid) {
    $handler = \core_customfield\handler::get_handler('core_course', 'course');
    // This is equivalent to the line above.
    // $handler = \core_course\customfield\course_handler::create();
    $datas = $handler->get_instance_data($courseid);
    $metadata = [];
    foreach ($datas as $data) {
        if (empty($data->get_value())) {
            continue;
        }
        $cat = $data->get_field()->get_category()->get('name');
        $metadata[$data->get_field()->get('shortname')] = $cat . ': ' . $data->get_value();
    }
    return $metadata;
}