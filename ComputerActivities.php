<?php
namespace Timecamp\Api;


/**
 * Class ComputerActivities
 * @link https://github.com/timecamp/timecamp-api/blob/master/sections/computer-activities.md
 * @package Timecamp\Api
 */
class ComputerActivities extends AbstractApi
{


    /**
     * Get all computer time entries for specific user and day.
     *
     * GET parameters:
     *
     * date: ex: 2014-03-07
     * (optional) user_id: ex: 640
     *
     * Example: https://www.timecamp.com/third_party/api/activity/format/json/api_token/a36cabi96bba83f826/date/2014-03-07/user_id/640
     * @param $params
     * @return array
     */
    public function getActivity($params)
    {
        return $this->request('GET', 'activity/', $params);
    }

    /**
     *
     *    Get applications.
     *
     * GET parameters:
     *
     * application_ids: ex: 6319,2132 (application ids separated by commas)
     *
     * Example: https://www.timecamp.com/third_party/api/application/format/json/api_token/a36cabi96bba83f826/application_ids/6319
     * @param $params
     * @return array
     */
    public function getApplication($params)
    {
        return $this->request('GET', 'application/', $params);
    }

    /**
     * Get window titles.
     *
     * GET parameters:
     *
     * window_title_ids: ex: 1,2 (application ids separated by commas)
     *
     * Example: https://www.timecamp.com/third_party/api/window_title/format/json/api_token/a36cabi96bba83f826/window_title_ids/1,2
     *
     * @param $params
     * @return array
     */
    public function getWindowTitle($params)
    {
        return $this->request('GET', 'window_title/', $params);
    }

    /**
     * Add a new computer activities.
     *
     * Example: https://www.timecamp.com/third_party/api/activity/api_token/a36cabi96bba83f826
     *
     * Post Variable Array Fields:
     *
     * computer_activities: array[0]
     * application_name: ‘Internet‘ (for websites use Internet, for other apps use process name)
     * website_domain: ‘yahoo.com‘
     * window_title: ‘example window title’ (optional)
     * start_time: ‘2015-03-03 13:33:00’
     * end_time: ‘2015-03-03 13:34:00’
     * @param $params
     * @return array
     */
    public function addActivity($params)
    {
        return $this->request('POST', 'activity/', $params);
    }
}

?>