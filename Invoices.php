<?php
namespace Timecamp\Api;

/**
 * Attendance API.
 *
 * @link https://github.com/timecamp2/timecamp-api/blob/master/sections/attendance.md
 */
class Invoices extends AbstractApi {


    /**
     * Return all invoices.
     *
     * @param $params
     * @return array
     */
    public function all($params)
    {
        return $this->request('GET', 'invoice/', $params);
    }

    /**
     * Modify existing invoice.
     *
     * Example: https://www.timecamp.com/third_party/api/invoice/api_token/a36cabi96bba83f826/format/json
     *
     * @param $params
     * @return array
     */
    public function update($params)
    {
        return $this->request('POST', 'invoice/', $params);
    }


    /**
     * Add new invoice.
     *
     * Example: https://www.timecamp.com/third_party/api/invoice/api_token/a36cabi96bba83f826/format/json
     *
     * Put Variable Array Fields:
     *
     * invoiceId:145 (required)
     * clientId:145 (optional)
     * invoiceNumber:1234 (optional)
     * currencyId:1 (optional, 1=USD, , all available IDs can be found here: GET https://www.timecamp.com/third_party/api/currency/format/json/api_token/a36cabi96bba83f826)
     * status:0 (0=DRAFT, 1=PENDING, 2=PAID, default: 0)
     * description:"asdf" (optional)
     * issueDate:2014-03-25 (optional, default: today)
     * noteToClient:"note" (optional)
     * poNumber:1234 (optional)
     * dueDate:"2014-03-25" (optional)
     * quote:false (optional, default: false)
     * entries: array of objects, available properties listed below:
     * description:"asdf" (optional)
     * type:0 (0=SERVICE, 1=PRODUCT, default: 0)
     * quantity:2 (optional)
     * unitCost:22 (optional)
     * taxId:11 (optional, use one of taxes defined by current user, all available IDs can be found here: GET https://www.timecamp.com/third_party/api/tax/format/json/api_token/a36cabi96bba83f826, default: -1)
     * name:"asdf"
     *
     * @param $params
     * @return array
     */
    public function add($params)
    {
        return $this->request('PUT', 'invoice/', $params);
    }


}
?>