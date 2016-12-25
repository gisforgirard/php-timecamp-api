<?php
namespace Timecamp\Api;

/**
 * Class TimeEntries
 * @link https://github.com/timecamp/timecamp-api/blob/master/sections/time-entries.md
 * @package Timecamp\Api
 */
class TimeEntries extends AbstractApi
{

    /**
     * Get time entries started in a specific time range.
     *
     * GET parameters:
     *
     * from - date range of the time entries returned
     * to - date range of the time entries returned
     * task_ids (optional) - tasks ids separated by commas, you can leave it empty, so it will get all tasks
     * with_subtasks = 1 (optional), get entries bound to any task (task_id != "0"), put in the url: with_subtasks/1
     * user_ids (optional) - user ids separated by commas, you can leave it empty, so it will get all users, if there is only one user_id provided and this id is wrong, it will also get all users
     * Example: https://www.timecamp.com/third_party/api/entries/format/json/api_token/a36cabi96bba83f826/from/2013-02-01/to/2013-03-20/task_ids/3132,3241/user_ids/123
     *
     * @param $params
     * @return array
     */
    public function get($params)
    {
        return $this->request('GET', 'entries/', $params);
    }

    /**
     * Add a new time entry.
     *
     * Example: https://www.timecamp.com/third_party/api/entries/api_token/a36cabi96bba83f826
     *
     * Post Variable Array Fields:
     *
     * date: ‘2013-06-06’ (required)
     * duration: 3600 (required, in seconds)
     * note: ‘custom note’ (optional)
     * start_time: ‘13:30:00’ (optional)
     * end_time: ‘14:23:00’ (optional)
     * billable: ‘1’ (optional - 1/0)
     * task_id: ‘123’ (optional)
     *
     * @param $params
     * @return array
     */
    public function add($params)
    {
        return $this->request('POST', 'entries/', $params);
    }

    /**
     * Update existing time entry.
     *
     * Example: https://www.timecamp.com/third_party/api/entries/api_token/a36cabi96bba83f826
     *
     * Put Variable Array Fields:
     *
     * id: 13 (required, entry id)
     * duration: 3600 (in seconds, optional)
     * note: ‘custom note’ (optional)
     * start_time: ‘13:30:00’ (optional)
     * end_time: ‘14:23:00’ (optional)
     * billable: ‘1’ (optional - 1/0)
     * invoiceId: ‘123’ (optional)
     * task_id: ‘123’ (optional)
     * updateActivities: 1 (optional - 1/0)
     *
     * @param $params
     * @return array
     */
    public function update($params)
    {
        return $this->request('PUT', 'entries/', $params);
    }

    /**
     * Get currently running timers.
     *
     * Example: https://www.timecamp.com/third_party/api/timer_running/format/json/api_token/a36cabi96bba83f826
     * @param $params
     * @return array
     */
    public function timer_running($params)
    {
        return $this->request('GET', 'timer_running/', $params);
    }

    /**
     * Get manual changes in time entries made by users. This is only available only when it is enabled in Account Settings.
     *
     * GET parameters:
     *
     * from - date range of the time entries returned like 2014-03-19
     * to - date range of the time entries returned like 2014-03-19
     * limit (optional) - limit for the number of rows (you can puty any number like 1000)
     * task_ids (optional) - tasks ids separated by commas, you can leave it empty, so it will get all tasks
     * user_ids (optional) - user ids separated by commas, you can leave it empty, so it willl get all users
     * Example: https://www.timecamp.com/third_party/api/entries_changes/api_token/a36ca9cba8202/from/2014-03-19/to/2014-03-19/format/json
     * @param $params
     * @return array
     */
    public function manual_changes($params)
    {
        return $this->request('GET', 'entries_changes/', $params);
    }


}

?>