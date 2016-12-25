<?php
namespace Timecamp\Api;

/**
 * Attendance API.
 *
 * @link https://github.com/timecamp2/timecamp-api/blob/master/sections/attendance.md
 */
class AwayTime extends AbstractApi {

    /**
     * Get away time from computer.
     *
     * Example: https://www.timecamp.com/third_party/api/away_time/api_token/a36cabi96bba83f826/from/2015-03-02/to/2015-03-02
     *
     * Get Variable Array Fields:
     *
     * from: '2015-02-02'
     * to: '2015-03-02'
     * users: 1,2,4 (optional, user ids, separated by commas, leave blank to get all users)
     *
     * @param $params
     * @return array
     */
    public function get($params)
    {
        return $this->request('GET', 'away_time/', $params);
    }

}
?>