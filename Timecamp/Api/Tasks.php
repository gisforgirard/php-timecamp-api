<?php
namespace Timecamp\Api;

/**
 * Tasks API.
 *
 * @link https://github.com/timecamp/timecamp-api/blob/master/sections/tasks.md
 */
/**
 * Class Tasks
 * @package Timecamp\Api
 */
class Tasks extends AbstractApi
{

    /**
     * Return all tasks
     *
     * If you want to get only one specific task you can provide a task_id in get parameter.
     *
     * Get Variable Array Fields:
     *
     * (optional) exclude_archived: 1 or 0 (default - we give both archived and not archived tasks)
     *
     * @return array
     *
     *
     */
    public function get(array $params = array())
    {
        return $this->request('GET', 'tasks/', $params);
    }

    /**
     *
     * Add a new task. To add a task you should have proper permissions.
     *
     * Example: https://www.timecamp.com/third_party/api/tasks/api_token/a36cabi96bba83f826
     *
     * Post Variable Array Fields:
     *
     * name: “Task name” (required)
     * tags: “Tag 1, Tag 2” (optional)
     * parent_id: 0 (optional)
     * external_task_id: "string" (optional)
     * external_parent_id: "string" (optional)
     * budgeted: 2 (optional, in hours)
     * note: "string" (optional)
     * archived: 0 (optional, 0=no, 1=yes)
     * billable: 0 (optional, 0=no, 1=yes)
     * budget_unit: "string" (optional, hours/fee)
     * user_ids: ‘123,563,125’ (optional, comma separated)
     * role: 1 (optional, by default 1, 1=manager, 3=regular user)
     *
     * @param $params
     * @return array
     */
    public function post(array $params = array())
    {
        return $this->request('POST', 'tasks/', $params);
    }

    /**
     *
     * Modify existing task. To modify a task you should have proper permissions.
     *
     * Example: https://www.timecamp.com/third_party/api/tasks/api_token/a36cabi96bba83f826
     *
     * Put Variable Array Fields:
     *
     * task_id: 123 (required)
     * name: “Task name” (optional)
     * tags: “Tag 1, Tag 2” (optional)
     * parent_id: 0 (optional)
     * external_task_id: "string" (optional)
     * external_parent_id: "string" (optional)
     * budgeted: 2 (optional, in hours)
     * note: "string" (optional)
     * archived: 0 (optional, 0=no, 1=yes)
     * billable: 0 (optional, 0=no, 1=yes)
     * budget_unit: "string" (optional, hours/fee)
     * user_ids: ‘123,563,125’ (optional, comma separated)
     * role: 1 (optional, by default 1, 1=manager, 3=regular user)
     *
     * @param $params
     * @return array
     */
    public function put(array $params = array())
    {
        return $this->request('PUT', 'tasks/', $params);
    }

}

?>
