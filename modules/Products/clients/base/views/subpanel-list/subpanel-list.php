<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$viewdefs['Products']['base']['view']['subpanel-list'] = array(
  'panels' => array(
    array(
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => array(
        array(
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => 'true',
        ),
        array(
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
          'name' => 'status',
        ),
        array(
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'account_name',
        ),
        array(
          'target_record_key' => 'contact_id',
          'target_module' => 'Contacts',
          'label' => 'LBL_LIST_CONTACT_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'contact_name',
        ),
        array(
          'label' => 'LBL_LIST_DATE_PURCHASED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_purchased',
        ),
        array(
          'label' => 'LBL_LIST_DISCOUNT_PRICE',
          'enabled' => true,
          'default' => true,
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'name' => 'discount_price',
          'related_fields' => array(
              'currency_id',
              'base_rate'
          ),
        ),
        array(
          'label' => 'LBL_LIST_SUPPORT_EXPIRES',
          'enabled' => true,
          'default' => true,
          'name' => 'date_support_expires',
        ),
          [
              'name' => 'add_on_to_name',
              'type' => 'add-on-to',
              'default' => false,
          ],
      ),
    ),
  ),
);
