<?php
/**
 * Pimcore
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @copyright  Copyright (c) 2009-2013 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

abstract class Pimcore_Model_List_Resource_Abstract extends Pimcore_Model_Resource_Abstract {

    protected  function getOrder() {

        $orderKey = $this->model->getOrderKey();
        $order = $this->model->getOrder();

        if (!empty($order) || !empty($orderKey)) {
            $c = 0;
            $lastOrder = $order[0];
            $parts = array();

            if(is_array($orderKey)) {
                foreach ($orderKey as $key) {
                    if ($order[$c]) {
                        $lastOrder = $order[$c];
                    }

                    $parts[] = $key . " " . $lastOrder;

                    $c++;
                }
            }

            if(!empty($parts)) {
                return " ORDER BY " . implode(", ", $parts);
            }
        }

        return "";
    }

    protected  function getGroupBy() {
        if ($this->model->getGroupBy()) {
            return " GROUP BY " . $this->model->getGroupBy();
        }
        return "";
    }

    protected function getOffsetLimit() {
        if ($limit = $this->model->getLimit() and $offset = $this->model->getOffset()) {
            return " LIMIT " . $offset . "," . $limit;
        }

        if ($limit = $this->model->getLimit()) {
            return " LIMIT " . $limit;
        }
        return "";
    }

    protected function getCondition() {
        if ($cond = $this->model->getCondition()) {
            return " WHERE " . $cond . " ";
        }
        return "";
    }
}
